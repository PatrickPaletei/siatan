<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;

Route::get('auth/login', [LoginController::class, 'index'])->name('login');

route::post('auth/login', [LoginController::class, 'authenticate'])->name('loginPost');

Route::get('auth/register', [RegisterController::class, 'index'])->name('register');

Route::post('auth/register', [RegisterController::class, 'store'])->name('registerPost');

