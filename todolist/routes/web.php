<?php

use App\Http\Controllers\todolistController;
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

// Route::get('/','App\Http\Controllers\todolistController@index');//update an laravel 8 harus lengkap path nya dari App sampai controller kita
// Route::get('/create','App\Http\Controllers\todolistController@create');//jika mennggunakan url
// Route::post('/create','App\Http\Controllers\todolistController@store');//jika menambah data dari form input
// Route::get('/edit/{id}','App\Http\Controllers\todolistController@edit');//@edit berarti saat user mengetikkan url tersebut maka akan dijalankan method edit di controller
// Route::put('/edit/{id}','App\Http\Controllers\todolistController@update');//method patch / put untuk mengupdate data
// Route::delete('/hapus/{id}','App\Http\Controllers\todolistController@destroy');

Route::resource('/todolist','App\Http\Controllers\todolistController');