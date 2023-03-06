<?php
include '../config.php';

$id = $_GET['id'];

$boolean="SELECT habilitar FROM contactos WHERE id= '$id'";
$rboolean =mysqli_query($conexion, $boolean);
$fila = mysqli_fetch_assoc($rboolean);
$result= $fila["habilitar"] ;

    if( $result == 1)
        $result =0;
    else
        $result =1;
        
$sql1 = 'SELECT * FROM contactos';
$resultado = mysqli_query($conexion, $sql1);
// Actualiza el registro correspondiente
$sql = "UPDATE contactos SET habilitar =$result WHERE id= '$id'";
$result = mysqli_query($conexion, $sql);




header("Location: user.php");
?>