<?php

namespace App\Http\Controllers;

use App\Models\Publicacion;
use App\Models\Comentario;
use App\Models\Categoria;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index(Request $request) {

        if (!session()->has('logged_user')) {
            return redirect('login');
        }

        $usuario = session()->get('logged_user');
        $publicaciones = Publicacion::all();
        $categorias = Categoria::all();
        return view('main', ['usuario' => $usuario] ,compact('publicaciones','categorias'));
        
    }

    public function search(Request $request)
    {

        $usuario = session()->get('logged_user');

        $categoriaNombre = $request->input('categoria');
        $categorias = Categoria::all();

        $publicaciones = Publicacion::all();

        if ($categoriaNombre) {
            $categoria = Categoria::where('NombreCategoria', $categoriaNombre)->first();

            if ($categoria) {
                $publicaciones = Publicacion::where('IdCategoria', $categoria->Id)->get();
            }
        }

        return view('main', ['usuario' => $usuario] ,compact('publicaciones', 'categorias'));
    }

    public function detalles($id) {
        $publicacion = Publicacion::findOrFail($id);
        $comentarios = Comentario::where('idpublicacion', $id)->get();
        return view('post-detail', compact('publicacion','comentarios'));
    }

    public function addPublicacion(Request $request) {

        $publicacion = new Publicacion();

        $usuario = session()->get('logged_user');

        $categoriaNombre = $request->input('categoria-select');

        $categoria = Categoria::where('NombreCategoria', $categoriaNombre)->first();

        $publicacion->Contenido = $request->contenido;

        $publicacion->IdCategoria = $categoria->Id;

        $publicacion->IdUsuario = $usuario->Id;

        $publicacion->IdEstado = 1;

        $publicacion->FechaPublicacion = date("Y-m-d H:i:s");

        $publicacion->save();

        $publicaciones = Publicacion::all();
        $categorias = Categoria::all();
        return view('main', ['usuario' => $usuario] ,compact('publicaciones','categorias'));

    }


}
