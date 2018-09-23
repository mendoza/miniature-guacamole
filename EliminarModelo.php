<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Eliminar Modelo</title>
    <?php $page='EliminarModelo'; Include('Header.php');?>
  </head>
  <body>
    <?php
      $dbconn = pg_connect("host=159.89.34.186 dbname=aeropuerto user=postgres password=papitopiernaslargas69");
        if($dbconn){
          $result = pg_query($dbconn,"SELECT * FROM Modelo");
          foreach (pg_fetch_all($result) as $row) {
              $combobit .="<option value='".$row['no_modelo']."'>".$row['no_modelo']."</option>"; 
          }
          if(isset($_POST['eliminarM'])){
            pg_query_params($dbconn,"SELECT deletemodelo($1)",array($_REQUEST['eliminar']));
            echo("<script>aler('Modelo Eliminado!');</script>");
          }
          pg_close($dbconn);
        }

      ?>
      <form class="form_base" method="POST">
        <h1>¿Cual Modelo Quiere Eliminar?</h1>
        <select name = 'eliminar'>
          <?php echo($combobit)?>
        </select>
        <input type="submit", name="eliminarM", value="Eliminar">
      </form>
  </body>
</html>

