<?php
include 'conexion.php'; 
// Obtener los datos del formulario
mysqli_select_db($link, 'welcome_app' );
$sql1 = 'SELECT * FROM contactos';
$tabla = mysqli_query($link, $sql1);

$nombre = $_POST['nombre'];
$apellidos = $_POST['apellidos'];
$telefono = $_POST['telefono'];
$email = $_POST['email'];
$comentario = $_POST['comentario'];
$imagen = $_FILES['imagen']['name'];

// Mover la imagen subida a una carpeta en el servidor
if ($_FILES['imagen']['tmp_name']) {
    $ruta = "../img" . $_FILES['imagen']['name'];
    move_uploaded_file($_FILES['imagen']['tmp_name'], $ruta);
} else {
    $ruta = null;
}

// Crear la sentencia SQL para insertar los datos
$sql = "INSERT INTO contactos ( nombre, apellidos, tel, email, comment, img) VALUES ( '$nombre', '$apellidos', '$telefono', '$email', '$comentario', '$ruta')";
//mysql_query($sql, $link)
if (mysqli_query($link, $sql)) {
    echo "Datos insertados correctamente";
    header("Location: sql.php");
} else {
    echo "Error al insertar datos: " . mysqli_error($link);
}



?>