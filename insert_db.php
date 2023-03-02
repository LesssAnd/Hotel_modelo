<!DOCTYPE html>
<html>
<head>
    <title>Formulario de registro</title>
</head>
<body>
    <h1>Formulario de registro</h1>
    <form action="ins.php" method="POST" enctype="multipart/form-data">
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" required><br>

        <label for="apellidos">Apellidos:</label>
        <input type="text" name="apellidos" required><br>

        <label for="telefono">Teléfono:</label>
        <input type="tel" name="telefono" required><br>

        <label for="email">Email:</label>
        <input type="email" name="email" required><br>

        <label for="comentario">Comentario:</label><br>
        <textarea name="comentario" rows="5" cols="30"></textarea><br>

        <label for="imagen">Imagen:</label>
        <input type="file" name="imagen"><br>

        <input type="submit" name="submit" value="Registrar">
    </form>
</body>
</html>



