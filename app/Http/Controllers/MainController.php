<?php

namespace App\Http\Controllers;

use App\Models\Publicacion;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index() {
        $publicaciones = Publicacion::all();
        return view('main', compact('publicaciones'));
    }
}
