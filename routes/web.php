<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\KameraController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\FotograferController;
use App\Http\Controllers\SocialiteController;
use App\Http\Controllers\UserController;

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

Route::get('Kamera/{kamera}', [KameraController::class, 'show'])->name('detil-kamera');

Route::get('/Fotografer', [FotograferController::class, 'index']);

Route::get('Fotografer/{fotografer}', [FotograferController::class, 'show'])->name('detil-fotografer');

Route::get('/Team', function () {
    return view('layout.team', [
        'title' => 'Tentang Kami'
    ]);
});
Route::get('/Login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/Login', [LoginController::class, 'authenticate']);
Route::post('/Logout', [LoginController::class, 'logout']);
Route::get('/email', function () {
    return view('login.email', [
        'title' => 'Reset Password'
    ]);
})->name('reset-password');

Route::get('/Register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/Register', [RegisterController::class, 'store']);

//route untuk menambahkan dan menghapus fotografer ke keranjang
Route::post('/tambah-fotografer', [CartController::class, 'tambahFotografer'])->name('keranjang.tambah.fotografer')->middleware('auth');

//route untuk menambahkan dan menghapus kamera ke keranjang
Route::post('/tambah-kamera', [CartController::class, 'tambahKamera'])->name('keranjang.tambah.kamera')->middleware('auth');

//route untuk menghapus produk dari keranjang
Route::post('/hapus-keranjang', [CartController::class, 'destroy'])->middleware('auth')->name('hapus-keranjang');

// Untuk redirect ke Google
Route::get('login/google/redirect', [SocialiteController::class, 'redirect'])
    ->middleware(['guest'])
    ->name('redirect');

// Untuk callback dari Google
Route::get('login/google/callback', [SocialiteController::class, 'callback'])
    ->middleware(['guest'])
    ->name('callback');

// Untuk logout
Route::post('logout', [SocialiteController::class, 'logout'])
    ->middleware(['auth'])
    ->name('logout');

Route::get('/profile', [UserController::class, 'index'])->name('profile')->middleware('auth');
