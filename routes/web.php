<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProductController;

Route::get('/', [AuthController::class, 'showLoginForm'])->name('login');
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::get('/products', [ProductController::class, 'showProducts'])->name('products');
