<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mascotas</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

</head>

<body class="bg-secondary">

<header>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="inicio.php">
    <img src='../img/casa-de-mascotas.png' width="40" height="40" alt="">AdopciónPG</a>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="inicio.php">Inicio <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="#inicio">Nuestras mascotas <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="inicio.php#info">Quienes somos</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="inicio.php#contacto">Contacto</a>
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
            <form action="" id="formIngresar">
              <div class="mb-3">
                <label for="usuario" class="col-form-label">Usuario:</label>
                <input type="text" class="form-control" name="usuario" id="usuario">
              </div>
              <div class="mb-3">
                <label for="password" class="col-form-label">Contraseña:</label>
                <input type="password" class="form-control" name="password" id="password">
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
<div class="container" style="margin-top: 20px;">

<!--Tarjetas para mascotas-->

<div class="row row-cols-1 row-cols-md-3 g-4">

  <!--Mascota 1 -->  
  <div class="col">
    <div class="card h-100 bg-warning">
      <img src="../img/Susi.jpeg" class="card-img-top" alt="...">
      <div class="card-body">
      
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
        Conoce mas sobre mi
        </button>

        <!-- Modal -->
        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Susi</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    
                    <div class="card text-center bg-warning">
                        <img src="../img/Susi.jpeg" class="card-img-top" alt="...">
                        <div class="card-body">
                            
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">ID: 1111</li>
                                <li class="list-group-item">Especie: Canino</li>
                                <li class="list-group-item">Raza: Criollo</li>
                                <li class="list-group-item">Nombre: Susi</li>
                                <li class="list-group-item">Sexo: Hembra</li>
                                <li class="list-group-item">Edad-Meses: 15</li>
                            </ul>

                        </div>
                    </div>

                    </div>
                    <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cerrar</button>
                    </div>
                </div>
            </div>
        </div> 

      </div>
    </div>
  </div>

  <!--Mascota 2 -->
  <div class="col">
    <div class="card h-100 bg-warning">
      <img src="../img/leona.jpg" class="card-img-top" alt="...">
      <div class="card-body">

        <!-- Boton modal -->
        <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#staticBackdrop2">
        Conoce mas sobre mi
        </button>

        <!-- Modal -->
        <div class="modal fade" id="staticBackdrop2" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Leona</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    
                    <div class="card text-center bg-warning">
                        <img src="../img/leona.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">ID: 2222</li>
                                <li class="list-group-item">Especie: Felino</li>
                                <li class="list-group-item">Raza: Domestico</li>
                                <li class="list-group-item">Nombre: Leona</li>
                                <li class="list-group-item">Sexo: Hembra</li>
                                <li class="list-group-item">Edad-Meses: 28</li>
                            </ul>

                        </div>
                    </div>

                    </div>
                    <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cerrar</button>
                    </div>
                </div>
            </div>
        </div>               

      </div>
    </div>
  </div>

  <!--Mascota 3-->
  <div class="col">
    <div class="card h-100 bg-warning">
      <img src="../img/negro.jpg" class="card-img-top" alt="...">
      <div class="card-body">

        <!-- Boton modal -->
        <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#staticBackdrop3">
        Conoce mas sobre mi
        </button>

        <!-- Modal -->
        <div class="modal fade" id="staticBackdrop3" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Negro</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    
                    <div class="card text-center bg-warning">
                        <img src="../img/negro.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">ID: 3333</li>
                                <li class="list-group-item">Especie: Canino</li>
                                <li class="list-group-item">Raza: Criollo</li>
                                <li class="list-group-item">Nombre: Negro</li>
                                <li class="list-group-item">Sexo: Macho</li>
                                <li class="list-group-item">Edad-Meses: 74</li>
                            </ul>

                        </div>
                    </div>

                    </div>
                    <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cerrar</button>
                    </div>
                </div>
            </div>
        </div> 

      </div>
    </div>
  </div>

  <!--Mascota 4-->
  <div class="col">
    <div class="card h-100 bg-warning">
      <img src="../img/rayas.jfif" class="card-img-top" alt="...">
      <div class="card-body">

        <!-- Boton modal -->
        <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#staticBackdrop4">
        Conoce mas sobre mi
        </button>

        <!-- Modal -->
        <div class="modal fade" id="staticBackdrop4" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Rayas</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    
                    <div class="card text-center bg-warning">
                        <img src="../img/rayas.jfif" class="card-img-top" alt="...">
                        <div class="card-body">
                            
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">ID: 4444</li>
                                <li class="list-group-item">Especie: Felino</li>
                                <li class="list-group-item">Raza: Domestico</li>
                                <li class="list-group-item">Nombre: Rayas</li>
                                <li class="list-group-item">Sexo: Macho</li>
                                <li class="list-group-item">Edad-Meses: 1</li>
                            </ul>

                        </div>
                    </div>

                    </div>
                    <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cerrar</button>
                    </div>
                </div>
            </div>
        </div> 

      </div>
    </div>
  </div>

  <!--Mascota 5-->
  <div class="col">
    <div class="card h-100 bg-warning">
      <img src="../img/canela.jpg" class="card-img-top" alt="...">
      <div class="card-body">

        <!-- Boton modal -->
        <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#staticBackdrop5">
        Conoce mas sobre mi
        </button>

        <!-- Modal -->
        <div class="modal fade" id="staticBackdrop5" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Canela</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    
                    <div class="card text-center bg-warning">
                        <img src="../img/canela.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">ID: 5555</li>
                                <li class="list-group-item">Especie: Canino</li>
                                <li class="list-group-item">Raza: Pitbull</li>
                                <li class="list-group-item">Nombre: Canela</li>
                                <li class="list-group-item">Sexo: Hembra</li>
                                <li class="list-group-item">Edad-Meses: 41</li>
                            </ul>

                        </div>
                    </div>

                    </div>
                    <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cerrar</button>
                    </div>
                </div>
            </div>
        </div> 

      </div>
    </div>
  </div>
  
  <!--Mascota 6-->
  <div class="col">
    <div class="card h-100 bg-warning">
      <img src="../img/Sparrow.jpg" class="card-img-top" alt="...">
      <div class="card-body">

        <!-- Boton modal -->
        <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#staticBackdrop6">
        Conoce mas sobre mi
        </button>

        <!-- Modal -->
        <div class="modal fade" id="staticBackdrop6" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Sparrow</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    
                    <div class="card text-center bg-warning">
                        <img src="../img/Sparrow.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">ID: 6666</li>
                                <li class="list-group-item">Especie: Felino</li>
                                <li class="list-group-item">Raza: Domestico</li>
                                <li class="list-group-item">Nombre: Sparrow</li>
                                <li class="list-group-item">Sexo: Macho</li>
                                <li class="list-group-item">Edad-Meses: 53</li>
                            </ul>

                        </div>
                    </div>

                    </div>
                    <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cerrar</button>
                    </div>
                </div>
            </div>
        </div> 

      </div>
    </div>
  </div>
</div>
</div>

</main>

<footer>

    <div class="text-light card text-center bg-dark" style="margin-top: 20px; padding: 20px;">
        <h5 class="card-title">Programación Para La Web</h5>
        <p class="card-text">Dubier Andrey Duque Galvis</p>
    </div>

</footer>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>    
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
  
</body>
</html>