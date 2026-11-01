<?php

use App\Http\Controllers\ProdukController as ProdukController;
use Illuminate\Support\Facades\Route;

Route::get('/', [ProdukController::class, 'index'])->name('produk.table');
Route::get('/tambah', [ProdukController::class, 'create'])->name('produk.tambah');
Route::post('/tambah', [ProdukController::class, 'store'])->name('produk.store');
