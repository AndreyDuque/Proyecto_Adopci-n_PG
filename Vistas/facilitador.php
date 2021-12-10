<?php
//Seguridad de sesiones paginación
session_start();
error_reporting(0);
$varsesion=$_SESSION['usuario'];

if($varsesion == null || $varsesion = ''){
  header("location:../Vistas/inicio.php");
  die();
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>facilitador</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>

<body class="bg-secondary">

<header>

<!-- Barra superior -->

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">
    <img src='../img/casa-de-mascotas.png' width="40" height="40" alt="">AdopciónPG</a>

    <a class='col' href="../procedimientos/cerrar_sesion.php">
        <button type="button" class="btn btn-danger float-right">Cerrar sesión</button>
    </a>  
</nav>

</header>

<div class="container">
<br>
    <h1>Bienvenido Facilitador</h1>
</div>

<div class="container mt-5">
        <div class="row">
            
            <div class="col-md-3">
                <h3>Ingresar nueva mascota</h3>
                    <form action='../CRUD/insertar.php' id="formCrear" method="POST">
                        <input type="text" class="form-control mb-3" name="ID_mascota" id="ID_mascota" placeholder="ID de mascota" required>
                        <input type="text" class="form-control mb-3" name="Especie" id="Especie" placeholder="Especie" required>
                        <input type="text" class="form-control mb-3" name="Raza" placeholder="Raza" required>
                        <input type="text" class="form-control mb-3" name="Nombre" placeholder="Nombre" required>
                        <input type="text" class="form-control mb-3" name="Sexo" placeholder="Sexo" required>
                        <input type="text" class="form-control mb-3" name="Edad" placeholder="Edad-Meses" required>
                        <input type="text" class="form-control mb-3" name="Estado" placeholder="Estado" required>

                        <input type="submit" class="btn btn-primary" name="boton" value="Enviar">
                    </form>
            </div>

            <div class="col-md-9">
                <table class="table" >
                    <thead class="table-success table-striped" >
                        <tr>
                            <th>ID_Mascota</th>
                            <th>Especie</th>
                            <th>Raza</th>
                            <th>Nombre</th>
                            <th>Sexo</th>
                            <th>Edad-Meses</th>
                            <th>Estado</th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php
                            include('../CRUD/conexion.php');
                            $con=conectar();
                            
                            $sql="SELECT * FROM mascotas";
                            $query=mysqli_query($con,$sql);

                            while($row=mysqli_fetch_array($query)){
                        ?>
                            <tr>
                                <th><?php  echo $row['ID']?></th>
                                <th><?php  echo $row['especie']?></th>
                                <th><?php  echo $row['raza']?></th>
                                <th><?php  echo $row['nombre']?></th>
                                <th><?php  echo $row['sexo']?></th>
                                <th><?php  echo $row['edad']?></th>
                                <th><?php  echo $row['estado']?></th>
                                <th><a href="actualizarFaci.php?id=<?php echo $row['ID']?>" class="btn btn-info">Editar</a></th>
                                <th><a href="../CRUD/eliminar.php?id=<?php echo $row['ID'] ?>" class="btn btn-danger disabled">Eliminar</a></th> 
                            </tr>
                        <?php 
                            }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

<footer>

<div class="text-light card text-center bg-dark" style="margin-top: 100px; padding: 20px;">
    <h5 class="card-title">Programación Para La Web</h5>
    <p class="card-text">Dubier Andrey Duque Galvis</p>
</div>

</footer>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>    
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

</body>
</html>