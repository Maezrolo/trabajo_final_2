<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />

    <!-- <link rel="stylesheet" href="{{ asset('asset/estilo.css')}}"> -->
</head>
<style>
    body {
        background: #eae0d4;
    }

    form {
        background: #e5e5e5;
        border: 2px solid black;
    }

 
</style>

<body>
    <section class="vh-100">
        <div class="container py-5 h-100">
            <div class="row d-flex align-items-center justify-content-center h-100">
                <div class="col-md-8 col-lg-7 col-xl-6">
                    <img src="{{ asset('asset/1599791579602.png')}}" class="img-fluid" alt="Phone image">
                </div>
                <div class="col-md-7 col-lg-5 col-xl-5 offset-xl-1">

                    <!-- inicio del formulario -->
                    <form action="{{route('register')}}" method="post" class="p-2s">
                        <h2 class="fw-bold mb-2 text-uppercase text-center text-primary">Iniciar Sesión</h2>

                        <!-- Nombre input -->
                        <div class="form-outline mb-4">
                            <input type="text" id="form1Example13" class="form-control form-control-lg" />
                            <label class="form-label" for="form1Example13">Nombre</label>
                        </div>
                        <!-- apellido input -->
                        <div class="form-outline mb-4">
                            <input type="text" id="form1Example13" class="form-control form-control-lg" />
                            <label class="form-label" for="form1Example13">Apellido</label>
                        </div>
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

                        <!-- Password input -->
                        <div class="form-outline mb-4">
                            <input type="password" id="form1Example23" class="form-control form-control-lg" />
                            <label class="form-label" for="form1Example23">Confimar Contraseña</label>
                        </div>

                        <!-- Submit button -->
                        <button type="submit" class="btn btn-primary btn-lg btn-block">Registro</button>


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