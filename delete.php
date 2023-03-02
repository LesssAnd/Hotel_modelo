<?php
include 'conexion.php';
$id = $_GET['id'];
mysqli_select_db($link, 'welcome_app' );
$sql1 = "SELECT * FROM contactos WHERE id = '$id' ";
$tabla = mysqli_query($link, $sql1);
echo "Estado seguro de que quiere borrar este registro";
$borrar="DELETE  FROM contactos WHERE id= '$id'";
$resultado = mysqli_query($link, $borrar);
if (isset($_POST['borrar'])) {
  // Aquí se puede agregar el código PHP para borrar los datos
  echo "Los datos se han borrado correctamente.";
  header("Location: sql.php");
  exit();
} elseif (isset($_POST['cancelar'])) {
  echo "El borrado de datos ha sido cancelado.";
}
?>
<form method="POST">
    <button type="submit" name="borrar" value="confirmar">Confirmar</button>
    <button type="submit" name="cancelar" value="cancelar">Cancelar</button>
</form>