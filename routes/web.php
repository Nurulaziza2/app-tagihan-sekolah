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
    Route::get('/', 'HomeController@index')->name('Dashboard');
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





// kalkulator
Route::get('/kalkulator', function() {
    return view('kalkulator');
});

Auth::routes();



