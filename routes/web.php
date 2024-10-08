<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\inputBarangController;
use App\Http\Controllers\InputJasaController;
use App\Http\Controllers\inputPurchaseController;
use App\Http\Controllers\formPurchaseController;
use App\Http\Controllers\editformPurchaseController;
use App\Http\Controllers\EditPurchaseController;
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

//purchase
Route::get('/dataPurchase', [inputPurchaseController::class, 'dataPurchase'])->name('data.purchase');
Route::get('/getDataPurchase', [inputPurchaseController::class, 'getDataPurchase'])->name('getDataPurchase');
Route::get('/getDataPurchaseJasa', [inputPurchaseController::class, 'getDataPurchaseJasa'])->name('getDataPurchaseJasa');
Route::get('/inputPurchase', [inputPurchaseController::class, 'inputPurchase'])->name('input.purchase');

Route::get('/getVendor', [inputPurchaseController::class, 'getVendor'])->name('getVendor');
Route::get('/getProd', [inputPurchaseController::class, 'getProd'])->name('getProd');

Route::post('/simpanPurchase', [inputPurchaseController::class, 'simpanPurchase'])->name('simpan.purchase');

Route::get('/editPurchase/{id}', [EditPurchaseController::class, 'editPurchase'])->name('editPurchase');
Route::post('/updatePurchase', [EditPurchaseController::class, 'updatePurchase'])->name('update.purchase');
//End Purchase

//List Katalog
Route::get('/katalogBarang', [katalogBarangController::class, 'katalogBarang'])->name('katalogBarang');
Route::get('/getDataPurchaseBarang', [katalogBarangController::class, 'getDataPurchaseBarang'])->name('getDataPurchaseBarang');
Route::get('/showPurchase/{id}', [katalogBarangController::class, 'showPurchase'])->name('showPurchase');

Route::get('/katalogJasa', [katalogJasaController::class, 'katalogJasa'])->name('katalogJasa');
Route::get('/getDataPurchaseJasa', [katalogJasaController::class, 'getDataPurchaseJasa'])->name('getDataPurchaseJasa');
Route::get('/showPurchaseJasa/{id}', [katalogJasaController::class, 'showPurchaseJasa'])->name('showPurchaseJasa');

//End List Katalog


Route::get('/editformPurchase', [editformPurchaseController::class, 'editform_purchase'])->name('editform.purchase');
Route::get('/inputVendor', [inputVendorController::class, 'input_vendor'])->name('input.vendor');
Route::get('/user', [userController::class, 'User'])->name('user');
