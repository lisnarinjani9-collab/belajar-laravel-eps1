<?php

use App\Http\Controllers\ProdukController as ProdukController;
use Illuminate\Support\Facades\Route;

Route::get('/', [ProdukController::class, 'index'])->name('produk.table');
Route::get('/tambah', [ProdukController::class, 'create'])->name('produk.tambah');
Route::post('/tambah', [ProdukController::class, 'store'])->name('produk.store');
Route::get('/update/{id}', [ProdukController::class, 'edit'])->name('produk.edit');
Route::put('/update/{produk}', [ProdukController::class, 'update'])->name('produk.update');
Route::delete('/hapus/{produk}', [ProdukController::class, 'destroy'])->name('produk.delete');
