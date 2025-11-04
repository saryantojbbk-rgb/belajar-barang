<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BarangController;

Route::get('/', function () {
    return redirect('/barang');
});

Route::get('barang', [BarangController::class, 'index']);
Route::get('barang/tambah', [BarangController::class, 'tambah']);
Route::post('barang/store', [BarangController::class, 'store']);
Route::get('barang/edit/{id}', [BarangController::class, 'edit']);
Route::post('barang/update', [BarangController::class, 'update']);
Route::get('barang/hapus/{id}', [BarangController::class, 'hapus']);
