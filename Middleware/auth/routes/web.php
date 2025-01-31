<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/user', [UserController::class, 'show'])->name('user.show');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
