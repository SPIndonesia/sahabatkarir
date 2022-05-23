<?php

use App\Http\Controllers\KategoriController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Sahabatkarir;
use App\Http\Controllers\user\PaketController;
use Illuminate\Support\Facades\Auth;



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

Route::group(
    [
        [
            'middleware' => ['role:user']
        ],
        'namespace' => 'Admin',
        'prefix' => 'admin',
    ],
    function () {


        // route kategori
        // Route::get('/kategori', [KategoriController::class, 'index']);
        // Route::put('kategori/ubah/{id}', [KategoriController::class, 'ubah'])->name('kategori.ubah');
        // Route::delete('kategori/hapus/{id}', [KategoriController::class, 'hapus'])->name('kategori.hapus');
    }
);

Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('coba/admin', function () {
        return 'home';
    });
    Route::get('/admin/user', [UserController::class, 'index']);
});

Route::middleware(['auth', 'user'])->group(function () {
    Route::get('coba/admin2', function () {
        return 'admin';
    });
});

// Route::get('/user', function () {
//     return view('index');
// })->middleware('user');

// Route::get('/kategori', [KategoriController::class, 'index']);
// Route::put('kategori/ubah/{id}', [KategoriController::class, 'ubah'])->name('kategori.ubah');
// Route::delete('kategori/hapus/{id}', [KategoriController::class, 'hapus'])->name('kategori.hapus');

// Route::get('/', function () {
//     return view('index');
// });
Route::get('/beranda', function () {
    return view('index');
});
Auth::routes();




// Route::resource('kategori', KategoriController::class);

// Route::resource('paket', PaketController::class);
// Route::resource('admin', KategoriController::class);

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


// Route::resource('admin', Kategor 

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


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




// // TODO: Admin - Beranda
// Route::get('/beranda', [Sahabatkarir::class, 'beranda'])->name('beranda');

// // TODO: Admin - Data Peserta
// Route::get('/dataPeserta', [Sahabatkarir::class, 'dataPeserta'])->name('dataPeserta');

// // TODO: Admin - Kategori
// Route::get('/Admin/kategori', [Sahabatkarir::class, 'kategoriAdmin'])->name('kategoriAdmin');

// // TODO: Admin - Kategori
// Route::get('/pembayaran', [Sahabatkarir::class, 'pembayaran'])->name('pembayaran');

// // TODO: Login
// Route::get('/login', [Sahabatkarir::class, 'login'])->name('login');

// // TODO: Register
// Route::get('/register', [Sahabatkarir::class, 'register'])->name('register');
