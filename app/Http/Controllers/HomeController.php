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
        $jumlah_tagihan = \App\Tagihan::count()->where('status', '=', 'Belum Bayar');
        $jumlah_tagihan_lunas = \App\Tagihan::count()->where('status', '=', 'Lunas');
        $jumlah_pembayaran = \App\Pembayaran::sum('jumlah')->get();
        $data['jumlah_siswa'] = $jumlah_siswa;
        $data['jumlah_tagihan'] = $jumlah_tagihan;
        $data['jumlah_tagihan_lunas'] = $jumlah_tagihan_lunas;
        $data['jumlah_pembayaran'] = $jumlah_pembayaran;
        dd($data);
        return view('home',$data);
    }
}
