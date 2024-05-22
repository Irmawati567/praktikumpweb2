<?php


use Illuminate\Support\Facades\Route;
use app\Http\Controller\PegawaiController;
Route::get('/', function () {
    return view('welcome');
});

Route::get('/admin', [PegawaiController::class,'index']);

Route::get('/admin/index', function () {
    return view('admin.index');
});

Route::get('/admin/pegawai', function () {
    return view('admin.pegawai');
});
    

?>