<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\JenisBarangController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\PenggunaController;
use App\Http\Controllers\TransaksiController;



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



//Route Jenis Barang
Route::get("/barang/jenisbarang", [JenisBarangController::class, 'index']);
// Route::get("/barang/jenisbarang", [BarangController::class, 'jenisbarang'])->name('jenisbarang');


//Route Transaksi
Route::get("/transaksi", [TransaksiController::class, 'index']);
Route::get("/transaksi/barangkeluar", [TransaksiController::class, 'barangkeluar'])->name('barangkeluar');


//Route pengguna
Route::get("/pengguna", [PenggunaController::class, 'index']);


//Route Laporan
Route::get("/laporan", [LaporanController::class, 'index']);

