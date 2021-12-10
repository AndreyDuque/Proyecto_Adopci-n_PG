<?php
include('../CRUD/conexion.php');
$con=conectar();

$usuario=$_POST['usuario'];
$contraseña=$_POST['password'];
session_start();
$_SESSION['usuario']=$usuario;

$sql="SELECT*FROM usuarios where Usuario='$usuario' and Contraseña='$contraseña'";
$query=mysqli_query($con,$sql);

$row=mysqli_fetch_array($query);

if($row['ID_Cargo']==1){
    header('Location: ../Vistas/admin.php');
}
else{
    if($row['ID_Cargo']==2){
        header('Location: ../Vistas/facilitador.php');
    }
    else{
        echo '<script type="text/javascript">
        alert("Usuario o contraseña incorrectos, intentelo nuevamente :( ");
        window.location.href="../Vistas/inicio.php";
        </script>';
    }
}
mysqli_free_result($query);
mysqli_close($con);

?>