<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable;

class Usuario extends Model implements Authenticatable
{
    use HasFactory;

    protected $table = 'Usuarios';

    public $timestamps = false;

    protected $fillable = [
        'NombreUsuario', 'CorreoElectronico', 'Contraseña',
    ];

    public function getAuthIdentifierName()
    {
        return 'id'; // Nombre del campo que identifica al usuario (normalmente 'id')
    }

    public function getAuthIdentifier()
    {
        return $this->getKey(); // Retorna el valor del campo identificador del usuario (generalmente 'id')
    }

    public function getAuthPassword()
    {
        return $this->Contraseña;
    }

    public function getRememberToken()
    {
        return null; // No se utiliza token de recordatorio
    }

    public function setRememberToken($value)
    {
        // No se utiliza token de recordatorio
    }

    public function getRememberTokenName()
    {
        return ''; // No se utiliza token de recordatorio
    }

    public function getAuthPasswordName()
    {
        return 'Contraseña';
    }

}
