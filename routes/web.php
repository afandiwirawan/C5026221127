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
    return view('welcome');
});

Route::get('halo', function () {
    //diisi apa saja
    return "Halo Apa kabar" ;
});

Route::get('halo2', function () {
    return "<h1>Halo Apa kabar</h1>" ;
});

Route::get('blog1', function () {
    return view('blog') ;
});

Route::get('tugas1', function () {
    return view('tugas1') ;
});

Route::get('tugas2(1)', function () {
    return view('tugas2(1)') ;
});

Route::get('tugas2(2)', function () {
    return view('tugas2(2)') ;
});

Route::get('tugas3', function () {
    return view('tugas3') ;
});

Route::get('materi1', function () {
    return view('materi1') ;
});

Route::get('materi2', function () {
    return view('materi2') ;
});

Route::get('materi3', function () {
    return view('materi3') ;
});

Route::get('materi4', function () {
    return view('materi4') ;
});

Route::get('materi5', function () {
    return view('materi5') ;
});

Route::get('perkalian', 'App\Http\Controllers\DosenController@index');

Route::get('biodata', 'App\Http\Controllers\DosenController@biodata');

Route::get('showjam/{jam}', 'App\Http\Controllers\DosenController@showtime');

Route::get('formulir', 'App\Http\Controllers\DosenController@formulir');

Route::post('/formulir/proses', 'App\Http\Controllers\DosenController@proses');

Route::get('/blog', function () {
    return view('home') ;
});

Route::get('/blog/tentang', function () {
    return view('tentang') ;
});

Route::get('/blog/kontak', function () {
    return view('kontak') ;
});

//route CRUD
Route::get('/pegawai','App\Http\Controllers\PegawaiController@index');
Route::get('/pegawai/tambah','App\Http\Controllers\PegawaiController@tambah');
Route::post('/pegawai/store','App\Http\Controllers\PegawaiController@store');
Route::get('/pegawai/edit/{id}','App\Http\Controllers\PegawaiController@edit');
Route::post('/pegawai/update','App\Http\Controllers\PegawaiController@update');
Route::get('/pegawai/hapus/{id}','App\Http\Controllers\PegawaiController@hapus');
Route::get('/pegawai/view/{id}','App\Http\Controllers\PegawaiController@view');

Route::get('/pegawai/cari','App\Http\Controllers\PegawaiController@cari');

Route::get('/nilaikuliah','App\Http\Controllers\NilaiKuliahController@index');
Route::get('/nilaikuliah/tambah','App\Http\Controllers\NilaiKuliahController@tambah');
Route::post('/nilaikuliah/store','App\Http\Controllers\NilaiKuliahController@store');

Route::get('/unggas','App\Http\Controllers\UnggasController@index');
Route::get('/unggas/tambah','App\Http\Controllers\UnggasController@tambah');
Route::post('/unggas/store','App\Http\Controllers\UnggasController@store');
Route::get('/unggas/edit/{kodeunggas}','App\Http\Controllers\UnggasController@edit');
Route::post('/unggas/update','App\Http\Controllers\UnggasController@update');
Route::get('/unggas/hapus/{kodeunggas}','App\Http\Controllers\UnggasController@hapus');
Route::get('/unggas/view/{kodeunggas}','App\Http\Controllers\UnggasController@view');
Route::get('/unggas/cari','App\Http\Controllers\UnggasController@cari');

Route::get('/keranjangbelanja','App\Http\Controllers\KeranjangController@index');
Route::get('/keranjangbelanja/beli','App\Http\Controllers\KeranjangController@beli');
Route::post('/keranjangbelanja/store','App\Http\Controllers\KeranjangController@store');
Route::get('/keranjangbelanja/hapus/{id}','App\Http\Controllers\KeranjangController@hapus');

Route::get('/kategori','App\Http\Controllers\kategoriController@index');
Route::post('/kategori/view','App\Http\Controllers\kategoriController@view');
