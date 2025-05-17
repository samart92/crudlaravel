<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\testproductresourceController;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
});

// Route::get('/products', [ProductController::class, 'index']);
Route::resource('/products', ProductController::class);


