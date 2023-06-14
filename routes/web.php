<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/login', function () {
    return view('login');
});

Route::get('/', function () {
    return view('dashboard');
});

Route::get('/dataibu', function () {
    return view('dataibu');
});

Route::get('/dataanak', function () {
    return view('dataanak');
});

Route::get('/dataimunisasi', function () {
    return view('dataimunisasi');
});

Route::get('/datapetugas', function () {
    return view('datapetugas');
});
Route::get('/laporan', function () {
    return view('laporan');
});
Route::get('/timbangan', function () {
    return view('timbangan');
});
Route::get('/jadwalposyandu', function () {
    return view('jadwalposyandu');
});
Route::get('/kegiatan', function () {
    return view('kegiatan');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/inputdata', function () {
    return view('inputdata');
});

Route::post('/tambah-data-anak', 'DataAnakController@store')->name('tambah_data_anak');
