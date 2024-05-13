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
        $categorias = Categoria::all();

        $publicaciones = Publicacion::all();


        return view('main', ['usuario' => $usuario] ,compact('publicaciones','categorias'));
        
    }

    public function search(Request $request)
    {

        $usuario = session()->get('logged_user');

        $categoriaNombre = $request->input('categoria');
        $categorias = Categoria::all();

        $publicaciones = Publicacion::where('IdEstado', 2)->get();


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

    public function viewPerfil() {
        $usuario = session()->get('logged_user');

        return view('perfil-detail', ['usuario'=>$usuario]);
    }

    public function addComentario(Request $request) {
        $usuario = session()->get('logged_user');

        $comentario = new Comentario();

        $comentario->Contenido = $request->comentario;

        $comentario->FechaComentario = date("Y-m-d H:i:s");

        $comentario->IdPublicacion = $request->id_publicacion;

        $comentario->IdUsuario = $usuario->Id;

        $comentario->save();

        $publicacion = Publicacion::findOrFail($request->id_publicacion);

        $comentarios = Comentario::where('idpublicacion', $request->id_publicacion)->get();

        return view('post-detail', compact('publicacion','comentarios'));
    }


}
