<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Models\Usuario;

Route::get('/', HomeController::class);

Route::get('prueba', function() {
    $usuario = new Usuario;

    $usuario->NombreUsuario = "segundo usuario";
    $usuario->CorreoElectronico = "equisdee@equisde";
    $usuario->Contraseña = "equisde123";
    $usuario->FechaRegistro = date('Y-m-d H:i:s');
    $usuario->RolUsuario = 2;

    $usuario->save();

    return $usuario;
});
