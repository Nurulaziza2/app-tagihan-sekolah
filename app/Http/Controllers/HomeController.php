<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
        $jumlah_siswa = \App\Siswa::count();
        $jumlah_tagihan = \App\Tagihan::where('status', '=', 'Belum Bayar')->count();
        $jumlah_tagihan_lunas = \App\Tagihan::where('status', '=', 'Lunas')->count();
        $jumlah_pembayaran = \App\Pembayaran::sum('jumlah');
        $jumlah_operator = \App\User::where('akses', '=', 'operator')->count();
        $jenis_biaya = \App\Biaya::count();
        $data['jumlah_operator'] = $jumlah_operator;
        $data['jenis_biaya'] = $jenis_biaya;
        $data['jumlah_siswa'] = $jumlah_siswa;
        $data['jumlah_tagihan'] = $jumlah_tagihan;
        $data['jumlah_tagihan_lunas'] = $jumlah_tagihan_lunas;
        $data['jumlah_pembayaran'] = $jumlah_pembayaran;
        return view('home',$data);
    }
}
