<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="icon" href="ruta/al/icono.ico" type="image/x-icon">
    @vite(['resources/css/app.css','resources/js/app.js'])
</head>
<body>
  <div class="container">
    <form>
      <div class="form-group">
          <label for="inputUser">Nombre de usuario</label>
          <input type="text" class="form-control" id="inputUser" aria-describedby="userHelp" placeholder="Ingrese su nombre de usuario">
      </div>
      <div class="form-group">
          <label for="exampleInputPassword1">Contraseña</label>
          <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Contraseña">
      </div>
      <div class="form-check">
          <input type="checkbox" class="form-check-input" id="exampleCheck1">
          <label class="form-check-label" for="exampleCheck1">Recuérdame</label>
      </div>
      <button type="submit" class="btn btn-primary">Enviar</button>
  </form>
  </div>
    
</body>
</html>