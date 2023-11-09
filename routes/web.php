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

Route::get('blog', function () {
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
