<?php

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
Route::middleware('auth')->group(function () {
    Route::resource('users',RegisteredUserController::class);
    Route::resource('orders', OrderController::class);
    Route::post('logout', [AuthController::class, 'logout'])->name('logout');
});
