<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Auth::routes();

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/open', function () {
    return view('open');
})->name('open');

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [\App\Http\Controllers\UserController::class, 'index'])->name('dashboard');
});

