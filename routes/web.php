<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisteredUserController;

Route::get('/', function () {
    return view('welcome');
});
Route::resource('users',RegisteredUserController::class);
