<?php

use App\Http\Controllers\SiswaController;
use App\Http\Controllers\GuruController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/siswa', [SiswaController::class, 'tampil'])->name('siswa.tampil');
Route::get('/siswa/tambah', [SiswaController::class, 'tambah'])->name('siswa.tambah');
Route::post('/siswa/submit', [SiswaController::class, 'submit'])->name('siswa.submit');
Route::get('/siswa/edit/{id}', [SiswaController::class, 'edit'])->name('siswa.edit');
Route::post('/siswa/update/{id}', [SiswaController::class, 'update'])->name('siswa.update');
Route::post('/siswa/delete/{id}', [SiswaController::class, 'delete'])->name('siswa.delete');
Route::get('/siswa', [SiswaController::class, 'tampil'])->name('siswa.tampil');
Route::get('/guru', [GuruController::class, 'tampil'])->name('guru.tampil');
Route::get('/guru/tambah', [GuruController::class, 'tambah'])->name('guru.tambah');
Route::post('/guru/submit', [GuruController::class, 'submit'])->name('guru.submit');
Route::get('/guru/edit/{id}', [GuruController::class, 'edit'])->name('guru.edit');
Route::post('/guru/update/{id}', [GuruController::class, 'update'])->name('guru.update');
Route::post('/guru/delete/{id}', [GuruController::class, 'delete'])->name('guru.delete');