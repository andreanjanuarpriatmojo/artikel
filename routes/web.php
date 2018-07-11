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

Route::view('/','artikel.index');
Route::view('/artikel','artikel');
Auth::routes();

Route::get('/home', 'HomeController@index');

Route::resource('/coba','CobaController');



Route::get('/admin/artikel', 'BlogController@index')->name('artikel');
Route::get('/admin/artikel/create', 'BlogController@create')->name('artikel.create');
Route::post('/admin/artikel', 'BlogController@store')->name('artikel.store');
Route::get('/admin/artikel/{id}','BlogController@show')->name('artikel.show');
Route::get('/admin/artikel/{id}/edit', 'BlogController@edit')->name('artikel.edit');
Route::put('/admin/artikel/{id}', 'BlogController@update')->name('artikel.update');
Route::delete('/admin/artikel/{id}','BlogController@destroy')->name('artikel.destroy');


Route::view('/admin','admin.index');
Route::view('/login','admin.login');
Route::view('/register','admin.register');


//Route::resource('admin/artikel', 'BlogController');

//conflict


Route::view('/input/artikel','admin.input-artikel');
Route::view('/input/kegiatan','admin.input-kegiatan');

Route::view('/daftar/artikel','admin.daftar-artikel');
Route::view('/daftar/kegiatan','admin.daftar-kegiatan');
Route::view('/view','admin.view');


Route::get('storage/{filename}', function ($filename)
{
    return Image::make(storage_path('public/' . $filename))->response();
});

//Route::view('/input/artikel','admin.input_artikel');
//Route::view('/input/kegiatan','admin.input_kegiatan');
//Route::view('/daftar/artikel','admin.daftar_artikel');
//Route::view('/daftar/kegiatan','admin.daftar_kegiatan');
//Route::view('/view','artikel.index');


/*
*/