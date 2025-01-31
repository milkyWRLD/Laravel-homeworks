<?php

use App\Http\Controllers\GroupController;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('groups.index');
});

Route::resource('groups', GroupController::class);
Route::resource('groups.students', StudentController::class);

Route::get('/groups/{group}/students/create', [StudentController::class, 'create'])->name('groups.students.create');
Route::post('/groups/{group}/students', [StudentController::class, 'store'])->name('groups.students.store');
Route::get('/groups/{group}/students/{student}', [StudentController::class, 'show'])->name('groups.students.show');
Route::get('groups/{group}/students/{student}', [StudentController::class, 'show'])->name('students.show');





