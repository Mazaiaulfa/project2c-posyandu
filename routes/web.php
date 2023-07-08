<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\CheckLevel;
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

Route::get('/', function () {
    return view('auth/login');
});
Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/input', function () {
    return view('inputdata');
});

Route::middleware(['web', 'level:admin',])->group(function () {
    // Rute yang hanya dapat diakses oleh pengguna dengan level 'admin'
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
    Route::get('/dashboard', function () {
        return view('dashboard');
    });
});












Route::post('/tambah-data-anak', [App\Http\Controllers\AnakController::class,'store'])->name('anak.store');
Route::get('/dataanak', [App\Http\Controllers\AnakController::class, 'index'])->name('dataanak');
Route::delete('dataanak/{id}', [App\Http\Controllers\AnakController::class, 'destroy'])->name('anak.destroy');
Route::get('/anak/{id}', [App\Http\Controllers\AnakController::class, 'show'])->name('anak.show');
Route::get('dataanak/edit/{id}', [App\Http\Controllers\AnakController::class, 'edit'])->name('anak.edit');
Route::put('dataanak/{id}', [App\Http\Controllers\AnakController::class, 'update'])->name('anak.update');



Route::post('/tambah-data-ibu', [App\Http\Controllers\IbuController::class,'store2'])->name('ibu.store2');
Route::get('/dataibu', [App\Http\Controllers\IbuController::class, 'dataibu'])->name('dataibu');
Route::delete('dataibu/{id}', [App\Http\Controllers\IbuController::class, 'destroy1'])->name('ibu.destroy');
Route::get('/ibu/{id}', [App\Http\Controllers\IbuController::class, 'show1'])->name('ibu.show');
Route::get('dataibu/edit/{id}', [App\Http\Controllers\IbuController::class, 'edit1'])->name('ibu.edit');
Route::put('dataibu/{id}', [App\Http\Controllers\IbuController::class, 'update1'])->name('ibu.update');




Route::post('/tambah-data-imunisasi', [App\Http\Controllers\ImunisasiController::class,'store3'])->name('imunisasi.store3');
Route::get('/dataimunisasi', [App\Http\Controllers\ImunisasiController::class, 'dataimunisasi'])->name('dataimunisasi');
Route::delete('dataimuisasi/{id}', [App\Http\Controllers\ImunisasiController::class, 'destroy2'])->name('imunisasi.destroy');
Route::get('/imunisasi/{id}', [App\Http\Controllers\ImunisasiController::class, 'show2'])->name('imunisasi.show');
Route::get('dataimunisasi/edit/{id}', [App\Http\Controllers\ImunisasiController::class, 'edit2'])->name('imunisasi.edit');
Route::put('dataimunisasi/{id}', [App\Http\Controllers\ImunisasiController::class, 'update2'])->name('imunisasi.update');



Route::post('/tambah-data-petugas', [App\Http\Controllers\PetugasController::class,'store6'])->name('petugas.store6');
Route::get('/datapetugas', [App\Http\Controllers\PetugasController::class, 'datapetugas'])->name('datapetugas');
Route::delete('datapetugas/{id}', [App\Http\Controllers\PetugasController::class, 'destroy4'])->name('petugas.destroy');
Route::get('/petugas/{id}', [App\Http\Controllers\PetugasController::class, 'show4'])->name('petugas.show');
Route::get('datapetugas/edit/{id}', [App\Http\Controllers\PetugasController::class, 'edit4'])->name('petugas.edit');
Route::put('datapetugas/{id}', [App\Http\Controllers\PetugasController::class, 'update4'])->name('petugas.update');



Route::post('/tambah-data-timbang', [App\Http\Controllers\TimbangController::class,'store4'])->name('timbang.store4');
Route::get('/timbangan', [App\Http\Controllers\TimbangController::class, 'datatimbang'])->name('datatimbang');
Route::delete('timbangan/{id}', [App\Http\Controllers\TimbangController::class, 'destroy5'])->name('timbang.destroy');
Route::get('/timbang/{id}', [App\Http\Controllers\TimbangController::class, 'show5'])->name('timbang.show');
Route::get('timbangan/edit/{id}', [App\Http\Controllers\TimbangController::class, 'edit5'])->name('timbang.edit');
Route::put('timbangan/{id}', [App\Http\Controllers\TimbangController::class, 'update5'])->name('timbang.update');



Route::post('/tambah-data-jadwal', [App\Http\Controllers\JadwalController::class,'store8'])->name('jadwal.store8');
Route::get('/jadwalposyandu', [App\Http\Controllers\JadwalController::class, 'datajadwal'])->name('datajadwal');
Route::delete('jadwalposyandu/{id}', [App\Http\Controllers\JadwalController::class, 'destroy3'])->name('jadwal.destroy');
Route::get('/jadwal/{id}', [App\Http\Controllers\JadwalController::class, 'show3'])->name('jadwal.show');
Route::get('jadwalposyandu/edit/{id}', [App\Http\Controllers\JadwalController::class, 'edit3'])->name('jadwal.edit');
Route::put('jadwalposyandu/{id}', [App\Http\Controllers\JadwalController::class, 'update3'])->name('jadwal.update');



Route::post('/tambah-data-kegiatan', [App\Http\Controllers\KegiatanController::class,'store5'])->name('kegiatan.store5');
Route::get('/kegiatan', [App\Http\Controllers\KegiatanController::class, 'kegiatan'])->name('kegiatan');




Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::post('/logout', [App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('logout');
