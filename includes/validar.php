<?php
include '../config.php';
mysqli_select_db($conexion, 'welcome_app' );

if(isset($_POST['registrar'])){

    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $telefono = $_POST['telefono'];
    $correo = $_POST['correo'];
    $comentario =$_POST['comenatiro'];
    $imagen = $_FILES['imagen'];
    $img_nom= $imagen['name'];
    $temp= $imagen['tmp_name'];
    $habilitar = $_POST['habilita'];
    if($habilitar == NULL)
      $habilitar =0;
    if ($temp != NULL) {
      $ruta = "../img/" . $_FILES['imagen']['name'];
      move_uploaded_file($_FILES['imagen']['tmp_name'], $ruta);
  } else {
      $ruta = "se esta perdiendo";
  }

    $consulta= "INSERT INTO contactos ( nombre, apellidos, tel, email, comment, img, habilitar)
    VALUES ('$nombre', '$apellido','$telefono', '$correo','$comentario', '$ruta', '$habilitar' )";

    mysqli_query($conexion, $consulta);
    mysqli_close($conexion);

    header('Location: ../views/user.php');
  }










?>