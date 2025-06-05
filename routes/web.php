<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

// Halaman awal
Route::get('/', function () {
    return view('welcome');
});

// Register
Route::get('/register', [UserController::class, 'showForm'])->name('register.form');
Route::post('/register', [UserController::class, 'register'])->name('register.submit');

// Login
Route::get('/login', [UserController::class, 'showLogin'])->name('login.form');
Route::post('/login', [UserController::class, 'login'])->name('login.submit');

// Logout
Route::post('/logout', [UserController::class, 'logout'])->name('logout');

// Beranda setelah login
Route::get('/beranda', [UserController::class, 'beranda'])->name('beranda')->middleware('auth');

Route::get('/profile', [UserController::class, 'profile'])->middleware('auth')->name('profile');

Route::get('/daily', function () {
    return view('daily');
})->middleware('auth')->name('daily');

Route::get('/petzoo', function () {
    return view('petzoo');
})->middleware('auth')->name('petzoo');

Route::get('/games', function () {
    return view('games');
})->middleware('auth')->name('games');

Route::get('/edu', function () {
    return view('edu');
})->middleware('auth')->name('edu');
