<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function Register(Request $request) {
        $user = new Usuario();

        $user->NombreUsuario = $request->user;
        $user->Contraseña = Hash::make($request->pass);
        $user->CorreoElectronico = $request->email;
        $user->FechaRegistro = date("Y-m-d H:i:s");
        $user->RolUsuario = 2;

        $user->save();

        return redirect(route('login'));
    }

    public function Login() {

    }

}
