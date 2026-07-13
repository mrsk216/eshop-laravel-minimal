<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\GuestController;
use App\Http\Controllers\Admin\ProductController;

Route::get('/',  [GuestController::class, 'index']);

Auth::routes();

Route::prefix('admin')->name('admin.')->group(function(){
    Route::get('/dashboard', [HomeController::class, 'index'])->name('dashboard');

    // Products
    Route::get('/products', [ProductController::class, 'index'])->name('product');
    Route::get('/product/create', [ProductController::class, 'create'])->name('product.create');
    Route::post('/product/create', [ProductController::class, 'store'])->name('product.store');
    Route::get('/product/edt/{id}', [ProductController::class, 'edit'])->name('product.edit');
    Route::post('/product/edt/{id}', [ProductController::class, 'update'])->name('product.update');
    Route::get('/product/delete/{id}', [ProductController::class, 'delete'])->name('product.delete');
});
