<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    use HasFactory;

    protected $table = 'Categoria';

    public $timestamps = false;

    public function getNombre() {
        return $this->NombreCategoria;
    }

    public function publicacion()
    {
        return $this->belongsTo(Publicacion::class, 'idpublicacion');
    }

    
}
