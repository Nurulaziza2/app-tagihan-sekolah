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
// menggabungkan route, agar dapat diakses ketika user login
Route::middleware(['auth'])->group(function(){
    Route::resource('user', 'UserController');
    
});


Route::get('/', function () {
    return view('welcome');
});

// kalkulator
Route::get('/kalkulator', function() {
    return view('kalkulator');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

