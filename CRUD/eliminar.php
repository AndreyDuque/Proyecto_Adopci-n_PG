<?php

include("conexion.php");
$con=conectar();

$id_mascota=$_GET['id'];

$sql="DELETE FROM mascotas  WHERE ID='$id_mascota'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: admin.php");
    }
?>