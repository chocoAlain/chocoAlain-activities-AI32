<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('authentication');
})->name('home');

Route::get('login', [LoginController::class,'showLoginForm'])->name('login');
Route::post('login', [LoginController::class, 'login'])->name('login.post');

Route::get('dashboard', function () {
    return view('dashboard');
});


Route::get('register', [RegisterController::class,'showRegForm'])->name('register');
Route::post('register', [RegisterController::class, 'register'])->name('register.post');

