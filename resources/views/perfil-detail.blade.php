<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Perfil</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
        }
        .container {
            margin-top: 50px;
        }
        .profile {
            background-color: #fff;
            border-radius: 8px;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        .profile h1 {
            font-size: 24px;
            margin-bottom: 20px;
        }
        .profile p {
            margin-bottom: 20px;
            line-height: 1.6;
        }
        .profile-info {
            margin-top: 30px;
        }
        .profile-info p {
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <div class="container">
        <a href="{{ route('main') }}" class="btn btn-primary  mb-2">Volver a la vista principal</a>

        <div class="profile">
            <h1>Perfil de {{ $usuario->NombreUsuario }}</h1>
            <div class="profile-info">
                <p><strong>Nombre:</strong> {{ $usuario->NombreUsuario }}</p>
                <p><strong>Correo electrónico:</strong> {{ $usuario->CorreoElectronico }}</p>
                <p><strong>Fecha de registro:</strong> {{ $usuario->FechaRegistro }}</p>
            </div>
        </div>
    </div>
</body>
</html>