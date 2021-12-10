<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AdopcionPG</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

</head>

<body class="bg-secondary">

<header>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">
    <img src='../img/casa-de-mascotas.png' width="40" height="40" alt="">AdopciónPG</a>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#inicio">Inicio <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="mascotas.php">Nuestras mascotas <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#info">Quienes somos</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#contacto">Contacto</a>
      </li>
    </ul>

    <!-- Ingresar -->

    <div class="form-inline my-2 my-lg-0">
    <button type="button" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">Ingresar</button>
    </div>

    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">AdopciónPG</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <form action='../procedimientos/validar.php' id="formIngresar" method="POST">
              <div class="mb-3">
                <label for="usuario" class="col-form-label">Usuario:</label>
                <input type="text" class="form-control" name="usuario" id="usuario" required>
              </div>
              <div class="mb-3">
                <label for="password" class="col-form-label">Contraseña:</label>
                <input type="password" class="form-control" name="password" id="password" required>
              </div>

              <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cerrar</button>
                <button type="submit" name="submit" class="btn btn-success" value="Ingresar">Ingresar</button>
              </div>

              <div id="error"></div>

            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</nav>

</header>

<main>

    <div class="container">

        <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src='../img/internet-adopcion-animales-compania-822355.jpg' class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src='../img/perros-gatos-verdadero-falso256jpg.jpg' class="d-block w-100" alt="...">
                </div>
                    <div class="carousel-item">
                    <img src='../img/gato_y_niño-830x518.jpg' class="d-block w-100" alt="...">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
            </a>
        </div>

        <div class="container p-3 my-3 bg-info text-white">
            <a name="info" id="info"></a>
            <h1>AdopciónPG</h1>
            <p>Somos una fundación sin animo de lucro que busca mejorar las condiciones de perros y gatos que se encuentran
            abandonados a su suerte. Pretendemos brindarles la posiblilidad de encontrar un hogar donde puedan tener una vida
            digna llena de amor y felicidad.</p>
            <br>
            <b>Adopta, NO ABANDONES...</b>
            <br><br>
            <iframe style="margin-left: 25%;" width="560" height="315" src="https://www.youtube.com/embed/CTmYM4xqEBQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>

    </div>

</main>

<footer class="text-light">
    <a name="contacto" id="contacto"></a>
    <div class="card text-center bg-dark">
    <div class="card-header">
        Escribenos
    </div>
    <div class="card-body bg-secondary">
        <h5 class="card-title">adopcion_pg_@gmail.com</h5>
        <p class="card-text">Atrevete a marcar la diferencia</p>
        <a href="inicio.php" class="btn btn-info">Regresar al inicio</a>
    </div>
    <div class="card-footer text-muted">
        2021
    </div>
    </div>

</footer>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>    
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

</body>
</html>