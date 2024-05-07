<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;


Route::view('/', "home");

Route::view('/login' , "login")->name('login');

Route::view('/register', "register")->name('register');

Route::view('/main', "main")->name('main');

Route::post('/validar-registro', [LoginController::class, 'register'])->name('validar-registro');

Route::post('/iniciar-sesion', [LoginController::class, 'login'])->name('iniciar-sesion');