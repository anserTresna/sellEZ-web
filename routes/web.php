<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\SatuanController;
use App\Http\Controllers\TransaksiController;

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
    return view ('master');
});
Route::get('/login',[LoginController::class, 'index'])->name ('index');
Route::post('/login',[loginController::class, 'authenticate']);
Route::get('/logout', [loginController::class, 'logout'])->name ('logout');


Route::get('/register',[RegisterController::class, 'index']);
Route::post('/register',[RegisterController::class, 'store']);

// Route::get('/produk',[ProdukController::class, 'index']);

//CRUD PRODUK

Route::get('/produk', [ProdukController::class, 'index'])->name('produk.index');
Route::post('/produk', [ProdukController::class, 'store'])->name('produk.store');
Route::put('/produk/{id}', [ProdukController::class, 'update'])->name('produk.update');
Route::delete('/produk/{id}', [ProdukController::class, 'destroy'])->name('produk.destroy');


//controller untuk CRUD PEGAWAI//

Route::get('/user', [UserController::class, 'index'])->name('pegawai.index');
Route::post('/user', [UserController::class, 'store'])->name('pegawai.store');
Route::put('/user/{id}', [UserController::class, 'update'])->name('pegawai.update');
Route::delete('/user/{id}', [UserController::class, 'destroy'])->name('pegawai.destroy');

//controller untuk kategori

Route::get('/kategori', [KategoriController::class, 'index'])->name('kategori.index');
Route::post('/kategori', [KategoriController::class, 'store'])->name('kategori.store');
Route::put('/kategori/{kategori}', [KategoriController::class, 'update'])->name('kategori.update');
Route::delete('/kategori/{kategori}', [KategoriController::class, 'destroy'])->name('kategori.destroy');

//
Route::get('/satuan', [SatuanController::class, 'index'])->name('satuan.index');
Route::post('/satuan', [SatuanController::class, 'store'])->name('satuan.store');
Route::put('/satuan/{satuan}', [SatuanController::class, 'update'])->name('satuan.update');
Route::delete('/satuan/{satuan}', [SatuanController::class, 'destroy'])->name('satuan.destroy');

// ...


Route::get('/transaksi', [TransaksiController::class, 'index'])->name('transaksi.index');
// Route::get('/transaksi', function(){
//     return view ('transaksi.index');
// });
Route::get('/dashboard', function(){
    return view ('dashboard.index');
});