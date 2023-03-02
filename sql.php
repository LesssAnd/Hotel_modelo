<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css" type="text/css" />
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.2/css/dataTables.bootstrap5.min.css" type="text/css" />
<link rel="stylesheet" href="https://code.jquery.com/jquery-3.5.1.js" type="text/javascript" />
<link rel="stylesheet" href="https://code.jquery.com/jquery-3.5.1.js" type="javascript" />
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.2/js/dataTables.bootstrap5.min.js" type="javascript" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<form method="post" action="insert_db.php">
  <label for="id">Click aqui para agregar datos:</label>
  <button type="submit" name="submit">Agregar</button>
</form>
<?php

include 'conexion.php';



mysqli_select_db($link, 'welcome_app' );
$sql1 = 'SELECT * FROM contactos';
$resultado = mysqli_query($link, $sql1);
if(mysqli_num_rows($resultado) > 0){
  $table = '
   <table border=1>
                    <tr>
                         <th>ID </th>
                         <th>Nombre </th>
                         <th>Apellido </th>
                         <th>Teléfono </th>
                         <th>Email </th>
                         <th>Comment</th>
                         <th>IMG</th>
                         <th>Status</th>
                         <th>Accion</th>

                         <th>   </th>

                    </tr>
  ';
  while($row = mysqli_fetch_array($resultado )) {
    $table .= '<tr>
                         <td>'.$row["id"].'</td>
                         <td>'.$row["nombre"].'</td>
                         <td>'.$row["apellidos"].'</td>
                         <td>'.$row["tel"].'</td>
                         <td>'.$row["email"].'</td>
                         <td>'.$row["comment"].'</td>
                         <td>'.$row["img"].'</td>
                         <td>'.$row["habilitar"].'</td>
                         <td><a href="delete.php?id='. $row["id"] .'   "> Borrar</a></td>
                         <td><a href="modify.php?id='. $row["id"] .' ">Modificar</a></td>
                    </tr>';
  }
  $table .= '</table>';
  echo $table;
  echo 'Edita algún registro';
 }
?>
<script type= "text/javascript">
$(document).ready(function () {
    
    $(<?=$table?>).DataTable();
});</script>



<form method="post" action="alter.php">
  <label for="id">ID:</label>
  <input type="text" id="id" name="id">
  <button type="submit" name="submit">Comprobar ID</button>
</form>


