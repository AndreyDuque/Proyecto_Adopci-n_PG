<?php 
    include('../CRUD/conexion.php');
    $con=conectar();

$id=$_GET['id'];

$sql="SELECT * FROM mascotas WHERE ID='$id'";
$query=mysqli_query($con,$sql);

$row=mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <title>Actualizar</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
    </head>
    <body class="bg-secondary">

    <header>

    <!-- Barra superior -->

        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">
            <img src='../img/casa-de-mascotas.png' width="40" height="40" alt="">AdopciónPG</a>

            <a class='col' href="cerrar_sesion.php">
                <button type="button" class="btn btn-danger float-right">Cerrar sesión</button>
            </a>  
        </nav>

    </header>

                <div class="container mt-5 col-md-4">
                    <form action='../CRUD/actualizar.php' method="POST">

                    <input type="hidden" name="ID_mascota" value="<?php echo $row['ID']  ?>">
                                
                                <input type="text" class="form-control mb-3" name="Especie" placeholder="Especie" value="<?php echo $row['especie']  ?>">
                                <input type="text" class="form-control mb-3" name="Raza" placeholder="Raza" value="<?php echo $row['raza']  ?>">
                                <input type="text" class="form-control mb-3" name="Nombre" placeholder="Nombre" value="<?php echo $row['nombre']  ?>">
                                <input type="text" class="form-control mb-3" name="Sexo" placeholder="Sexo" value="<?php echo $row['sexo']  ?>">
                                <input type="text" class="form-control mb-3" name="Edad" placeholder="Edad" value="<?php echo $row['edad']  ?>">
                                <input type="text" class="form-control mb-3" name="Estado" placeholder="Estado" value="<?php echo $row['estado']  ?>">
                                
                            <input type="submit" class="btn btn-primary btn-block" name="boton" value="Actualizar">
                    </form>
                    
                </div>

    <footer>

    <div class="text-light card text-center bg-dark" style="margin-top: 175px; padding: 20px;">
        <h5 class="card-title">Programación Para La Web</h5>
        <p class="card-text">Dubier Andrey Duque Galvis</p>
    </div>

    </footer>            

    </body>
</html>