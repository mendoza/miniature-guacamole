<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Eliminar Empleado</title>
    <?php $page='EliminarModelo'; Include('Header.php');?>
  </head>
  <body>
    <h1>¿Cual Modelo Quiere Eliminar?</h1>
    <?php
      echo("<label>".$_REQUEST['value']."</label> <br><br>");
      $dbconn = pg_connect("host=159.89.34.186 dbname=aeropuerto user=postgres password=papitopiernaslargas69");
        if($dbconn){
            $result = pg_query($dbconn,"SELECT * FROM Modelo");
            foreach (pg_fetch_all($result) as $row) {
                $combobit .="<option value='".$row['no_modelo']."'>".$row['no_modelo']."</option>"; 
            }
          pg_close($dbconn);
        }
        if(isset($_POST['eliminarM'])){
            pg_query_params($dbconn,"SELECT deletemodelo($1)",array($_REQUEST['eliminar']));
            echo("<script>aler('Modelo Eliminado!');</script>");
        }
      ?>
    <select name = 'eliminar'>
    <?php echo($combobit)?>
    </select>
    <input type="submit", name="eliminarM", value="Eliminar">
  </body>
</html>

