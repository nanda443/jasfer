<?php

use App\Http\Controllers\FotograferController;
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

Route::get('/Beranda', function () {
    return view('beranda');
});

Route::get('/Produk', function () {
    return view('produk');
});

Route::get('/Kamera', function () {
    return view('kamera');
});

Route::get('/Fotografer', [FotograferController::class, 'index']);

Route::get('fotografer/{fotografer}', [FotograferController::class, 'show']);
