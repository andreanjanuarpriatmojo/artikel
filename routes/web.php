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

Route::view('/','welcome');
Route::view('/artikel','artikel');
Auth::routes();

Route::get('/home', 'HomeController@index');

Route::resource('/coba','CobaController');

Route::view('/admin','admin.index');
Route::view('/login','admin.login');
Route::view('/register','admin.register');
Route::view('/input/artikel','admin.input_artikel');
Route::view('/input/kegiatan','admin.input_kegiatan');
Route::view('/daftar/artikel','admin.daftar_artikel');
Route::view('/daftar/kegiatan','admin.daftar_kegiatan');
Route::view('/view','admin.view');