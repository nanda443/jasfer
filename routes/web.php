<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\KameraController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\FotograferController;

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

Route::get('/', [BerandaController::class, 'index']);

Route::get('/Beranda', [BerandaController::class, 'index']);

Route::get('/Produk', [ProdukController::class, 'index']);

Route::get('/Kamera', [KameraController::class, 'index']);

Route::get('Kamera/{kamera}', [KameraController::class, 'show']);

Route::get('/Fotografer', [FotograferController::class, 'index']);

Route::get('Fotografer/{fotografer}', [FotograferController::class, 'show']);

Route::get('/Login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/Login', [LoginController::class, 'authenticate']);
Route::post('/Logout', [LoginController::class, 'logout']);

Route::get('/Register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/Register', [RegisterController::class, 'store']);

//route untuk menambahkan fotografer
Route::post('/tambah-fotografer', [CartController::class, 'tambahFotografer'])->name('keranjang.tambah.fotografer')->middleware('auth');
Route::post('/tambah-kamera', [CartController::class, 'tambahKamera'])->name('keranjang.tambah.kamera')->middleware('auth');
