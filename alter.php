<?php
include 'conexion.php';

$id = $_GET['id'];
mysqli_select_db($link, 'welcome_app' );
$sql1 = "SELECT * FROM contactos WHERE id = '$id' ";
$tabla = mysqli_query($link, $sql1);
$row = mysqli_fetch_array($tabla);
?>

<html>
<head>
    <title>Formulario de registro</title>
</head>
<body>
    <h1>Modificando datos:</h1>
    <form action="alter2.php" method="POST" enctype="multipart/form-data">

        <label for="id">ID:</label>
        <input type="text" name="id"  value=<?php echo $row["id"]?>  readonly><br>
       
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" value=<?php echo $row["nombre"]?>><br>

        <label for="apellidos">Apellidos:</label>
        <input type="text" name="apellidos" value=<?php echo $row["apellidos"]?>><br>

        <label for="telefono">Teléfono:</label>
        <input type="tel" name="telefono" value=<?php echo $row["tel"]?>><br>

        <label for="email">Email:</label>
        <input type="email" name="email" value=<?php echo $row["email"]?>><br>

        <label for="comentario">Comentario:</label><br>
        <textarea name="comentario" rows="5" cols="30"value=<?php echo $row["comment"]?>></textarea><br>

        <label for="imagen">Imagen:</label>
        <input type="file" name="imagen" value=<?php echo $row["img"]?>><br>

        <input type="radio" id="habilita" name="habilita" class="custom-control-input" value= 1>
        <label class="custom-control-label" for="customRadio1">Habilitar Registro</label><br>
        <input type="radio" id="habilita" name="habilita" class="custom-control-input" value = 0>
        <label class="custom-control-label" for="customRadio2">Deshabilitar registro</label><br>
        <input type="submit" name="submit" value="Update">
    </form>
</body>
</html>



