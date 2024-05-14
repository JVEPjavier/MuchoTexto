<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use PhpParser\Node\Expr\FuncCall;

class LoginController extends Controller
{

    public function Register(Request $request) {


      $request->validate([
        'user' => 'required|unique:usuarios,NombreUsuario',
        'pass' => 'required',
        'email' => 'required|email|unique:usuarios,CorreoElectronico',
      ], [
        'user.unique' => 'El usuario ya está registrado.',
        'email.unique' => 'El correo electrónico ya está registrado.'
      ]);

        $user = new Usuario();

        $user->NombreUsuario = $request->user;
        $user->Contraseña = Hash::make($request->pass);
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
              session()->put('logged_user', $usuario);
              return redirect()->route('main');
            } else {
              return redirect('login')->with('error', 'Credenciales incorrectas');
            }
          } else {
            return redirect('login')->with('error', 'Usuario no encontrado');
          }
    }

    public function logout() {
      session()->forget('logged_user');
      return redirect('login');
    }
}
