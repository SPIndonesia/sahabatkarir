<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Sahabatkarir;
use App\Http\Controllers\user\KategoriController;
use App\Http\Controllers\user\PaketController;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});


Route::resource('paket', PaketController::class);
Route::resource('kategori', KategoriController::class);
// Route::get('/paket', [Sahabatkarir::class, 'paket'])->name('paket');
// Route::get('/kategori', [Sahabatkarir::class, 'kategori'])->name('kategori');
// Route::get('/payment', [Sahabatkarir::class, 'payment'])->name('payment');
// Route::get('/keranjang', [Sahabatkarir::class, 'keranjang'])->name('keranjang');
// Route::get('/tambahkategori', [Sahabatkarir::class, 'tambahkategori'])->name('tambahkategori');
// Route::get('/unduhkategori/{id_kategori}', [Sahabatkarir::class, 'unduhkategori'])->name('unduhkategori');
// Route::get('/hapuskategori/{id_kategori}', [Sahabatkarir::class, 'hapuskategori'])->name('hapuskategori');
// Route::get('/editkategori/{id_kategori}', [Sahabatkarir::class, 'editkategori'])->name('editkategori');
// Route::patch('/perbaruikategori', [Sahabatkarir::class, 'perbaruikategori'])->name('perbaruikategori');
// Route::post('/createkategori', [Sahabatkarir::class, 'createkategori'])->name('createkategori');
// Route::get('/tambahpaket', [Sahabatkarir::class, 'tambahpaket'])->name('tambahpaket');
// Route::get('/unduhpaket/{id_paket}', [Sahabatkarir::class, 'unduhpaket'])->name('unduhpaket');
// Route::get('/hapuspaket/{id_paket}', [Sahabatkarir::class, 'hapuspaket'])->name('hapuspaket');
// Route::get('/editpaket/{id_paket}', [Sahabatkarir::class, 'editpaket'])->name('editpaket');
// Route::patch('/perbaruipaket', [Sahabatkarir::class, 'perbaruipaket'])->name('perbaruipaket');
// Route::post('/createpaket', [Sahabatkarir::class, 'createpaket'])->name('createpaket');

// Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

