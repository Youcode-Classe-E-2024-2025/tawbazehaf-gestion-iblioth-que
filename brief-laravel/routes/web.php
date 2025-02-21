<?php
use App\Http\Controllers\UserController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\BorrowingController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;

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
// Public routes
Route::get('/login', function () { return view('login'); })->name('login')->middleware('guest');
Route::get('/register', function () { return view('register'); })->name('register')->middleware('guest');

// Authentication routes
Route::post('/login', [AuthController::class, 'login'])->name('login.post');
Route::post('/register', [AuthController::class, 'register'])->name('register.post');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout')->middleware('auth');

// Protected routes
Route::middleware(['auth'])->group(function () {
    Route::resource('users', UserController::class);
});

Route::resource('books', BookController::class);
Route::get('/', [HomeController::class, 'index'])->name('home');





// // User routes
// Route::get('login', function () {
//     return view('login');
// })->name('login');

// Route::get('register', function () {
//     return view('register');
// })->name('register');

// // Protect user profile route with authentication middleware
// Route::middleware(['auth'])->group(function () {

//     Route::get('/users/{user}', [UserController::class, 'show'])->name('users.show');
//     Route::post('/login', [AuthController::class, 'login'])->name('login.post');
// Route::post('/register', [AuthController::class, 'register'])->name('register.post');
// Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
// });
// Route::resource('users', UserController::class);

// // Book routes
// Route::resource('books', BookController::class);

// // Borrowing routes
// Route::resource('borrowings', BorrowingController::class);
// Route::get('/users', function () {
//     return view('index');
// });