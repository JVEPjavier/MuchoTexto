<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MainController;

Route::view('/', "home");

Route::view('/login' , "login")->name('login');

Route::view('/register', "register")->name('register');

//Route::view('/main', "main")->name('main');

Route::get('/main', [MainController::class, 'index'])->name('main');

Route::post('/validar-registro', [LoginController::class, 'register'])->name('validar-registro');

Route::post('/iniciar-sesion', [LoginController::class, 'login'])->name('iniciar-sesion');