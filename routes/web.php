<?php

use Illuminate\Support\Facades\Route;
<<<<<<< HEAD
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
=======
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ListBarangController;
use App\Http\Controllers\AuthController;

//Route::get('/listbarang/{id}/{nama}', function ($id, $nama) {
//    return view('list_barang', compact('id', 'nama'));
// });

Route::get('/user/{id}', function ($id) {
    return 'User dengan ID' . $id;
});

Route::prefix('admin')->group(function () {
    Route::get('/dashboard', function() {
        return 'Admin Dashboard';
    });

    Route::get('/users', function() {
        return 'Admin Users';
    });
});

Route::get('/listbarang/{id}/{nama}', [ListBarangController::class, 'tampilkan']);
Route::get('/', [HomeController::class, 'index']);
Route::get('/contact', [HomeController::class, 'contact']);
Route::get('/login', [AuthController::class, 'index'])->name('login');
>>>>>>> cfd92e515c7beca7785ce7f9f8ba2057ff6025a0
