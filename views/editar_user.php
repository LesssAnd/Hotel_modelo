<?php
include '../config.php';
mysqli_select_db($conexion, 'welcome_app' );

$id= $_GET['id'];
$consulta= "SELECT * FROM contactos WHERE id = $id";
$resultado = mysqli_query($conexion, $consulta);
$usuario = mysqli_fetch_assoc($resultado);

?>


<!DOCTYPE html>
<html lang="es-MX">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registros</title>


    <link rel="stylesheet" href="../css/fontawesome-all.min.css">
    <link rel="stylesheet" href="../css/styles.css">
    <link rel="stylesheet" href="../css/es.css">
</head>

<body id="page-top">


<form  action="../includes/_functions.php" method="POST" enctype="multipart/form-data">
<div id="login" >
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12">
                    
                            <br>
                            <br>
                            <h3 class="text-center">Editando datos de ID: <?php echo $usuario['id'];?></h3>
                            <div class="form-group">
                            <label for="nombre" class="form-label">Nombre </label>
                            <input type="text"  id="nombre" name="nombre" class="form-control" value="<?php echo $usuario['nombre'];?>">
                            </div>
                            <div class="form-group">
                            <label for="apellido" class="form-label">Apellidos </label>
                            <input type="text"  id="apellido" name="apellido" class="form-control" value="<?php echo $usuario['apellidos'];?>">
                            </div>
                            <div class="form-group">
                                  <label for="telefono" class="form-label">Telefono </label>
                                <input type="tel"  id="telefono" name="telefono" class="form-control" value="<?php echo $usuario['tel'];?>" >
                                
                            </div>
                            <div class="form-group">
                                <label for="username">Correo:</label><br>
                                <input type="email" name="correo" id="correo" class="form-control" placeholder="" value="<?php echo $usuario['email'];?>">
                            </div>
                            
                            <div class="form-group">
                            <label for="comment" class="form-label">Comentarios</label>
                            <input type="text"  id="comment" name="comenatiro" class="form-control" value="<?php echo $usuario['nombre'];?>">
                            </div>
                            <div class="form-group" enctype="multipart/form-data">
                            <label for="imagen" class="form-label">Imagen </label>
                            <input type="file"  id="imagen" name="imagen" class="form-control" value="<?php echo $usuario['img'];?>">
                            </div>
                            <div class="form-group">
                            <input type="radio" id="habilita" name="habilita"  value= 1>
                            <label  >    Habilitar Registro</label><br>
                            <input type="radio" id="habilita" name="habilita"  value = 0>
                            <label  >    Deshabilitar registro</label><br>
                            <input type="hidden" name="accion" value="editar_registro">
                            <input type="hidden" name="id" value="<?php echo $id;?>">   
                        </div>

                            
                        
                           <br>

                                <div class="mb-3">
                                    
                                <button type="submit" class="btn btn-success" >Editar</button>
                               <a href="user.php" class="btn btn-danger">Cancelar</a>
                               
                            </div>
                            </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </form>
</body>
</html>