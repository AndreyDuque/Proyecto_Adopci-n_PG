<?php

//$conexion=mysqli_connect("localhost","root","","adopcionpg");
function conectar(){
    $host="localhost";
    $user="root";
    $pass="";
    
    $bd="adopcionpg";

    $con=mysqli_connect($host,$user,$pass);

    mysqli_select_db($con,$bd);

    return $con;
}

?>