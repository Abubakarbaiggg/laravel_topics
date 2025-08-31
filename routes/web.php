<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::resource('order',OrderController::class);
    Route::resource('product',ProductController::class);
    Route::get('buyproductview/{product}',[ProductController::class,'buyproductview'])->name('buyproductview');
    Route::post('productbuy/{product}',[ProductController::class,'productbuy'])->name('productbuy');
    Route::get('cardview',[ProductController::class,'cardview'])->name('cardview');
});

require __DIR__.'/auth.php';
