<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Eliminar Empleado</title>
    <?php $page='EliminarAvion'; Include('Header.php');?>
</head>
<body>
    <h1>Cual Avion Quiere Eliminar?</h1>
    <?php
          echo("<label>".$_REQUEST['value']."</label> <br><br>");
          $dbconn = pg_connect("host=159.89.34.186 dbname=aeropuerto user=postgres password=papitopiernaslargas69");
            if($dbconn){
              $result = pg_query($dbconn,"SELECT * FROM Avion");
              foreach (pg_fetch_all($result) as $row) {
                $combobit .="<option value='".$row['no_registro']."'>".$row['no_registro']."</option>"; 
              }
            }
            pg_close($dbconn);
    ?>
    <select name = 'eliminar'>
        <?php echo($combobit)?>
    </select>
    <input type="submit", name="eliminarA", value="Eliminar">
</body>
</html>