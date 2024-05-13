<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MainController;

Route::view('/', "home");

Route::view('/login' , "login")->name('login');

Route::view('/register', "register")->name('register');

//Route::view('/main', "main")->name('main');

Route::get('/main', [MainController::class, 'index'])->name('main');

Route::get('/search', [MainController::class, 'search'])->name('search');

Route::get('/search', [MainController::class, 'search'])->name('search');

Route::get('/cierre-sesion', [LoginController::class, 'logout'])->name('logout');

Route::get('/perfil', [MainController::class, 'viewPerfil'])->name('viewPerfil');

Route::get('/post/{id}', [MainController::class, 'detalles'])->name('post-detail');

Route::post('/new-comment',[MainController::class, 'addComentario'])->name('addComentario');

Route::post('/validar-registro', [LoginController::class, 'register'])->name('validar-registro');

Route::post('/iniciar-sesion', [LoginController::class, 'login'])->name('iniciar-sesion');

Route::post('/new-post', [MainController::class, 'addPublicacion'])->name('new-post');