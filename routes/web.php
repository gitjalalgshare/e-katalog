<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\inputBarangController;
use App\Http\Controllers\InputJasaController;
use App\Http\Controllers\inputPurchaseController;
use App\Http\Controllers\formPurchaseController;
use App\Http\Controllers\editformPurchaseController;
use App\Http\Controllers\inputVendorController;
use App\Http\Controllers\katalogBarangController;
use App\Http\Controllers\katalogJasaController;
use App\Http\Controllers\userController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [AdminController::class, 'dashboard'])->name('dashboard');

//barang
Route::get('/dataBarang', [inputBarangController::class, 'data_barang'])->name('data.barang');
Route::get('/inputBarang', [inputBarangController::class, 'input_barang'])->name('input.barang');
Route::post('/simpanBarang', [inputBarangController::class, 'simpan_barang'])->name('simpan.barang');
Route::get('/getDataBarang', [inputBarangController::class, 'getDataBarang'])->name('getDataBarang');

Route::get('/editDataBarang/{id}', [inputBarangController::class, 'editDataBarang'])->name('editDataBarang');
Route::post('/updateDataBarang/{id}', [inputBarangController::class, 'updateDataBarang'])->name('update.barang');
//End Barang

//Jasa

Route::get('/dataJasa', [InputJasaController::class, 'data_jasa'])->name('data.jasa');
Route::get('/inputJasa', [InputJasaController::class, 'input_jasa'])->name('input.jasa');
Route::post('/simpanJasa', [InputJasaController::class, 'simpan_jasa'])->name('simpan.jasa');
Route::get('/getDataJasa', [InputJasaController::class, 'getDataJasa'])->name('getDataJasa');
Route::get('/editDataJasa/{id}', [InputJasaController::class, 'editDataJasa'])->name('editDataJasa');
Route::post('/updateDataJasa/{id}', [InputJasaController::class, 'updateDataJasa'])->name('updateDataJasa');

//End Jasa

//Vendor
Route::get('/dataVendor', [inputVendorController::class, 'data_vendor'])->name('data.vendor');
Route::get('/getDataVendor', [inputVendorController::class, 'getDataVendor'])->name('getDataVendor');
Route::get('/getBarangJasa', [inputVendorController::class, 'getBarangJasa'])->name('getBarangJasa');
Route::get('/getAutoNo', [inputVendorController::class, 'getAutoNo'])->name('getAutoNo');
Route::post('/simpanVendor', [inputVendorController::class, 'simpanVendor'])->name('simpan.vendor');

Route::get('/editDataVendor', [inputVendorController::class, 'editDataVendor'])->name('editDataVendor');
Route::post('/updateDataVendor', [inputVendorController::class, 'updateDataVendor'])->name('updateDataVendor');
//End Vendor

Route::get('/inputPurchase', [inputPurchaseController::class, 'input_purchase'])->name('input.purchase');
Route::get('/formPurchase', [formPurchaseController::class, 'form_purchase'])->name('form.purchase');
Route::get('/editformPurchase', [editformPurchaseController::class, 'editform_purchase'])->name('editform.purchase');
Route::get('/inputVendor', [inputVendorController::class, 'input_vendor'])->name('input.vendor');
Route::get('/katalogBarang', [katalogJasaController::class, 'katalog_jasa'])->name('katalog.jasa');
Route::get('/katalogJasa', [katalogBarangController::class, 'katalog_barang'])->name('katalog.barang');
Route::get('/user', [userController::class, 'User'])->name('user');
