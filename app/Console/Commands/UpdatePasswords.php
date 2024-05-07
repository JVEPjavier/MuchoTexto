<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Usuario;
use Illuminate\Support\Facades\Hash;

class UpdatePasswords extends Command
{
    protected $signature = 'passwords:update';
    protected $description = 'Update passwords to use Bcrypt algorithm';

    public function handle()
    {
        $usuarios = Usuario::all();

        foreach ($usuarios as $usuario) {
            $usuario->Contraseña = Hash::make($usuario->Contraseña);
            $usuario->save();
        }

        $this->info('Passwords updated successfully.');
    }
}