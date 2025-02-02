<?php

use App\Http\Controllers\ActiveUserController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\CarController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['middleware' => 'auth'], function() {
    Route::get('/user/profile', [ActiveUserController::class, 'index'])->name('user.profile');
});

Auth::routes();

Route::group(['middleware'=> 'auth'], function() {
    Route::get('/car/add', [CarController::class, 'create'])->name('car.create');
    Route::get('/car/list', [CarController::class, 'index'])->name('car.index');
    Route::post('/car/add', [CarController::class, 'store']);
  });


