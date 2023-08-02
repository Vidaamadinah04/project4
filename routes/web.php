<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\PenggunaController;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\LihatGudangController;
use App\Http\Controllers\BarangMasukController;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('home');
});

//Route Barang
Route::get("/barang", [BarangController::class, 'index']);
Route::put("/barang/{id}", [BarangController::class, 'update'])->name('databarang.update');

Route::get("/barang/jenisbarang", [BarangController::class, 'jenisbarang'])->name('jenisbarang');

Route::get("/transaksi", [TransaksiController::class, 'index']);
Route::get("/transaksi/barangkeluar", [TransaksiController::class, 'barangkeluar'])->name('barangkeluar');
// Route::get("/transaksi/tambahbarangmasuk", [TransaksiController::class, 'create'])->name('transaksi.tambahbarangmasuk');
// Route::post("/transaksi/tambahbarangmasuk",  [TransaksiController::class, 'store'])->name('transaksi.tambahbarangmasuk');


Route::get("/pengguna", [PenggunaController::class, 'index']);

Route::get("/laporan", [LaporanController::class, 'index']);
Route::get("/lihatgudang", [LihatGudangController::class, 'index']);
Route::get("/gudang/gudanga", [LihatGudangController::class, 'gudanga'])->name('gudanga');
Route::get("/gudang/gudangb", [LihatGudangController::class, 'gudangb'])->name('gudangb');
Route::get("/gudang/gudangc", [LihatGudangController::class, 'gudangc'])->name('gudangc');
Route::get("/gudang/gudangd", [LihatGudangController::class, 'gudangd'])->name('gudangd');

