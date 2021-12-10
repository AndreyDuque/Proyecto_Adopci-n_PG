<?php
include("conexion.php");
$con=conectar();

$id_mascota=$_POST['ID_mascota'];
$especie=$_POST['Especie'];
$raza=$_POST['Raza'];
$nombre=$_POST['Nombre'];
$sexo=$_POST['Sexo'];
$edad=$_POST['Edad'];
$estado=$_POST['Estado'];
$boton=$_POST['boton'];


$sql="INSERT INTO mascotas VALUES('$id_mascota','$especie','$raza','$nombre','$sexo','$edad','$estado')";
$query= mysqli_query($con,$sql);

if($boton == 'Enviar'){
    if($query){
        Header('Location: ../Vistas/facilitador.php');
        
    }else {
    }
}else{
    if($query){
        Header('Location: ../Vistas/admin.php');
        
    }else {
    } 
}
?>