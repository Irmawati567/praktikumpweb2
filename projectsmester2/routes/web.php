<?php

namespace App\Http\Controllers;
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

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('cek');
});

Route::get('/home', function () {
    return view('frontend.index');
});

Route::get('/about', function () {
    return view('frontend.about');
});

Route::get('/service', function () {
    return view('frontend.service');
});

Route::get('/booking', function () {
    return view('frontend.booking');
});

Route::get('/team', function () {
    return view('frontend.team');
});

Route::get('/testimonial', function () {
    return view('frontend.testimonial');
});

Route::get('/contact', function () {
    return view('frontend.contact');
});

Route::get('/login', [Auth\LoginController::class, 'index'])->name('login');
Route::post('/login/proses', [Auth\LoginController::class, 'login']);
Route::get('/logout',[Auth\LoginController::class, 'logout']);

Route::get('/register', [Auth\RegisterController::class, 'index']);
Route::post('/register/proses', [Auth\RegisterController::class, 'register']);

Route::middleware(['auth'])->group(function(){

    Route::get('/index', function () {
        return view('backend.dashboard');
    });
    /* Route Montir */
    Route::get('/montir', [MontirController::class, 'index']);
    Route::get('/montir/create', [MontirController::class, 'create']);
    Route::post('/montir/simpan-data', [MontirController::class, 'store']);

    Route::get('/montir/edit/{id}', [MontirController::class, 'edit']);
    Route::post('/montir/update/{id}', [MontirController::class, 'update']);
    Route::get('/montir/delete/{id}', [MontirController::class, 'delete']);

    /* Route Layanan */
    Route::get('/layanan', [LayananController::class, 'index']);
    Route::get('/layanan/create', [LayananController::class, 'create']);
    Route::post('/layanan/simpan-data', [LayananController::class, 'store']);

    Route::get('/layanan/edit/{id}', [LayananController::class, 'edit']);
    Route::post('/layanan/update/{id}', [LayananController::class, 'update']);
    Route::get('/layanan/delete/{id}', [LayananController::class, 'delete']);

    /* Route Kategori Montir */
    Route::get('/kategori_montir', [KategoriController::class, 'index']);
    Route::get('/kategori_montir/create', [KategoriController::class, 'create']);
    Route::post('/kategori_montir/simpan-data', [KategoriController::class, 'store']);

    Route::get('/kategori_montir/edit/{id}', [KategoriController::class, 'edit']);
    Route::post('/kategori_montir/update/{id}', [KategoriController::class, 'update']);
    Route::get('/kategori_montir/delete/{id}', [KategoriController::class, 'delete']);

    /* Route Detail Layanan */
    Route::get('/detailLayanan', [DetailController::class, 'index']);
    Route::get('/detailLayanan/create', [DetailController::class, 'create']);
    Route::post('/detailLayanan/simpan-data', [DetailController::class, 'store']);

    Route::get('/detailLayanan/edit/{id}', [DetailController::class, 'edit']);
    Route::post('/detailLayanan/update/{id}', [DetailController::class, 'update']);
    Route::get('/detailLayanan/delete/{id}', [DetailController::class, 'delete']);
});