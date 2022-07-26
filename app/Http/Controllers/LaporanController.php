<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;

class LaporanController extends Controller
{
    public function index()
    {
        $data['routePembayaran'] = 'laporan.pembayaran';
        $data['routeBelumBayar'] = 'laporan.belumbayar';
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
    public function belumbayar(Request $request)
    {   
        $requestData = $request->validate([
            'bulanBelumBayar' => 'required',
            'tahunBelumBayar' => 'required',
        ]);
        $bulanHuruf=Carbon::parse($request->tahunBelumBayar.'-'.$request->bulanBelumBayar.'-01')->translatedformat('F');
        $data['bulanHuruf']=$bulanHuruf;
        $bulan = $request->bulanBelumBayar;
        $tahun = $request->tahunBelumBayar;
        $model = \App\Tagihan::whereMonth('tanggal_tagihan', $bulan)
            ->whereYear('tanggal_tagihan', $tahun)
            ->where('status', 'Belum Bayar')
            ->get();    
        $data['model'] = $model;

        
        return view('laporan_belumbayar',$data);
    }
}
