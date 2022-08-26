<?php

namespace App\Http\Controllers;
use Auth;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Pembayaran as Model;
use App\Tagihan;

class PembayaranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
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
            'jumlah' => 'required',
            'tanggal' => 'required',
            'tagihan_id' => 'required',
        ]);

        $tagihan = Tagihan::findOrFail($requestData['tagihan_id']);
        //cek denda
        $tglSekarang = \Carbon\Carbon::now();
        // $tglSekarang = \Carbon\Carbon::parse('2022-07-12');
        if ($tglSekarang->gt($tagihan->tanggal_jatuh_tempo)) {
            $telatHari = $tglSekarang->diffInDays($tagihan->tanggal_jatuh_tempo);
            $denda = $telatHari * 2000;
        } else {
            $denda = 0;
        }
        $jumlahBayar = $tagihan->jumlah + $denda;
        $kelas_id = $tagihan->kelas_id;
        $requestData['jumlah'] = str_replace('.', '', $requestData['jumlah']);
        $requestData['dibayar_oleh'] = 'Siswa';
        $requestData['kelas_id'] = $kelas_id;
        $requestData['diterima_oleh'] = Auth::user()->name;
        if ($tagihan->status == 'Lunas') {
            flash('Tagihan sudah lunas')->warning();
            return back();
        }
        if ($requestData['jumlah'] < $jumlahBayar) {
            flash('Tagihan harus dibayar lunas')->warning();
            return back();
        }
        if ($requestData['jumlah'] > $jumlahBayar) {
            flash('Pembayaran melebihi biaya tagihan')->warning();
            return back();
        }
        $tagihan->jumlah_bayar = $jumlahBayar;
        $tagihan->denda = $denda;
        $tagihan->status = 'Lunas';
        $tagihan->save();

        /*
        
        //$requestData[kelas_id] = $kelas_id;
        dd($requestData);
        $pembayaran = new Model();
        $pembayaran->tagihan_id = $request->tagihan_id;
        $pembayaran->kelas_id = $kelas_id;
        $pembayaran->jumlah = $request->jumlah;
        $pembayaran->tanggal = $request->tanggal;

        $tagihan->siswa_id = $item->id;
        $tagihan->kelas_id = $item->kelas_id;
        $tagihan->tanggal_tagihan = $tanggalTagihan->format('Y-m-d');
        $tagihan->tanggal_jatuh_tempo = $tanggalJatuhTempo;
        $tagihan->nama = $biaya->biaya->nama;
        $tagihan->jumlah = $biaya->biaya->nominal;
        $tagihan->status = 'Belum Bayar';
        $tagihan->dibuat_oleh = Auth::user()->name;
        $tagihan->save();
        $siswa = Siswa::findOrFail($item->id);
        $siswa->jumlah_tagihan = $siswa->jumlah_tagihan - 1;
        $siswa->save();
        */

        Model::create($requestData);
        flash('Tagihan Berhasil Dibayar')->success();
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
