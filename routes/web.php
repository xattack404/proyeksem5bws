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

Route::get('/', ['as' => 'frontend.home.index', 'uses' => 'IndexController@index']);
Route::get('registrasi/index', ['as' => 'frontend.registrasi.index', 'uses' => 'RegistrasiController@index']);
Route::post('registrasi/simpan', ['as' => 'frontend.registrasi.store', 'uses' => 'RegistrasiController@store']);


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('panel/signout', ['as' => 'signout', 'uses' => 'Auth\LoginController@signout']);


//Route Menu manejemen berita
Route::get('panel/berita', ['as' => 'berita.index', 'uses' => 'BeritaController@index']);
Route::get('panel/berita/create', ['as' => 'berita.create', 'uses' => 'BeritaController@create']);
Route::post('panel/berita/create', ['as' => 'berita.store', 'uses' => 'BeritaController@store']);
Route::get('panel/berita/edit/{id}', ['as' => 'berita.edit', 'uses' => 'BeritaController@edit']);
Route::put('panel/berita/edit/{id}', ['as' => 'berita.update', 'uses' => 'BeritaController@update']);
Route::get('panel/berita/delete/{id}', ['as' => 'berita.delete', 'uses' => 'BeritaController@delete']);

//Route Menu Kategori
Route::get('panel/kategori', ['as' => 'kategori.index', 'uses' => 'KategoriController@index']);
Route::get('panel/kategori/create', ['as' => 'kategori.create', 'uses' => 'KategoriController@create']);
Route::post('panel/kategori/create', ['as' => 'kategori.store', 'uses' => 'KategoriController@store']);
Route::get('panel/kategori/edit/{id}', ['as' => 'kategori.edit', 'uses' => 'KategoriController@edit']);
Route::put('panel/kategori/edit/{id}', ['as' => 'kategori.update', 'uses' => 'KategoriController@update']);
Route::get('panel/kategori/delete/{id}', ['as' => 'kategori.delete', 'uses' => 'KategoriController@delete']);
