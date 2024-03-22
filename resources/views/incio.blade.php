<!doctype html>
<html lang="en">

<head>
    <title>Inicio</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
</head>

<style>
    body{
        background-color: #c8dce1;
    }
    .card-columns {
        display: flex;
        flex-wrap: wrap;
        /* Permite que las tarjetas se envuelvan en varias filas si no caben en una sola */
        gap: 10px;
        /* Espacio entre las tarjetas */
    }

    .card-columns {
            display: flex;
            flex-wrap: wrap; /* Permite que las tarjetas se envuelvan en varias filas si no caben en una sola */
            gap: 150px; /* Espacio entre las tarjetas */
        }
        .card {
            width: 250px; /* Establece el ancho deseado */
            height: 350px; /* Establece la altura deseada */
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            border: 3px solid #ccc; /* Borde para las tarjetas */
            margin: 10px; /* Añade margen entre las tarjetas */
        }
        .card img {
            max-width: 100%; /* Ajusta la imagen al ancho de la tarjeta */
            height: auto; /* Para mantener la proporción de la imagen */
        }
</style>

<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary" class="navbar bg-dark border-bottom border-body" data-bs-theme="dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Dropdown
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" aria-disabled="true">Disabled</a>
                    </li>
                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>
    <h1 class="col-12 text-center"> Bienvenidos </h1>
    <main>

        <div class="card-columns">
            <a href="" style="color: black;" >
                <div class="card text-center" >
                    <img src="{{ asset('asset/q1.png')}}" class="card-img-top">
                    <div class="card-body">
                        <h1 class="btn btn-primary">Productos</h1>
                    </div>
                </div>
            </a>

            <a href="" style="color: black;">
                <div class="card text-center">
                    <img src="{{ asset('asset/a1.png')}}" class="card-img-top">
                    <div class="card-body">
                        <h1 class="btn btn-primary">Vender</h1>
                    </div>
                </div>
            </a>

            <a href="" style="color: black;">
                <div class="card text-center">
                    <img src="{{ asset('asset/w1.png')}}" class="card-img-top">
                    <div class="card-body">
                        <h1 class="btn btn-primary">Ventas</h1>
                    </div>
                </div>
            </a>



        </div>

    </main>
    <footer>
        <!-- place footer here -->
    </footer>


    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>

</html>