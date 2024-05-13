<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Detalles</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
        }
        .container {
            margin-top: 50px;
        }
        .post {
            background-color: #fff;
            border-radius: 8px;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        .post h1 {
            font-size: 24px;
            margin-bottom: 20px;
        }
        .post .author {
            color: #666;
            margin-bottom: 10px;
        }
        .post p {
            margin-bottom: 20px;
            line-height: 1.6;
        }
        .comments {
            margin-top: 30px;
        }
        .comment {
            background-color: #f9f9f9;
            border-radius: 8px;
            padding: 15px;
            margin-bottom: 15px;
        }
        .comment p {
            margin-bottom: 0;
        }

        .btn-back {
            margin-top: 20px;
        }
    </style>
</head>
<body>
    
    <div class="container">
        <a href="{{ route('main') }}" class="btn btn-primary  mb-2">Volver a la vista principal</a>
        <div class="post">
            <h1>{{ $publicacion->categoria->NombreCategoria }}</h1>
            <p class="author">Publicado por: {{ $publicacion->usuario->NombreUsuario }}</p>
            <p>{{ $publicacion->Contenido }}</p>
        </div>
        
        <div class="comments">
            <h2>Comentarios</h2>
            
            <form method="POST" action="{{ route('addComentario') }}">
                @csrf
                <div class="form-group">
                    <label for="comentario">Comentario:</label>
                    <textarea class="form-control" id="comentario" rows="3" placeholder="Tu comentario" name="comentario"></textarea>
                </div>
                <input type="hidden" name="id_publicacion" value="{{ $publicacion->Id }}">
                <button type="submit" class="btn btn-primary mt-2">Enviar Comentario</button>
            </form>

            @foreach($comentarios as $comentario)
                <div class="comment">
                    <p>{{ $comentario->Contenido }}</p>
                    <p>Por: {{ $comentario->usuario->NombreUsuario }}</p>
                </div>
            @endforeach
            
        </div>
    </div>

</body>
</html>