<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Publicacion extends Model
{
    use HasFactory;

    protected $table='Publicaciones';

    public $timestamps = false;

    public function usuario()
    {
        return $this->belongsTo(Usuario::class, 'IdUsuario');
    }

    public function categoria()
    {
        return $this->belongsTo(Categoria::class, 'IdCategoria');
    }
}
