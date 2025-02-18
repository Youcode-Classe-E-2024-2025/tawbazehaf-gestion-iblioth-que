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

// User routes
Route::resource('users', UserController::class);
Route::post('logout', [UserController::class, 'logout'])->name('logout');

// Book routes
Route::resource('books', BookController::class);

// Borrowing routes
Route::resource('borrowings', BorrowingController::class);});