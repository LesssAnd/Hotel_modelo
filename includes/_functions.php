<?php
   
include '../config.php';
mysqli_select_db($conexion, 'welcome_app' );



if (isset($_POST['accion'])){ 
    switch ($_POST['accion']){
        //casos de registros
        case 'editar_registro':
            editar_registro();
            break; 

            case 'eliminar_registro';
            eliminar_registro();
    
            break;


		}

	}

    function editar_registro() {
		extract($_POST);
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $telefono = $_POST['telefono'];
        $correo = $_POST['correo'];
        $comentario =$_POST['comenatiro'];
        $imagen = $_FILES['imagen'];
        $img_nom= $imagen['name'];
        $temp= $imagen['tmp_name'];
        $habilitar = $_POST['habilita'];
    
        if ($temp != NULL) {
          $ruta = "../img/" . $_FILES['imagen']['name'];
          move_uploaded_file($_FILES['imagen']['tmp_name'], $ruta);
      } else {
          $ruta = "se esta perdiendo";
      }
    
        $consulta= "UPDATE contactos SET nombre = '$nombre', apellidos ='$apellido', tel ='$telefono', email ='$correo', comment ='$comentario', img ='$ruta', habilitar = '$habilitar' WHERE id = '$id'";
    
		//$consulta="UPDATE contactos  SET nombre = '$nombre', apellidos ='$apellidos', tel ='$telefono', email ='$email', comment ='$comentario', img ='$ruta', habilitar = '$habilitar' WHERE id = '$id'; ";
		mysqli_query($conexion, $consulta);

		header('Location: ../views/user.php');

}

function eliminar_registro() {
    extract($_POST);
    $id= $_POST['id'];
    $consulta= "DELETE FROM contactos WHERE id= $id";

    mysqli_query($conexion, $consulta);


    header('Location: ../views/user.php');

}





