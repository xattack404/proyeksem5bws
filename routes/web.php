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
Route::get('/news', ['as' => 'frontend.home.news', 'uses' => 'IndexController@news']);
Route::get('registrasi/index', ['as' => 'frontend.registrasi.index', 'uses' => 'RegistrasiController@index']);
Route::post('registrasi/simpan', ['as' => 'frontend.registrasi.store', 'uses' => 'RegistrasiController@store']);
Route::get('ajax/{id}', ['as' => 'frontend.registrasi.ajax', 'uses' => 'RegistrasiController@show']);
Route::get('news/detailnews/{url}', ['as' => 'frontend.home.detailnews', 'uses' => 'IndexController@detailnews']);
Route::get('cekdata/index', ['as' => 'frontend.cekdata.index', 'uses' => 'CekdataController@index']);
Route::get('cekdata/form/{nisn}', ['as' => 'frontend.cekdata.form', 'uses' => 'CekdataController@form']);
Route::put('cekdata/sumbit/{nisn}', ['as' => 'frontend.cekdata.submit', 'uses' => 'CekdataController@update']);
Route::get('pengurus/index', ['as' => 'frontend.pengurus.index', 'uses' => 'ProfilPengurusController@index']);


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

//Route menu Pembayaran
Route::get('panel/pembayaran', ['as' => 'pembayaran.index', 'uses' => 'PembayaranController@index']);
Route::get('panel/pembayaran/proses/{no_invoice}', ['as' => 'pembayaran.proses', 'uses' => 'PembayaranController@proses']);
Route::get('panel/pembayaran/verifikasi/{no_invoice}', ['as' => 'pembayaran.verifikasi', 'uses' => 'PembayaranController@verifikasi']);
Route::get('panel/pembayaran/tolak/{no_invoice}', ['as' => 'pembayaran.tolak', 'uses' => 'PembayaranController@tolak']);

//Data Santri baru
Route::get('panel/datasantri', ['as' => 'datasantri.index', 'uses' => 'DatasantriController@index']);


//Route Menu Kategori
Route::get('panel/kategori', ['as' => 'kategori.index', 'uses' => 'KategoriController@index']);
Route::get('panel/kategori/create', ['as' => 'kategori.create', 'uses' => 'KategoriController@create']);
Route::post('panel/kategori/create', ['as' => 'kategori.store', 'uses' => 'KategoriController@store']);
Route::get('panel/kategori/edit/{id}', ['as' => 'kategori.edit', 'uses' => 'KategoriController@edit']);
Route::put('panel/kategori/edit/{id}', ['as' => 'kategori.update', 'uses' => 'KategoriController@update']);
Route::get('panel/kategori/delete/{id}', ['as' => 'kategori.delete', 'uses' => 'KategoriController@delete']);

//Route Menu Pengurus
Route::get('panel/pengurus', ['as' => 'pengurus.index', 'uses' => 'PengurusController@index']);
Route::get('panel/pengurus/create', ['as' => 'pengurus.create', 'uses' => 'PengurusController@create']);
Route::post('panel/pengurus/create', ['as' => 'pengurus.store', 'uses' => 'PengurusController@store']);
Route::get('panel/pengurus/edit/{id}', ['as' => 'pengurus.edit', 'uses' => 'PengurusController@edit']);
Route::put('panel/pengurus/edit/{id}', ['as' => 'pengurus.update', 'uses' => 'PengurusController@update']);
Route::get('panel/pengurus/delete/{id}', ['as' => 'pengurus.delete', 'uses' => 'PengurusController@delete']);

//Route Menu Pendaftaran
Route::get('panel/biayapendaftaran', ['as' => 'biayapendaftaran.index', 'uses' => 'BiayaPendaftaranController@index']);
Route::get('panel/biayapendaftaran/create', ['as' => 'biayapendaftaran.create', 'uses' => 'BiayaPendaftaranController@create']);
Route::post('panel/biayapendaftaran/create', ['as' => 'biayapendaftaran.store', 'uses' => 'BiayaPendaftaranController@store']);
Route::get('panel/biayapendaftaran/edit/{id}', ['as' => 'biayapendaftaran.edit', 'uses' => 'BiayaPendaftaranController@edit']);
Route::put('panel/biayapendaftaran/edit/{id}', ['as' => 'biayapendaftaran.update', 'uses' => 'BiayaPendaftaranController@update']);
Route::get('panel/biayapendaftaran/delete/{id}', ['as' => 'biayapendaftaran.delete', 'uses' => 'BiayaPendaftaranController@delete']);

//Route Menu Kontak
Route::get('panel/kontak', ['as' => 'kontak.index', 'uses' => 'KontakController@index']);
Route::get('panel/kontak/create', ['as' => 'kontak.create', 'uses' => 'KontakController@create']);
Route::post('panel/kontak/create', ['as' => 'kontak.store', 'uses' => 'KontakController@store']);
Route::get('panel/kontak/edit/{id}', ['as' => 'kontak.edit', 'uses' => 'KontakController@edit']);
Route::put('panel/kontak/edit/{id}', ['as' => 'kontak.update', 'uses' => 'KontakController@update']);
Route::get('panel/kontak/delete/{id}', ['as' => 'kontak.delete', 'uses' => 'KontakController@delete']);

//Route Menu Artikel
Route::get('panel/artikel', ['as' => 'artikel.index', 'uses' => 'ArtikelController@index']);
Route::get('panel/artikel/create', ['as' => 'artikel.create', 'uses' => 'ArtikelController@create']);
Route::post('panel/artikel/create', ['as' => 'artikel.store', 'uses' => 'ArtikelController@store']);
Route::get('panel/artikel/edit/{id}', ['as' => 'artikel.edit', 'uses' => 'ArtikelController@edit']);
Route::put('panel/artikel/edit/{id}', ['as' => 'artikel.update', 'uses' => 'ArtikelController@update']);
Route::get('panel/artikel/delete/{id}', ['as' => 'artikel.delete', 'uses' => 'ArtikelController@delete']);