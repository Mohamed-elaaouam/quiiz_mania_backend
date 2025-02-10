<?php

use App\Http\Controllers\quizController;
use App\Http\Controllers\userController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
}); 


// Route::get('', function () {})->name('users.index');

Route::resource('users',userController::class);
Route::resource('quizzes',quizController::class);