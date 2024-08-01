<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\inputBarangController;
use App\Http\Controllers\InputJasaController;
use App\Http\Controllers\inputPurchaseController;
use App\Http\Controllers\inputVendorController;
use App\Http\Controllers\katalogBarangController;
use App\Http\Controllers\katalogJasaController;
use App\Http\Controllers\userController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [AdminController::class, 'dashboard'])->name('dashboard');
Route::get('/inputJasa', [InputJasaController::class, 'input_jasa'])->name('input.jasa');
Route::get('/inputBarang', [inputBarangController::class, 'input_barang'])->name('input.barang');
Route::get('/inputPurchase', [inputPurchaseController::class, 'input_purchase'])->name('input.purchase');
Route::get('/inputVendor', [inputVendorController::class, 'input_vendor'])->name('input.vendor');
Route::get('/katalogBarang', [katalogJasaController::class, 'katalog_jasa'])->name('katalog.jasa');
Route::get('/katalogJasa', [katalogBarangController::class, 'katalog_barang'])->name('katalog.barang');
Route::get('/user', [userController::class, 'User'])->name('user');
