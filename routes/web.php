<?php

use App\Http\Controllers\BerandaController;
use App\Http\Controllers\FotograferController;
use App\Http\Controllers\KameraController;
use App\Http\Controllers\ProdukController;
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
    return view('beranda');
});

Route::get('/Beranda', [BerandaController::class,'index']);
Route::get('/Produk', [ProdukController::class, 'index']);

Route::get('/Kamera', [KameraController::class, 'index']);

Route::get('Kamera/{kamera}', [KameraController::class, 'show']);

Route::get('/Fotografer', [FotograferController::class, 'index']);

Route::get('Fotografer/{fotografer}', [FotograferController::class, 'show']);
