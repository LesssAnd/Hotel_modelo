<?php
include 'config.php';
mysqli_select_db($conexion, 'welcome_app' );
?>
<!DOCTYPE html>
<html lang="es-MX">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registros</title>

	<link rel="stylesheet" href="./css/es.css">
    <link rel="stylesheet" href="./css/styles.css">
</head>

<body id="page-top">

<div class="modal fade" id="create" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title" id="exampleModalLabel">Registro de Usuarios</h3>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
<form  action="../includes/validar.php" method="POST"  enctype="multipart/form-data">

<div class="form-group">
                            <label for="nombre" class="form-label">Nombre </label>
                            <input type="text"  id="nombre" name="nombre" class="form-control" >
                            </div>
                            <div class="form-group">
                            <label for="apellido" class="form-label">Apellidos </label>
                            <input type="text"  id="apellido" name="apellido" class="form-control" >
                            </div>
                            <div class="form-group">
                                  <label for="telefono" class="form-label">Telefono </label>
                                <input type="tel"  id="telefono" name="telefono" class="form-control"  >
                                
                            </div>
                            <div class="form-group">
                                <label for="username">Correo:</label><br>
                                <input type="email" name="correo" id="correo" class="form-control" placeholder="" >
                            </div>
                            
                            <div class="form-group">
                            <label for="comment" class="form-label">Comentarios</label>
                            <input type="text"  id="comment" name="comenatiro" class="form-control" >
                            </div>
                            <div class="form-group" enctype="multipart/form-data">
                            <label for="imagen" class="form-label">Imagen </label>
                            <input type="file"  id="imagen" name="imagen" class="form-control" >
                            </div>
                            <div class="form-group">
                            <input type="radio" id="habilita" name="habilita"  value= 1>
                            <label  >    Habilitar Registro</label><br>
                            <input type="radio" id="habilita" name="habilita"  value = 0>
                            <label  >    Deshabilitar registro</label><br>
                      
                        
       
                                <div class="mb-3">
                                    
                               <input type="submit" value="Guardar"class="btn btn-success" 
                               name="registrar">
                               <a href="user.php" class="btn btn-danger">Cancelar</a>
                               
                            </div>
                        

                        </form>
               
</body>
</html>