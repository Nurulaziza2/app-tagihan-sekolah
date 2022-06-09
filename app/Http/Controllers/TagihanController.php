<?php

namespace App\Http\Controllers;

use Auth;
use App\Biaya;
use App\Siswa;
use App\Tagihan;
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
    public function index()
    {
        $models = Tagihan::latest()->paginate(100);
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
        // $data['siswaList']= Siswa::pluck('nama','id');
        $data['biayaList']= Biaya::get()->pluck('nama_biaya','id');
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
            'prodi'=> 'required',

        ]);
        $biaya = Biaya::findOrFail($request->biaya_id);
        $siswa = Siswa::query();
        $siswa->where('prodi',$request->prodi);
        $siswa = $siswa->get();
        $tanggalTagihan = \Carbon\Carbon::parse($request->tanggal_tagihan);
        $bulanTagihan = $tanggalTagihan->format('m');
        $tahunTagihan = $tanggalTagihan->format('Y');
        foreach ($siswa as $item){
            $cekTagihan = Tagihan::whereMonth('tanggal_tagihan',$bulanTagihan)
                ->whereYear('tanggal_tagihan',$tahunTagihan)
                ->where('siswa_id',$item->id)
                ->first();
            if ($cekTagihan == null){
            $tagihan = new Tagihan();
            $tagihan->siswa_id = $item->id;
            $tagihan->tanggal_tagihan = $request->tanggal_tagihan;
            $tagihan->tanggal_jatuh_tempo = $request->tanggal_jatuh_tempo;
            $tagihan->nama = $biaya->nama;
            $tagihan->jumlah = $biaya->nominal;
            $tagihan->status ='Baru';
            $tagihan->dibuat_oleh = Auth::user()->name;
            $tagihan->save();
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
        // $data['model'] = Model::findOrFail($id);
        // return view($this->viewPrefix . '_show', $data);
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

        // $model =  Model::findOrFail($id);
        // $model->delete();
        // flash("Data berhasil dihapus")->success();
        // return back();
    }
}
