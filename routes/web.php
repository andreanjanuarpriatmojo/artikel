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


Route::resource('admin/artikel', 'BlogController');

/*
Route::get('/artikel', 'BlogController@index');
Route::get('/artikel/create', 'BlogController@create');
Route::post('/artikel', 'BlogController@store');
Route::get('/artikel/{id}','BlogController@show');
Route::get('/artikel/{id}/edit', 'BlogController@edit');
Route::put('/artikel/{id}', 'BlogController@update');
Route::delete('/artikel/{id}','BlogController@destroy');
*/
Route::view('/input/artikel','admin.input_artikel');
Route::view('/input/kegiatan','admin.input_kegiatan');
Route::view('/daftar/artikel','admin.daftar_artikel');
Route::view('/daftar/kegiatan','admin.daftar_kegiatan');
Route::view('/view','artikel.index');
