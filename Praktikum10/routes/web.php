<?php


use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\PasienController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/kabar', function () {
    return view('kondisi');
});

Route::get('/pasien', function () {
    return view('pasien');
});

Route::get('/pegawai', [PegawaiController::class, 'index']);
Route::get('/pegawai/pasien', [PasienController::class, 'index']);


