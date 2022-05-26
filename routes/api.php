<?php

use App\Http\Controllers\Api\Auth\RegisterController;
use App\Http\Controllers\Api\Kategori\CreateKategoriController;
use App\Http\Controllers\Api\Kategori\DeleteKategoriController;
use App\Http\Controllers\Api\Kategori\GetKategoriController;
use App\Http\Controllers\Api\KategoriController;
use App\Http\Controllers\Api\Kategori\ShowKategoriController;
use App\Http\Controllers\Api\Kategori\UpdateKategoriController;
use App\Http\Controllers\Api\Paket\CreatePaketController;
use App\Http\Controllers\Api\Paket\DeletePaketController;
use App\Http\Controllers\Api\Paket\GetPaketController;
use App\Http\Controllers\Api\Paket\ShowPaketController;
use App\Http\Controllers\Api\Paket\UpdatePaketController;
use App\Models\Kategori;
use GuzzleHttp\Promise\Create;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::middleware(['auth', 'user'])->group(function () {
});

// Route::middleware(['auth', 'admin'])->group(function () {
// });
route::get('kategori', GetKategoriController::class);
route::post('kategori/tambah', CreateKategoriController::class);
route::get('kategori/{id}', ShowKategoriController::class);
route::delete('kategori/hapus/{id}', DeleteKategoriController::class);
route::put('kategori/ubah/{id}', UpdateKategoriController::class);


route::post('paket/tambah', CreatePaketController::class);
route::get('paket', GetPaketController::class);
route::get('paket/{id}', ShowPaketController::class);
route::delete('paket/hapus/{id}', DeletePaketController::class);
route::put('paket/ubah/{id}', UpdatePaketController::class);

route::post('register', RegisterController::class);
