<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return redirect('/home');
});

Route::get('/keluar',function(){
    \Auth::logout();

    return redirect('login');
});
    //pasien
    Route::group(['middleware'=>'auth'],function(){
    Route::get('/pasien','\App\Http\Controllers\Pasien_controller@index');
    Route::get('/pasien/add','\App\Http\Controllers\Pasien_controller@add');
    Route::post('/pasien/add','\App\Http\Controllers\Pasien_controller@store');
    Route::get('/pasien/{id}','\App\Http\Controllers\Pasien_controller@edit');
    Route::put('/pasien/{id}','\App\Http\Controllers\Pasien_controller@update');
    Route::delete('/pasien/{id}','\App\Http\Controllers\Pasien_controller@delete');

    //kunjungan
    Route::get('/kunjungan','\App\Http\Controllers\Kunjungan_controller@index');
    Route::get('/kunjungan/add','\App\Http\Controllers\Kunjungan_controller@add');
    Route::post('/kunjungan/add','\App\Http\Controllers\Kunjungan_controller@store');
    Route::get('/kunjungan/{id}','\App\Http\Controllers\Kunjungan_controller@edit');
    Route::put('/kunjungan/{id}','\App\Http\Controllers\Kunjungan_controller@update');
    Route::delete('/kunjungan/{id}','\App\Http\Controllers\Kunjungan_controller@delete');


    //Rekam Medis
    Route::get('/rekam','\App\Http\Controllers\Rekam_controller@index');
    Route::get('/rekam/{id}','\App\Http\Controllers\Rekam_controller@detail');

    //Penyakit
    Route::get('/rekam/add{id}','\App\Http\Controllers\Rekam_controller@add');

    Route::post('/rekam/add{id}','\App\Http\Controllers\Rekam_controller@store');
    
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
