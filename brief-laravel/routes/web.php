<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\SessionController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'auth.auth');


Route::resource('books', BookController::class);
Route::patch('/books/{book}/edit/{user}', [BookController::class, 'loan']);

Route::post('/auth/register', [AuthController::class, 'store']);

Route::post('/auth/login', [SessionController::class, 'store']);
Route::post('/logout', [SessionController::class, 'destroy']);