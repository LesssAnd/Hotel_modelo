<?php

$host = "127.0.0.1";
$user = "root";
$password = "";
$database = "welcome_app";


$conexion = mysqli_connect($host, $user, $password, $database);
if(!$conexion){
echo "No se realizo la conexion a la basa de datos, el error fue:".
mysqli_connect_error() ;


}

?>