<?php
include 'conexion.php';

$id = $_POST['id'];
mysqli_select_db($link, 'welcome_app' );
$sql1 = "SELECT * FROM contactos WHERE id = '$id' ";
// Consulta SQL
if (mysqli_num_rows(mysqli_query($link, $sql1)) > 0) {
    echo "Dato existente";
    
} else {
    echo "El campo no se puede modificar porque no existe " ;
    //header("Location: sql.php");
}

?>

<html>
<head>
    <title>Formulario de registro</title>
</head>
<body>
    <h1>Modificando datos:</h1>
    <form action="alter2.php" method="POST" enctype="multipart/form-data">
        <label for="id">ID:</label>
        <input type="text" name="id" required> <br>

        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" ><br>

        <label for="apellidos">Apellidos:</label>
        <input type="text" name="apellidos" ><br>

        <label for="telefono">Teléfono:</label>
        <input type="tel" name="telefono" ><br>

        <label for="email">Email:</label>
        <input type="email" name="email" ><br>

        <label for="comentario">Comentario:</label><br>
        <textarea name="comentario" rows="5" cols="30"></textarea><br>

        <label for="imagen">Imagen:</label>
        <input type="file" name="imagen"><br>

        <input type="submit" name="submit" value="Registrar">
    </form>
</body>
</html>

  


