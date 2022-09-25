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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('index', [
        "title" => "Beranda"
    ]);
});

Route::get('/keluarga', function () {
    return view('keluarga', [
        "title" => "Keluarga"
    ]);
});

Route::get('/pendidikan', function () {
    return view('pendidikan', [
        "title" => "Pendidikan"
    ]);
});

Route::get('/pekerjaan', function () {
    return view('pekerjaan', [
        "title" => "Pekerjaan"
    ]);
});

Route::get('/kutipan', function () {
    return view('kutipan', [
        "title" => "Kutipan"
    ]);
});

Route::get('/hubungi', function () {
    return view('hubungi', [
        "title" => "Hubungi Saya"
    ]);
});

// Route::get('/portfolio', function () {
//     return view('portfolio', [
//         "title" => "Portfolio"
//     ]);
// });
