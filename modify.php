<?php
include 'conexion.php';

$id = $_GET['id'];

mysqli_select_db($link, 'welcome_app' );
$boolean="SELECT habilitar FROM contactos WHERE id= '$id'";
$rboolean =mysqli_query($link, $boolean);
$fila = mysqli_fetch_assoc($rboolean);
$result= $fila["habilitar"] ;

    if( $result == 1)
        $result =0;
    else
        $result =1;
        
$sql1 = 'SELECT * FROM contactos';
$resultado = mysqli_query($link, $sql1);
// Actualiza el registro correspondiente
$sql = "UPDATE contactos SET habilitar =$result WHERE id= '$id'";
$result = mysqli_query($link, $sql);




header("Location: sql.php");
?>