<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
// rute logout
Route::get('logout', function () {
    Auth::logout();
    return redirect('login');
});


// menggabungkan route, agar dapat diakses ketika user login
Route::middleware(['auth'])->group(function(){
    Route::resource('user', 'UserController')->middleware('admin');
    Route::resource('siswa', 'SiswaController')->middleware('operator');
    Route::resource('kelas', 'KelasController')->middleware('operator');
    Route::resource('biaya', 'BiayaController')->middleware('admin');
    Route::resource('tagihan', 'TagihanController')->middleware('operator');
    Route::resource('pembayaran', 'PembayaranController')->middleware('operator');
    Route::resource('kwitansi', 'KwitansiController')->middleware('operator');
    Route::resource('kartuspp', 'KartuSppController')->middleware('operator');
    Route::resource('invoice', 'InvoiceController')->middleware('operator');
    Route::resource('userprofil', 'UserProfilController');
    Route::get('laporan','LaporanController@index')->name('laporan.index');
    Route::get('laporan/pembayaran','LaporanController@pembayaran')->name('laporan.pembayaran');
    Route::get('laporan/tagihan','LaporanController@tagihan')->name('laporan.tagihan');
    Route::post('siswaimport/upload','SiswaImportController@upload')->name('siswa.import');
    
});



Route::get('/', function (Request $request) {
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
})->middleware('auth')->name('Dashboard');

// kalkulator
Route::get('/kalkulator', function() {
    return view('kalkulator');
});

Auth::routes();



