<?php
include '../config.php';
mysqli_select_db($conexion, 'welcome_app' );
?>
<!DOCTYPE html>
<html lang="en">
    
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/fontawesome-all.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <title>Welcome_app</title>
</head>
<br>
<div class="container is-fluid">
<div class="col-xs-12">
      <br>
		<h1>Registro de contactos</h1>
    <br>
		<div>
    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#create">
				<span class="glyphicon glyphicon-plus"></span> Nuevo usuario  </a></button>
		</div>
		<br>
  <?php
/*$conexion=mysqli_connect("localhost","root","","welcome_app"); 
$where="";

if(isset($_GET['enviar'])){
  $busqueda = $_GET['busqueda'];


	if (isset($_GET['busqueda']))
	{
		$where="WHERE user.correo LIKE'%".$busqueda."%' OR nombre  LIKE'%".$busqueda."%'
    OR telefono  LIKE'%".$busqueda."%'";
	}
  
}*/


?>
           <br>
			</form>
      <div class="container-fluid">
  <form class="d-flex">
      <input class="form-control me-2 light-table-filter" data-table="table_id" type="text" 
      placeholder="Buscar">
      <hr>
      </form>
  </div>
  <br>
      <table class="table table-striped table-dark table_id ">           
                         <thead>    
                         <tr>
                         <th>ID</th>
                        <th>Nombre</th>
                        <th>Apellido</th>
                        <th>Telefono</th>
                        <th>Email</th>
                        <th>Comentarios</th>
                        <th>Imagen</th>
                        <th>Habilitar</th>
                        <th>Acciones</th>
                        </tr>
                        </thead>
                        <tbody>

				<?php

              
$SQL="SELECT id, nombre, apellidos, tel, email, comment, img, habilitar FROM contactos";
$dato = mysqli_query($conexion, $SQL);
$fila;
$table = "";
if($dato -> num_rows >0){
    while($row=mysqli_fetch_array($dato)){
          $table .= '<tr>
                              <td>'.$row["id"].'</td>
                              <td>'.$row["nombre"].'</td>
                              <td>'.$row["apellidos"].'</td>
                              <td>'.$row["tel"].'</td>
                              <td>'.$row["email"].'</td>
                              <td>'.$row["comment"].'</td>
                              <td><img src='.$row["img"].' style="width: 100px; height: auto;" ></td>
                              <td>'.$row["habilitar"].'</td>
                              <td><a class="btn btn-danger" href="eliminar_user.php?id='. $row["id"] .'   "> Borrar</a></td>
                              <td><a class="btn btn-warning" href="editar_user.php?id='. $row["id"] .' ">Update</a></td>
                              <td><a class="btn btn-info" href="modify.php?id='. $row["id"] .' ">Habilitar</a></td>
                         </tr>';
      }
  //$table .= '</table>';
  echo $table;
}else if($dato -> num_rows == 0){
    $table.= '
      <tr class="text-center">
      <td colspan="16">No existen registros</td>
      </tr>';
      $table .= '</table>';
      echo $table;
  }

?>


	</body>
  </table>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.js"></script>
<script src="../js/user.js"></script>
<script src="../js/acciones.js"></script>
<script src="../js/buscador.js"></script>




		<?php include('../index.php'); ?>
</html>