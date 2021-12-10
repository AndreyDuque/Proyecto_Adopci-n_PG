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

$sql="UPDATE mascotas SET  especie='$especie',raza='$raza',nombre='$nombre',sexo='$sexo',edad='$edad',estado='$estado' WHERE ID='$id_mascota'";
$query=mysqli_query($con,$sql);

if($boton == 'Actualizar'){
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