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
    return view ('welcome');
});

//route basic
Route::get('/belajar', function () {
    echo ('<center> <u> <h1> HALO SEMUANYA <br> </h1> </u> </center>');
    echo ('<center> <u> <h3> Kami Sedang Belajar Laravel Dasar </h3> </u> </center>');
});

//route basic lanjut ke view
Route::get('home', function () {
    return view ('home');
});

Route::get('index', function () {
    return view ('pages.index');
});

Route::get('information', function () {
    return view ('pages.information');
});

Route::get('create', function () {
    return view ('pages.create');
});

//route parameter
Route::get('/biodata/{nama}/{umur}/{alamat}/{jenis_kelamin}/{kelas}/{hobby}',
    function ($a,$b,$c,$d,$e,$f){
    return view ('pages.biodata', compact ('a','b','c','d','e','f'));
});

//route optional parameter
Route::get('pesanan/{makanan?}', function ($a="pesanan kosong") {
    return view ('pages.pesanan', compact ('a'));
});




