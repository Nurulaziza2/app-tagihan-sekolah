<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KartuSppController extends Controller
{
    public function show($id){
        $model = \App\Tagihan::with('pembayaran')->findOrFail($id);

        $kartuTagihan = \App\Tagihan::with('pembayaran')
        ->whereYear('tanggal_tagihan',$model->tanggal_tagihan->format('Y'))
        ->where('siswa_id',$model->siswa_id)
        ->orderBy('tanggal_tagihan', 'asc')
        ->get();
        $data['kartuTagihan'] = $kartuTagihan;
        $data['model'] = $model;
        return view('operator.kartu_spp', $data);
    }
}
