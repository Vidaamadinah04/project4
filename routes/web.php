<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BarangController;
//use App\Http\Controllers\DatabarangController;
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


Route::get("/barang", [BarangController::class, 'index']);
Route::get("/barang/jenisbarang", [BarangController::class, 'jenisbarang'])->name('jenisbarang');


// Route::get('/barang/tambah-barang', 'DatabarangController@tambahBarang')->name('barang.tambah_barang');
// Route::post('/barang/simpan-barang', 'DatabarangController@simpanBarang')->name('barang.simpan_barang');


Route::get("/transaksi", [TransaksiController::class, 'index']);
Route::get("/transaksi/barangkeluar", [TransaksiController::class, 'barangkeluar'])->name('barangkeluar');

Route::get("/pengguna", [PenggunaController::class, 'index']);

Route::get("/laporan", [LaporanController::class, 'index']);

