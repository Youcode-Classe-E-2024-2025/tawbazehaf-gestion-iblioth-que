<?php
use App\Http\Controllers\UserController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\BorrowController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;

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

 // Home route
 Route::get('/', [HomeController::class, 'index'])->name('home');
 
 // Guest routes
 Route::middleware('guest')->group(function () {
     Route::get('/login', function () { return view('login'); })->name('login');
     Route::get('/register', function () { return view('register'); })->name('register');
 });
 
 // Authentication routes
 Route::post('/login', [AuthController::class, 'login'])->name('login.post');
 Route::post('/register', [AuthController::class, 'register'])->name('register.post');
 Route::post('/logout', [AuthController::class, 'logout'])->name('logout')->middleware('auth');
 
 // Public book routes
 Route::get('/books', [BookController::class, 'index'])->name('books.index');
 Route::get('/books/{book}', [BookController::class, 'show'])->name('books.show');
 
 // Authenticated user routes
 Route::middleware('auth')->group(function () {
     Route::post('/books/{book}/borrow', [BorrowController::class, 'store'])->name('books.borrow');
 });
 
 // Admin routes
 Route::middleware(['auth', 'admin'])->group(function () {
     Route::get('/admin', [AdminController::class, 'index'])->name('admin.dashboard');
     Route::resource('books', BookController::class)->except(['index', 'show']);
 });


 Route::middleware('auth')->group(function () {
    Route::get('/users/{user}', [UserController::class, 'show'])->name('users.show');
    Route::get('/users/{user}/edit', [UserController::class, 'edit'])->name('users.edit');
    Route::put('/users/{user}', [UserController::class, 'update'])->name('users.update');
});
 
//  Route::get('/', function () {
//     return view('index'); 
// });
// // Public routes
// Route::get('/login', function () { return view('login'); })->name('login')->middleware('guest');
// Route::get('/register', function () { return view('register'); })->name('register')->middleware('guest');

// // Authentication routes
// Route::post('/login', [AuthController::class, 'login'])->name('login.post');
// Route::post('/register', [AuthController::class, 'register'])->name('register.post');
// Route::post('/logout', [AuthController::class, 'logout'])->name('logout')->middleware('auth');
// Route::middleware(['auth'])->group(function () {
//     Route::post('/books/{book}/borrow', [BorrowController::class, 'store']);
// });

// Route::get('/books', [BookController::class, 'index']);
// Route::get('/books/{book}', [BookController::class, 'show'])->name('books.show');
// Route::resource('books', BookController::class);
// Route::get('/', [HomeController::class, 'index'])->name('home');
// Route::middleware(['auth', 'admin'])->group(function () {
//     Route::get('/admin', [AdminController::class, 'index'])->name('admin.dashboard');
// });
//     Route::resource('books', BookController::class);




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