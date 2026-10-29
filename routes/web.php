<?php

use App\Http\Controllers\ProdukController AS ProdukController;
use Illuminate\Support\Facades\Route;

Route::get('/', [ProdukController::class, 'index'
]);

