<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>Realizar Prueba</title>
  <?php $page='RealizarPrueba'; include("Header.php")?>
</head>

<body>
    <form class="form_base" method="POST">
      <h1>Informacion Sobre Prueba</h1>
      <?php
        $dbconn = pg_connect("host=159.89.34.186 dbname=aeropuerto user=postgres password=papitopiernaslargas69");
          if($dbconn){
            $result = pg_query($dbconn,"SELECT * FROM AVION");
            foreach (pg_fetch_all($result) as $row) {
              $combobit .="<option value='".$row['no_registro']."'>".$row['no_registro']."</option>"; 
            }
            if ($_POST['prueba']){
              pg_query_params($dbconn,"SELECT addprueba($1,$2,$3,$4,$5,$6,$7,$8)",array($_REQUEST['numero'],$_REQUEST['avion'],$_SESSION['dni'],$_REQUEST['nombre'],$_REQUEST['puntuacion'],$_REQUEST['fecha'],$_REQUEST['horas'],$_REQUEST['calificacion']));
              echo("<script>alert('Prueba Creada!');</script>");
            }
          }
          pg_close($dbconn);
      ?>
      <label>Numero De Prueba</label>
      <input type="number" required="required" name="numero">
      <label>No. Registro De Avion</label>
      <select name='avion'>
        <?php echo($combobit)?>
      </select>
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
</body>

</html>