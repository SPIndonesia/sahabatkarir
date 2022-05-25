<?php

use App\Http\Controllers\KategoriController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PembayaranController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Sahabatkarir;
use App\Http\Controllers\user\PaketController;
use Illuminate\Support\Facades\Auth;

// Route::get('/kategori', [KategoriController::class, 'index']);
// Route::put('kategori/ubah/{id}', [KategoriController::class, 'ubah'])->name('kategori.ubah');
// Route::delete('kategori/hapus/{id}', [KategoriController::class, 'hapus'])->name('kategori.hapus');

Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('coba/admin', function () {
        return 'home';
    });
    Route::get('/admin/user', [UserController::class, 'index']);
    Route::delete('/admin/user/delete/$id', [UserController::class, 'destroy'])->name('user.delete');
    Route::get('admin/kategori', [KategoriController::class, 'index']);
    Route::post('admin/kategori/store', [KategoriController::class, 'store'])->name('kategori.store');
    Route::put('admin/kategori/ubah/{id}', [KategoriController::class, 'ubah'])->name('kategori.ubah');
    Route::delete('admin/kategori/hapus/{id}', [KategoriController::class, 'hapus'])->name('kategori.hapus');
    Route::get('/admin/pembayaran', [PembayaranController::class, 'index']);
});

Route::middleware(['auth', 'user'])->group(function () {
    Route::get('coba/admin2', function () {
        return 'admin';
    });
});

Route::get('/beranda', function () {
    return view('index');
});
Route::get('/pembayaran', [PembayaranController::class, 'index']);
Auth::routes();


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
