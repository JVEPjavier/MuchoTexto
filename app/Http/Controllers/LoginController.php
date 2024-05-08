<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function Register(Request $request) {

        //Validacion

        $user = new Usuario();

        $user->NombreUsuario = $request->user;
        $user->Contraseña = $request->pass;
        $user->CorreoElectronico = $request->email;
        $user->FechaRegistro = date("Y-m-d H:i:s");
        $user->RolUsuario = 2;

        $user->save();

        return redirect(route('login'));
    }


    public function Login(Request $request) {
        $usuario = Usuario::where('NombreUsuario', $request->user)->first();

        if ($usuario) {
            if (Hash::check($request->Contraseña, $usuario->Contraseña)) {
                $request->session()->regenerate();
                return redirect()->intended(route('main'));
            } else {
                return redirect('login');
            }
        } else {
            return redirect('login');
        }
    }

    public function username()
    {
        return 'nombre_de_usuario_o_correo_personalizado_aqui';
    }

}
