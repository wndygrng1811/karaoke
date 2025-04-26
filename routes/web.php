<?php

use Illuminate\Support\Facades\Route;
Use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\ProductController;

// Route::get('/', function () {
//    return view('welcome');
// });

Route::get('/', [HomeController::class, 'index']);
Route::get('/contact', [HomeController::class, 'contact']);
Route::get('/produk', [ProdukController::class, 'tampilkan']);
Route::get('/products', [ProductController::class, 'show']);