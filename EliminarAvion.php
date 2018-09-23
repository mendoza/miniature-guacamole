<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Eliminar Avion</title>
    <?php $page='EliminarAvion'; Include('Header.php');?>
  </head>
  <body>
    <?php
      $dbconn = pg_connect("host=159.89.34.186 dbname=aeropuerto user=postgres password=papitopiernaslargas69");
      if($dbconn){
        $result = pg_query($dbconn,"SELECT no_registro FROM Avion");
        foreach (pg_fetch_all($result) as $row) {
            $combobit .="<option value='".$row['no_registro']."'>".$row['no_registro']."</option>"; 
        }
        if(isset($_POST['eliminarA'])){
            echo $_REQUEST['eliminar'];
            pg_query_params($dbconn,"SELECT deleteavion($1)",array($_REQUEST['eliminar']));
            echo("<script>aler('Avion Eliminado!');</script>");
        }
        pg_close($dbconn);
      }
      ?>
      <form class="form_base" method="POST">
        <h1>¿Cual Avion Quiere Eliminar?</h1>
        <select name = 'eliminar'>
          <?php echo($combobit)?>
        </select>
        <input type="submit", name="eliminarA", value="Eliminar">
      </form>
  </body>
</html>

