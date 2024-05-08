<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite(['resources/css/app.css','resources/js/app.js'])
</head>
<body>
    <div class="container d-flex justify-content-center align-items-center mt-4">
        <div>
            @foreach($publicaciones as $publicacion)
            <div class="card mb-3">
                <div class="card-header">{{ $publicacion->IdCategoria }}</div>
                <div class="card-body">
                    <h5 class="card-title">{{ $publicacion->IdUsuario }}</h5>
                    <p class="card-text" style="max-width: 600px; max-height: 100px; overflow: hidden; text-overflow: ellipsis;">{{ $publicacion->Contenido }}</p>
                    <a href="#" class="btn btn-primary">Ver Detalles</a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</body>
</html>