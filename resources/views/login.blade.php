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
<body style="background-color:  rgb(208, 212, 216)">
    <main class="container align-center p-5">
        <section class="vh-100 gradient-custom">
            <div class="container py-5 h-100">
                <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                        <div class="card text-white" style="border-radius: 1rem; background-color: #85ca36;">
                            <div class="card-body p-5 text-center">
    
                                <div class="md-5 mb-0 mt-md-4 pb-5">
    
                                    <h2 class="fw-bold mb-4 text-uppercase">Iniciar sesión</h2>
    
                                    <form method="post" action="{{ route('iniciar-sesion') }}">
                                        @csrf
    
                                        <div data-mdb-input-init class="form-outline form-white mb-4">
                                            <input type="text" id="userinput" class="form-control form-control-lg mb-2" name="user" required>
                                            <label class="form-label" for="userinput">Usuario</label>
                                        </div>
    
                                        <div data-mdb-input-init class="form-outline form-white mb-4">
                                            <input type="password" id="typePasswordX" class="form-control form-control-lg mb-2" name="Contraseña" required>
                                            <label class="form-label" for="typePasswordX">Contraseña</label>
                                        </div>
    
                                        <button data-mdb-button-init data-mdb-ripple-init class="btn btn-outline-light btn-lg px-5" type="submit">Ingresar</button>
    
                                    </form>
    
                                </div>
    
                                <div>
                                    <p class="mb-0">¿No tienes una cuenta? <a href="#!" class="text-white-50 fw-bold">Registrarse</a></p>
                                </div>
    
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
</body>
</html>