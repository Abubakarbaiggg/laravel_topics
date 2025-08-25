<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisteredUserController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\AuthController;

Route::get('login', function () {
    return view('auth.login');
})->name('login');
Route::post('login', [AuthController::class, 'login'])->name('login.post');

Route::get('/', function () {
    return view('welcome');
});
Route::get('products/ProductBuyList', [ProductController::class, 'ProductBuyList'])->name('products.ProductBuyList');

Route::middleware('auth')->group(function () {
    Route::post('logout', [AuthController::class, 'logout'])->name('logout');
    Route::resource('users', RegisteredUserController::class);
    Route::resource('orders', OrderController::class);
    Route::resource('products', ProductController::class);
    Route::get('products/{product}/buyPage', [ProductController::class, 'buyPage'])->name('products.buyPage');
    Route::get('products/ProductBuyList', [ProductController::class, 'ProductBuyList'])->name('products.ProductBuyList');
    Route::post('products/{product}/buy', [ProductController::class, 'buyProduct'])->name('products.buyProduct');
});
