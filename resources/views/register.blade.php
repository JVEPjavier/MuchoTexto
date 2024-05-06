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
    <main class="container align-center p-5">
        <form method="POST" action="{{ route('validar-registro') }}">
            @csrf
            <div class="mb-3">
                <label for="userInput" class="form-label">Usuario</label>
                <input type="text" class="form-control" id="userInput" name="user" required autocomplete="disabled"/>
            </div>
            <div class="mb-3">
                <label for="passInput" class="form-label">Contraseña</label>
                <input type="password" class="form-control" id="passInput" name="pass" required autocomplete="disabled">
            </div>
            <div class="mb-3">
                <label for="emailInput" class="form-label">Email</label>
                <input type="email" class="form-control" id="emailInput" name="email" required autocomplete="disabled">
            </div>
            <button type="submit" class="btn btn-primary">Registrarse</button>
        </form>
    </main>
    
</body>
</html>