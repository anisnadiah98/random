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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/post','PostController@index')->name('post.index');
Route::get('/post/create','PostController@create')->name('post.create');
Route::get('/post/{post}/edit','PostController@edit')->name('post.edit');
Route::post('/post','PostController@store')->name('post.store');
Route::post('/post/{post}','PostController@update')->name('post.update');
Route::post('/post/{post}/delete','PostController@delete')->name('post.delete');

Auth::routes();
//define semua routing dekat web.php sahaja
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/Anis', 'AnisController@index')->name('Anis');

