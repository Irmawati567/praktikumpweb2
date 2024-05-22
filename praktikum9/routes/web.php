<?php


use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use app\Http\Controller\PegawaiController;
Route::get('/', function () {
    return view('welcome');
});

Route::get('/kabar', function () {
    return view('kondisi');
});

Route::get('/pasien', function () {
    return view('pasien');
});

Route::get('/admin', [AdminController::class,'index']);

Route::get('/pegawai', [PegawaiController::class,'index']);
      return view ()
?>