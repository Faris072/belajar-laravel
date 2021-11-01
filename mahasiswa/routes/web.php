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
    return view('index', ['title' => 'Homepage Mahasiswa']);
});

Route::get('/listmahasiswa','App\Http\Controllers\mahasiswaController@indexlist');

Route::resource('/pengaturan','App\Http\Controllers\mahasiswaController');

Route::get('/fasilitas', function(){
    return view('fasilitas',['title' => 'fasilitas']);
});

Route::resource('/fasilitas/manage','App\Http\Controllers\fasilitasController');
