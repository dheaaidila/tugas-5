<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\ClientController;
use App\Models\Produk;
use App\Http\Controllers\UserController;

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
//page
Route::get('home', [ClientController::class, 'showHome']);
Route::get('collect', [ClientController::class, 'showCollection']);

// admin lte
Route::get('dashboard', [HomeController::class, 'showDashboard']);
Route::get('kategori', [HomeController::class, 'showKategori']);
Route::get('login-admin', [HomeController::class, 'showLogin']);
Route::get('promo', [HomeController::class, 'showPromo']);
Route::get('pelanggan', [HomeController::class, 'showPelanggan']);
Route::get('supplier', [HomeController::class, 'showSupplier']);
// produk
Route::get('produk', [ProdukController::class, 'index']);
Route::get('produk02', [ProdukController::class, 'create']);
Route::post('produk', [ProdukController::class, 'store']);
Route::get('produk/{produk}', [ProdukController::class, 'show']);
Route::get('produk/{produk}/edit', [ProdukController::class, 'edit']);
Route::put('produk/{produk}', [ProdukController::class, 'update']);
Route::delete('produk/{produk}', [ProdukController::class, 'destroy']);

Route::get('user', [UserController::class, 'index']);
Route::get('pruser', [UserController::class, 'create']);
Route::post('user', [UserController::class, 'store']);
Route::get('user/{user', [UserController::class, 'show']);
Route::get('user/{user}/edit', [UserController::class, 'edit']);
Route::put('user/{user}', [UserController::class, 'update']);
Route::delete('user/{user}', [UserController::class, 'destroy']);