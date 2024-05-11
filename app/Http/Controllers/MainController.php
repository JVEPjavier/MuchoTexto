<?php

namespace App\Http\Controllers;

use App\Models\Publicacion;
use App\Models\Comentario;
use App\Models\Categoria;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index() {
        $usuario = session('usuario');
        $publicaciones = Publicacion::whereHas('categoria')->get();
        $categorias = Categoria::all();
        return view('main', compact('publicaciones','categorias'));
        
    }

    public function search(Request $request) {
        $categoriaNombre = $request->input('categoria');
        $categorias = Categoria::all();

        if ($categoriaNombre) {
            $publicaciones = Publicacion::with('categoria')->whereHas('categoria', function ($query) use ($categoriaNombre) {
                $query->where('NombreCategoria', $categoriaNombre);
            })->get();
        } else {
            $publicaciones = Publicacion::with('categoria')->get();
        }
    
        return view('main', compact('publicaciones', 'categorias'));
    }

    public function detalles($id) {
        $publicacion = Publicacion::findOrFail($id);
        $comentarios = Comentario::where('idpublicacion', $id)->get();
        return view('post-detail', compact('publicacion','comentarios'));
    }
}
