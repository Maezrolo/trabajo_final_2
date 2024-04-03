<!doctype html>
<html lang="es-Ar">

<head>
    <title>Registro</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200..700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />

    <!-- <link rel="stylesheet" href="{{ asset('asset/estilo.css')}}"> -->
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

    .card-body {
        background-color: #fff;
        /* Cambie el código hexadecimal por su color deseado */
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

    .label-large {
        font-size: 21px;
    }
</style>

<body>
    <!-- barra de navegacion -->
    <div class="collapse" id="navbarToggleExternalContent" data-bs-theme="dark">
        <div class="bg-dark p-3 text-center  ">
            <h3 class="text-body-emphasis">Bienvenidos</h3>
            <span class="text-body-secondary h3">Tanlento Digital.</span>
            @if (Route::has('login'))
            <a href="{{ route('login') }}" class="ml-4 text-sm text-gray-700 underline ">Login</a>
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

    <!-- cuerpo y formulario -->
    <section class="vh-100">
        <div class="container py-5 h-100">
            <div class="row d-flex align-items-center justify-content-center h-100">
                <div class="col-md-8 col-lg-7 col-xl-6">
                    <img src="{{ asset('asset/1599791579602.png')}}" class="img-fluid" alt="Phone image">
                </div>
                <!-- inicio del formulario -->
                <div class="col-md-7 col-lg-5 col-xl-5 offset-xl-1">

                    <div class="card-body">
                        <form method="POST" action="{{ route('register') }}">
                            @csrf
                            <h2 class="fw-bold mb-3 mt-3 text-uppercase text-center text-primary">Registro</h2>

                            <div class="row mb-4">
                                <label id="LM" for="name" class="col-md-4 col-form-label text-md-end label-large">{{ __('Nombre') }}</label>

                                <div class="col-md-7">
                                    <input class="form-control form-control-lg" id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-4">
                                <label id="LM" for="username" class="col-md-4 col-form-label text-md-end label-large">{{ __('Usuario') }}</label>

                                <div class="col-md-7">
                                    <input class="form-control form-control-lg" id="username" type="text" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" required autocomplete="username" autofocus>

                                    @error('username')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-4">
                                <label for="email" class="col-md-4 col-form-label text-md-end label-large">{{ __('Correo Electronico') }}</label>

                                <div class="col-md-7">
                                    <input class="form-control form-control-lg" id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-4">
                                <label for="password" class="col-md-4 col-form-label text-md-end label-large">{{ __('Contraseña') }}</label>

                                <div class="col-md-7">
                                    <input class="form-control form-control-lg" id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3 ">
                                <label for="password-confirm" class="col-md-4 col-form-label text-md-end label-large">{{ __('Confimar Contraseña') }}</label>

                                <div class="col-md-7">
                                    <input class="form-control form-control-lg" id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary btn-lg">
                                        {{ __('Crear Cuenta') }}
                                    </button>
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