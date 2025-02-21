<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\SessionController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'auth.auth');

// Route::controller(JobController::class)->group(function(){
//     Route::get("/jobs", 'index');
//     Route::get("/jobs/create", 'create');
//     Route::post("/jobs", 'store');
//     Route::get("/jobs/{job}",  'show');
//     Route::get("/jobs/{job}/edit", 'edit');
//     Route::patch("/jobs/{job}", 'update');
//     Route::delete("/jobs/{job}", 'destroy');
// });

//OR

Route::resource('books', BookController::class);
Route::patch('/books/{book}/edit/{user}', [BookController::class, 'loan']);

Route::post('/auth/register', [AuthController::class, 'store']);

Route::post('/auth/login', [SessionController::class, 'store']);
Route::post('/logout', [SessionController::class, 'destroy']);