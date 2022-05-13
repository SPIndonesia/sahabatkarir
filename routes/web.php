<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Sahabatkarir;

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

Route::get('/payment', [Sahabatkarir::class, 'payment'])->name('payment');
Route::get('/keranjang', [Sahabatkarir::class, 'keranjang'])->name('keranjang');
