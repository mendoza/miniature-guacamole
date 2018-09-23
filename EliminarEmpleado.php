<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Eliminar Empleado</title>
    <?php $page='EliminarEmpleado'; Include('Header.php');?>
</head>
<body>
    <h1>¿Cual Empleado Quiere Eliminar?</h1>
    <?php
          echo("<label>".$_REQUEST['value']."</label> <br><br>");
          $dbconn = pg_connect("host=159.89.34.186 dbname=aeropuerto user=postgres password=papitopiernaslargas69");
            if($dbconn){
              $result = pg_query($dbconn,"SELECT * FROM Empleado");
              foreach (pg_fetch_all($result) as $row) {
                $combobit .="<option value='".$row['dni']."'>".$row['dni']."</option>"; 
              }
            }
            pg_close($dbconn);
    ?>
    <select name = 'eliminar'>
        <?php echo($combobit)?>
    </select>
    <input type="submit", name="eliminarE", value="Eliminar">
</body>
</html>