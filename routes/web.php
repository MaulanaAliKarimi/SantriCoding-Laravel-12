<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

// Route::get('/', function () {
    // return view('welcome');

    Route::resource('/products', ProductController::class);

    Route::get('/', function () {
        return view('welcome');

    Route::get('/products/{id}/edit', [ProductController::class, 'edit'])->name('products.edit');
});
