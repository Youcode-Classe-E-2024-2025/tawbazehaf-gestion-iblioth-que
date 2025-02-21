<?php
use App\Http\Controllers\UserController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\BorrowingController;

use Illuminate\Support\Facades\Route;
/**
 * GET: LECTURE
 * POST: AJOUTER
 * PUT: MODIFIER TOUT COMPLETEMENT
 * PATCH: MODIFIER PARTIELLEMENT
 * DELETE: SUPPRIMER
 * OPTIONS:
 * HEAD:
 * 
 * 
 * 
 */


 Route::get('/', function () {
    return view('index'); 
});

// User routes
Route::get('login', function () {
    return view('login');
})->name('login');

Route::get('register', function () {
    return view('register');
})->name('register');

// Protect user profile route with authentication middleware
Route::middleware(['auth'])->group(function () {

    Route::get('/users/{user}', [UserController::class, 'show'])->name('users.show');
    Route::post('logout', [UserController::class, 'logout'])->name('logout');
});
Route::resource('users', UserController::class);

// Book routes
Route::resource('books', BookController::class);

// Borrowing routes
Route::resource('borrowings', BorrowingController::class);
Route::get('/users', function () {
    return view('index');
});