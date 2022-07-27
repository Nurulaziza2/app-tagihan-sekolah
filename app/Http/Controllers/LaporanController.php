<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;

class LaporanController extends Controller
{
    public function index()
    {
        $data['routePembayaran'] = 'laporan.pembayaran';
        $data['routeTagihan'] = 'laporan.tagihan';
        return view('laporan',$data);
    }

    public function pembayaran(Request $request)
    {
        $requestData = $request->validate([
            'bulanPembayaran' => 'required',
            'tahunPembayaran' => 'required',
        ]);
        $bulanHuruf=Carbon::parse($request->tahunPembayaran.'-'.$request->bulanPembayaran.'-01')->translatedformat('F');
        $data['bulanHuruf']=$bulanHuruf;
        $bulan = $request->bulanPembayaran;
        $tahun = $request->tahunPembayaran;
        $model = \App\Pembayaran::whereMonth('tanggal', $bulan)
            ->whereYear('tanggal', $tahun)
            ->get();
        $data['model'] = $model;
        return view('laporan_pembayaran',$data);
    }

    public function tagihan(Request $request)
    {   
        $requestData = $request->validate([
            'bulanTagihan' => 'required',
            'tahunTagihan' => 'required',
        ]);
        $bulanHuruf=Carbon::parse($request->tahunTagihan.'-'.$request->bulanTagihan.'-01')->translatedformat('F');
        $data['bulanHuruf']=$bulanHuruf;
        $bulan = $request->bulanTagihan;
        $tahun = $request->tahunTagihan;
        $data['tahun']= $tahun;
        $model = \App\Tagihan::query();
        $model->whereMonth('tanggal_tagihan', $bulan)
            ->whereYear('tanggal_tagihan', $tahun)
            ->where('status', 'Belum Bayar');  
        $model = $model->get();
        $data['model'] = $model;
        
        return view('laporan_tagihan',$data);
    }
}
