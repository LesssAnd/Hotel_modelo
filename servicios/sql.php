<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css" type="text/css" />
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.2/css/dataTables.bootstrap5.min.css" type="text/css" />
<link rel="stylesheet" href="https://code.jquery.com/jquery-3.5.1.js" type="text/javascript" />
<link rel="stylesheet" href="https://code.jquery.com/jquery-3.5.1.js" type="javascript" />
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.2/js/dataTables.bootstrap5.min.js" type="javascript" />
<?php include '/../conexion.php'; ?>

<?php

mysql_select_db( 'welcome_app', $link);
$sql = 'SELECT * FROM contactos';
$resultado = mysql_query($sql, $link);


//show datatable


if(mysql_num_rows($resultado) > 0){
  $table = '
   <table border=1>
                    <tr>

                         <th>Nombre </th>
                         <th>Apellido </th>
                         <th>Teléfono </th>
                         <th>Email </th>
                         <th>Comment</th>
                         <th>IMG</th>
                         <th>Accion</th>

                    </tr>
  ';
  while($row = mysql_fetch_array($resultado )) {
    $table .= '<tr>
                       
                         <td>'.$row["nombre"].'</td>
                         <td>'.$row["apellidos"].'</td>
                         <td>'.$row["tel"].'</td>
                         <td>'.$row["email"].'</td>
                         <td>'.$row["comment"].'</td>
                         <td>'.$row["img"].'</td>
                         <td><a href=sql.php=?$idaction=delete>delete</td>
                    </tr>';
  }
  $table .= '</table>';

  echo $table;

 }

?>

<script type= "text/javascript">
$(document).ready(function () {
    
    $(<?=$table?>).DataTable();
});
</script>