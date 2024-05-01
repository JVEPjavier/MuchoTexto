<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Models\Usuario;

Route::get('/', HomeController::class);

Route::get('/login' , [LoginController::class, 'Login'])->name('login');

Route::get('/register', [LoginController::class, 'Register'])->name('register');
