<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\OrderController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\StoreController;
use Illuminate\Support\Facades\Route;


Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
    Route::resource('categories', CategoryController::class);
    Route::resource('products', ProductController::class);
    Route::resource('orders', OrderController::class);
});

Route::get('/', [StoreController::class, 'index'])->name('products.index');
Route::get('/product/{id}', [StoreController::class, 'show'])->name('products.show');
Route::post('/order', [StoreController::class, 'order'])->name('order.store');
Route::get('/order/{order}', [StoreController::class, 'orderDetail'])->name('order.detail');
Route::get('/orders', [StoreController::class, 'orders'])->name('orders.index');
