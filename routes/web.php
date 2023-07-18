<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\BarangController;
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


Route::get("/registrasi", [LoginController::class, 'registrasi'])->name('registrasi');
Route::get("/login", [LoginController::class, 'index'])->name('login');

Route::get("/barang", [BarangController::class, 'index']);


Route::get("/transaksi", [TransaksiController::class, 'index']);

Route::get("/pengguna", [PenggunaController::class, 'index']);

Route::get("/laporan", [LaporanController::class, 'index']);
