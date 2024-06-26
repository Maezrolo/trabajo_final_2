<!doctype html>
<html lang="es-Ar">

<head>
    <title>Iniciar Seccion</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />

</head>

<style>
    body {
        background: #eae0d4;
    }

    form {
        background: #e5e5e5;
        border: 2px solid black;
    }

    .divider:after,
    .divider:before {
        content: "";
        flex: 1;
        height: 1px;
        background: #eee;
    }

    .separator {
        width: 100%;
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 30px;
        color: #8B8E98;
    }

    .separator .line {
        display: block;
        width: 100%;
        height: 2px;
        border: 0;
        background-color: #c85271;
    }
</style>

<body>

    <!-- barra de navegacion -->
    <div class="collapse" id="navbarToggleExternalContent" data-bs-theme="dark">
        <div class="bg-dark p-4">
            <h5 class="text-body-emphasis h4">Bienvenidos</h5>
            <span class="text-body-secondary">Tanlento Digital.</span>
            @if (Route::has('register'))
            <a href="{{ route('register') }}" class="ml-4 text-sm  text-gray-700 underline">Registro</a>
            @endif
        </div>
    </div>
    <nav class="navbar navbar-dark bg-dark">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
    </nav>


    <section class="vh-100">
        <div class="container py-5 h-100">
            <div class="row d-flex align-items-center justify-content-center h-100">
                <div class="col-md-8 col-lg-7 col-xl-6">
                    <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/draw2.svg" class="img-fluid" alt="Phone image">
                </div>
                <div class="col-md-7 col-lg-5 col-xl-5 offset-xl-1">

                    <!-- inicio del formulario -->
                    <form action="{{route('login')}}" method="post" class="p-4">
                        <h2 class="fw-bold mb-2 text-uppercase text-center text-primary">Iniciar Sesión</h2>

                        <!-- Email input -->
                        <div class="form-outline mb-4">
                            <input type="email" id="form1Example13" class="form-control form-control-lg" />
                            <label class="form-label" for="form1Example13">Dirección de correo electrónico</label>
                        </div>

                        <!-- Password input -->
                        <div class="form-outline mb-4">
                            <input type="password" id="form1Example23" class="form-control form-control-lg" />
                            <label class="form-label" for="form1Example23">Contraseña</label>
                        </div>

                        <div class="d-flex justify-content-around align-items-center mb-4">
                            <!-- Checkbox -->
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="form1Example3" checked />
                                <label class="form-check-label" for="form1Example3"> Acuérdate de mí </label>
                            </div>
                            <a href="#!">¿Has olvidado tu contraseña?</a>
                        </div>

                        <!-- Submit button -->
                        <button type="submit" class="btn btn-primary btn-lg btn-block">Iniciar Sesión</button>

                        @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="ml-4 text-sm  text-gray-700 underline">Registro</a>
                        @endif


                        
                        <div class="separator">
                                <hr class="line">
                                <span class="material-symbols-outlined">
                                    filter_list
                                </span>
                                <hr class="line">
                            </div>
                        <!-- <div class="divider d-flex align-items-center my-4">
                            <p class="text-center fw-bold mx-3 mb-0 text-muted">OR</p>
                        </div>

                        <a class="btn btn-primary btn-lg btn-block" style="background-color: #3b5998" href="#!" role="button">
                        <i class="bi bi-facebook"></i>Continue with Facebook
                        </a>
                        <a class="btn btn-primary btn-lg btn-block" style="background-color: #55acee" href="#!" role="button">
                        <i class="fab fa-twitter me-2"></i>Continue with Twitter</a> -->

                    </form>
                </div>
            </div>
        </div>
    </section>
</body>

</html>