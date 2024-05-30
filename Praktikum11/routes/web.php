<?php


use App\Http\Controllers\AdminController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\ParamedikController;
use App\Http\Controllers\PeriksaController;
use App\Http\Controllers\Unit_kerjaController;
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

Route::get('admin', [AdminController::class, 'index'] );
Route::get('admin/pegawai', [PegawaiController::class, 'index']);
Route::get('admin/pegawai/paramedik', [ParamedikController::class, 'index']);
Route::get('admin/pegawai/paramedik/periksa', [PeriksaController::class, 'index']);
Route::get('admin/pegawai/paramedik/periksa/unit_kerja', [Unit_kerjaController::class, 'index']);
Route::get('admin/pegawai/paramedik/periksa/unit_kerja/pasien', [PasienController::class, 'index'])->name('pasiens.index');
Route::get('admin/pegawai/paramedik/periksa/unit_kerja/pasien/create', [PasienController::class, 'create'])->name('pasiens.create');
Route::post('admin/pegawai/paramedik/periksa/unit_kerja/pasien/store', [PasienController::class, 'store'])->name('pasiens.store');
Route::get('admin/pegawai/paramedik/periksa/unit_kerja/pasien/{pasien}', [PasienController::class, 'show'])->name('pasiens.show');
Route::get('admin/pegawai/paramedik/periksa/unit_kerja/pasien/{pasien}/edit', [PasienController::class, 'edit'])->name('pasiens.edit');
Route::put('admin/pegawai/paramedik/periksa/unit_kerja/pasien/{pasien}', [PasienController::class, 'update'])->name('pasiens.update');
Route::delete('admin/pegawai/paramedik/periksa/unit_kerja/pasien/{pasien}', [PasienController::class, 'destroy'])->name('pasiens.destroy');
