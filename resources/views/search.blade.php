<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    @foreach($publicaciones as $publicacion)
            <div class="card mb-3">
                <div class="card-header">{{ $publicacion->categoria->NombreCategoria }}</div>
                <div class="card-body">
                    <h1 class="card-title">{{ $publicacion->usuario->NombreUsuario }}</h1>
                    <p class="card-text">{{ $publicacion->Contenido }}</p>
                    <a href="{{ route('post-detail', $publicacion->Id) }}" class="btn btn-primary">Ver Detalles</a>
                </div>
            </div>
        @endforeach
</body>
</html>