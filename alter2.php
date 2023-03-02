<?php
include 'conexion.php';
//include 'sql.php';
$id = $_POST['id'];
echo 'id' ;
echo $id ;
mysqli_select_db($link, 'welcome_app' );
$sql1 = "SELECT * FROM contactos WHERE id = '$id' ";
$tabla = mysqli_query($link, $sql1);

// Consulta SQL
if (mysqli_num_rows($tabla) > 0) {
    echo "Existe el dato";
    // Obtener los datos del formulario
    mysqli_select_db($link, 'welcome_app' );
    $sql1 = "SELECT * FROM contactos WHERE id = '$id'";
    $datos = mysqli_query($link, $sql1);
    $row = mysqli_fetch_array($datos);

    $nombre = $_POST['nombre'];
    $apellidos = $_POST['apellidos'];
    $telefono = $_POST['telefono'];
    $email = $_POST['email'];
    $comentario = $_POST['comentario'];
    $imagen = $_FILES['imagen']['name'];

    // Mover la imagen subida a una carpeta en el servidor
    if ($_FILES['imagen']['tmp_name']) {
        $ruta = "img/" . $_FILES['imagen']['name'];
        move_uploaded_file($_FILES['imagen']['tmp_name'], $ruta);
    } else {
        $ruta = null;
    }
    // Crear la sentencia SQL para insertar los datos

    $sql = "UPDATE contactos  SET nombre = '$nombre', apellidos ='$apellidos', tel ='$telefono', email ='$email', comment ='$comentario', img ='$imagen' WHERE id = '$id';";
    //mysql_query($sql, $link)
    if (mysqli_query($link, $sql)) {
        echo "Datos editados correctamente";
        
    } else {
        echo "Error al insertar datos: " . mysqli_error($link);
    }


} else {
    echo "NO ES POSIBLE EDITAR LOS DATOS PORQUE NO EXISTE EL REGISTRO " ;
}
?>