<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>Realizar Prueba</title>
  <?php session_start();$page='RealizarPrueba'; include("Header.php")?>
</head>

<body>
  <form class="form_base" action="/RealizarPrueba.php" method="post">
    <h1>Realizar Prueba</h1>
    <label>Ingrese Nombre O Codigo Del Tecnico</label>
    <input type="text" name="value" placeholder="Busqueda">
    <input type="submit" name="tecnico" value="Submit">
  </form>
  <?php
      $dbconn = pg_connect("host=159.89.34.186 user=postgres dbname=aeropuerto password=papitopiernaslargas69");
      if ($dbconn) {
        if (isset($_POST['tecnico'])) {
          $result = pg_query_params($dbconn,"SELECT * FROM TECNICO NATURAL JOIN EMPLEADO WHERE DNI=$1 OR NOMBRE=$1",array($_REQUEST['value']));
          $valor = pg_fetch_all($result)[0];
        }
        pg_close($dbconn);
      }
    ?>
    <?php if ($valor):?>
    <div>
      <form class="form_base" method="POST">
        <h1>Informacion Sobre Prueba</h1>
        <label>Nombre</label>
        <input type="text" required="required" name="nombre">
        <label>Puntuacion</label>
        <input type="number" required="required" name="puntuacion">
        <label>Fecha Del Examen</label> 
        <input type='date' required="required" name="fecha">
        <label>Duracion De Examen</label>
        <input type="number" required="required" name="horas">
        <label>Calificacion</label>
        <input type="number" required="required" name="calificacion">
        <input type="submit" name="prueba"value="Realizar">
      </form>
      </div>
    <?php else:  ?>
    <?php endif?>
</body>

</html>