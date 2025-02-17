<?php

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
    return view('welcome');
});
Route::get('/login', function () {
    return view('login');
});
Route::get('/register', function () {
    return view('register');
});
Route::get('/index', function () {
    return view('index');
});