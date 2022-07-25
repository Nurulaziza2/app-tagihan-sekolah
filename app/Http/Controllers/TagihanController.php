<?php

namespace App\Http\Controllers;

use Auth;
use App\Biaya;
use App\Kelas;
use App\Siswa;
use App\Tagihan;
use Carbon\Carbon;
use Illuminate\Http\Request;

class TagihanController extends Controller
{
    private $viewPrefix = "operator.tagihan"; 
    private $routePrefix = "tagihan";  
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {   
        $title = "Data Tagihan";
        $info= "Silahkan Pilih Bulan dan tahun untuk melihat data tagihan";
        if($request->filled('bulan') && $request->filled('tahun')){
            $models = Tagihan::whereMonth('tanggal_tagihan', $request->bulan)
            ->whereYear('tanggal_tagihan', $request->tahun)
            ->latest()
            ->get();
            $bulan=Carbon::parse($request->tahun.'-'.$request->bulan.'-01')->translatedformat('F');
            $title= " Data Tagihan Bulan ".$bulan." ".$request->tahun;
            $info= "Tidak Ada Data Pada Bulan ".$bulan." ".$request->tahun;
        }
        else{
            $models= collect([]);
        }
        $data['info'] = $info;
        $data['title'] = $title;
        $data['models'] = $models;
        $data['routePrefix'] = $this->routePrefix;
        return view($this->viewPrefix . '_index', $data);
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $model = new Tagihan();
        $data['model'] = $model;
        $data['biayaList']= Biaya::get()->pluck('nama_biaya','id');
        $data['kelasList']= Kelas::get()->pluck('nama','id');
        $data['method'] = 'POST';
        $data['route'] = $this->routePrefix .'.store';
        $data['namaTombol']= 'Buat Tagihan';
        return view($this->viewPrefix . '_form', $data);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $requestData = $request->validate([
            'biaya_id' => 'required',
            'tanggal_tagihan' => 'required',
            'tanggal_jatuh_tempo' => 'required',
            'kelas'=> 'required',

        ]);
        $biaya = Biaya::findOrFail($request->biaya_id);
        $siswa = Siswa::query();
        $siswa->where('kelas_id',$request->kelas)->
        whereDate('tgl_masuk', '<=', $request->tanggal_tagihan)->
        where('jumlah_tagihan', '>', 0);
        $siswa = $siswa->get();
        $tanggalTagihan = \Carbon\Carbon::parse($request->tanggal_tagihan);
        $bulanTagihan = $tanggalTagihan->format('m');
        $nbulanTagihan = $tanggalTagihan->translatedformat('F');
        $tahunTagihan = $tanggalTagihan->format('Y');
        foreach ($siswa as $item){
            $cekTagihan = Tagihan::whereMonth('tanggal_tagihan',$bulanTagihan)
                ->whereYear('tanggal_tagihan',$tahunTagihan)
                ->where('siswa_id',$item->id)
                ->first();
            
            if($cekTagihan == null){
            $tagihan = new Tagihan();
            $tagihan->siswa_id = $item->id;
            $tagihan->tanggal_tagihan = $request->tanggal_tagihan;
            $tagihan->tanggal_jatuh_tempo = $request->tanggal_jatuh_tempo;
            $tagihan->nama = $biaya->nama;
            $tagihan->jumlah = $biaya->nominal;
            $tagihan->status ='Belum Bayar';
            $tagihan->dibuat_oleh = Auth::user()->name;
            $tagihan->save();
            $siswa = Siswa::findOrFail($item->id);
            $siswa->jumlah_tagihan = $siswa->jumlah_tagihan  -1;
            // if($siswa->jumlah_tagihan === 0){
            //     $siswa->status = "lunas";
            // }
            $siswa->save();
            }
            else {
                flash('Tagihan untuk siswa kelas '.$item->kelas->nama.' pada bulan '.$nbulanTagihan.' '.$tahunTagihan.' sudah ada')->error();
                return back();
            }

        }

        flash('Tagihan berhasil dibuat')->success();
        return redirect()->route($this->routePrefix .'.index' );

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $model = \App\Tagihan::with('pembayaran')->findOrFail($id);

        //munculkan denda 
        $tglSekarang = \Carbon\Carbon::now();
        if($tglSekarang->gt($model->tanggal_jatuh_tempo)){
            $telatHari= $tglSekarang->diffInDays($model->tanggal_jatuh_tempo);
            $jumlahDenda =  $telatHari * 2000;
            $data['telatHari'] = $telatHari;
        }
        else{
            $jumlahDenda = 0;
        }
        $data['jumlahDenda'] = $jumlahDenda;

        $kartuTagihan = \App\Tagihan::with('pembayaran')
        ->whereYear('tanggal_tagihan',$model->tanggal_tagihan->format('Y'))
        ->where('siswa_id',$model->siswa_id)
        ->orderBy('tanggal_tagihan', 'asc')
        ->get();
        $dataPembayaran = \App\Pembayaran::where('tagihan_id',$id)->get();
        $data['dataPembayaran'] = $dataPembayaran;
        $data['kartuTagihan'] = $kartuTagihan;
        $data['model'] = $model;

        //menentukan jumlah total bayar
        $data['total'] = $model->jumlah+$data['jumlahDenda'];
        
        
        $modelPembayaran = new \App\Pembayaran();
        $data['modelPembayaran'] = $modelPembayaran;
        $data['method'] = 'POST';
        $data['route'] = 'pembayaran.store';
       return view($this->viewPrefix . '_show', $data);
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // $model = Model::findOrFail($id);
        // $data['model'] = $model;
        // $data['method'] = 'PUT';
        // $data['route'] = [$this->routePrefix . '.update', $id];
        // // $data['kelas']= Kelas::pluck('nama','id');
        // $data['namaTombol']= 'Update';
        // return view($this->viewPrefix . '_form', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        
        // $requestData = $request->validate([
        //     'nama' => 'required',
        //     'nis' => 'required|unique:tagihan,nis,' . $id,
        //     'email'=> 'required|email|unique:tagihan',
        //     'jk' => 'required',
        //     // 'kelas_id'=> 'nullable',
        //     'tgl_masuk' => 'required',
        // ]);
        // if ($request->hasFile('gambar')){
        //     $requestData['gambar'] = $request->file('gambar')->store('public/images');
        //     $model = Model::findOrFail($id);

        //     if($model->gambar != null) {
        //         \Storage::delete($model->gambar);
        //     }
        // }

        // $requestData['user_id'] = Auth::user()->id;
        
        // Model::where('id', $id)->update($requestData);
        // flash("Data berhasil diupdate");
        // return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $model =  Tagihan::findOrFail($id);
        if($model->pembayaran->count() >= 1 ) {
            flash('Tagihan tidak dapat dihapus karena sudah ada pembayaran')->error();
            return back();
        }
        
        $siswa = Siswa::findOrFail($model->siswa_id);
        $siswa->jumlah_tagihan = $siswa->jumlah_tagihan  +1;
        $siswa->save();
        $model->delete();
        flash("Data berhasil dihapus")->success();
        return back();
    }
}
