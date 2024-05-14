<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
            padding-top: 20px;
        }
        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
        }
        .card {
            margin-bottom: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        .card-header {
            background-color: #007bff;
            color: #fff;
            font-weight: bold;
            border-top-left-radius: 8px;
            border-top-right-radius: 8px;
            padding: 10px;
        }
        .card-body {
            padding: 20px;
        }
        .card-title {
            font-size: 24px;
            margin-bottom: 10px;
        }
        .card-text {
            color: #555;
            line-height: 1.6;
            overflow: hidden;
            text-overflow: ellipsis;
            display: -webkit-box;
            -webkit-line-clamp: 3;
            -webkit-box-orient: vertical;
        }
        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
            color: #fff;
            text-decoration: none;
            padding: 10px 20px;
            border-radius: 5px;
            display: inline-block;
        }
        .btn-primary:hover {
            background-color: #0056b3;
            border-color: #0056b3;
        }

        .btn-back {
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <a href="{{ route('main') }}" class="btn btn-primary mb-2">Volver a la vista principal</a>

        @foreach ($publicaciones as $publicacion)
            <div class="card mb-3">
                <div class="card-header">
                    {{ $publicacion->categoria->NombreCategoria }}
                </div>
                <div class="card-body">
                    <h1 class="card-title">{{ $publicacion->usuario->NombreUsuario }}</h1>
                    <p class="card-text">{{ $publicacion->Contenido }}</p>
                    <div class="d-flex justify-content-between align-items-center">
                        <a href="{{ route('post-detail', $publicacion->Id) }}" class="btn btn-primary">Ver Detalles</a>
                        <form method="POST" action="{{ route('aceptar-post',$publicacion->Id)}}">
                            @csrf
                            <input type="hidden" name="postId" value="{{ $publicacion->Id }}">
                            <button type="submit" class="btn btn-success">Aceptar</button>
                        </form>
                    </div>

                </div>

            </div>
            
        @endforeach
    </div>
</body>
</html>