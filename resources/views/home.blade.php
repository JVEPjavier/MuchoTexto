<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pagina inicio</title>
    @vite(['resources/css/app.css','resources/js/app.js'])

    

</head>
<body>
    <nav class="navbar navbar-expand-lg" style="background-color: #C1E893">
      <div class="container-fluid colornav">
        <a class="navbar-brand" href="#">Mucho Texto</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Acerca de nosotros</a>
            </li>
          </ul>
          <button type="button" class="btn btn-success" onclick="window.location.href='{{ route('login') }}'">Iniciar Sesión</button>
          <button type="button" class="btn btn-success ms-2" onclick="window.location.href='{{ route('register') }}'">Registrarse</button>
        </div>
      </div>
    </nav>
    <div class="container d-flex justify-content-center align-items-center" style="height: 100vh;"> <div class="text-center">
      <h1 style="font-size: 3em;">Bienvenido</h1> <p>
        mucho texto es una web que permite a sus usuarios escribir post's tratando diversos temas de tu interes, los cuales estan separados por diferentes tematicas. en estos post's puedes comentar y compartir tu opinion. para mas informacion, lee nuestros terminos y condiciones. ¡disfruta de tu estadia!
      </p>
    </div>
  </div>
</body>
</html>