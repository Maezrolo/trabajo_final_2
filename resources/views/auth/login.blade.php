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
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200..700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-dGs/XnJRf7j2ssYpO4osB5vGY6gkKaCSTBnXiu3UZKrKMx5tgeUL9RuUHRbK8fwnY3vDxv9QQcqmSwq/iBqI9Q==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />


</head>

<style>
    body {
        background: #eae0d4;
        font-family: "Oswald", sans-serif;
    }

    form {
        border-radius: 7px;
        background: #b2f0ba;
        box-shadow: -25px 25px 50px #344d5d,
            25px -25px 50px #d0ffff;
    }

    .label-large {
        font-size: 21px;
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
                    <div class="card-body">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <h2 class="fw-bold mb-3 mt-3 text-uppercase text-center text-primary">iniciar sesion</h2>

                            <div class="row mb-4">
                                <label for="email" class="col-md-4 col-form-label text-md-end label-large">{{ __('Email Address') }}</label>

                                <div class="col-md-7">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-4">
                                <label for="password" class="col-md-4 col-form-label text-md-end label-large">{{ __('Password') }}</label>

                                <div class="col-md-7">
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-6 offset-md-4">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                        <label class="form-check-label label-large" for="remember">
                                            {{ __('Remember Me') }}
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-7 offset-md-4 ">
                                    <button type="submit" class="btn btn-primary label-large">
                                        {{ __('Login') }}
                                    </button>

                                    @if (Route::has('password.request'))
                                    <a class="btn btn-link label-large" href="{{ route('password.request') }}">
                                        {{ __('Olvidaste tu contraseña?') }}
                                    </a>
                                    @endif
                                </div>
                            </div>

                            <div class="separator">
                                <hr class="line">
                                <span class="material-symbols-outlined">
                                    filter_list
                                </span>
                                <hr class="line">
                            </div>

                            <br>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>