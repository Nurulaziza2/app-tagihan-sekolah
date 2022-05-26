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
    
});


Route::get('/', function () {
    return view('welcome');
});

// kalkulator
Route::get('/kalkulator', function() {
    return view('kalkulator');
});
Route::get('/contoh', function() {
    return view('bahan.blank');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

