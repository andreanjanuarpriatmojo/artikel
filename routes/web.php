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

Auth::routes();

Route::get('/blog','FrontController@index');
Route::get('/view','FrontController@viewall');
Route::get('/blog/{id}','FrontController@view');
Route::get('/admin/artikel', 'BlogController@index')->name('artikel');
Route::get('/admin/artikel/create', 'BlogController@create')->name('artikel.create');
Route::post('/admin/artikel', 'BlogController@store')->name('artikel.store');
Route::get('/admin/artikel/{id}','BlogController@show')->name('artikel.show');
Route::get('/admin/artikel/edit/{id}', 'BlogController@edit')->name('artikel.edit');
Route::put('/admin/artikel/{id}', 'BlogController@update')->name('artikel.update');
Route::delete('/admin/artikel/{id}','BlogController@destroy')->name('artikel.destroy');
Route::view('/admin','admin.index')->name('admin')->middleware('auth');

//Route COmment

Route::post('/comment/store', 'CommentController@store')->name('comment.add');
Route::post('/reply/store', 'CommentController@replyStore')->name('reply.add');



/*Laraval Based View
Route::view('cb','home');
Route::view('cb1','welcome');*/