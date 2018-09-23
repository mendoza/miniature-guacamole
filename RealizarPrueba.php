<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>Realizar Prueba</title>
  <?php session_start();$page='RealizarPrueba'; include("Header.php")?>
</head>

<body>
    <?php if (isset($_SESSION['dni'])):?>
    <div>
      <form class="form_base" method="POST">
        <h1>Informacion Sobre Prueba</h1>
        <?php
          echo("<label>".$_REQUEST['value']."</label> <br><br>");
        ?>
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
        <?php
        $dbconn = pg_connect("host=159.89.34.186 dbname=aeropuerto user=postgres password=papitopiernaslargas69");
          if($dbconn){
             $result = pg_query($dbconn,"SELECT * FROM AVION");
             foreach (pg_fetch_all($result) as $row) {
               $combobit .="<option value='".$row['no_registro']."'>".$row['no_registro']."</option>"; 
             }
          }
          pg_close($dbconn);
        ?>
        <select name='avion'>
          <?php echo($combobit)?>
        </select>
        <input type="submit" name="prueba"value="Realizar">
      </form>
    </div>
    <?php else:  ?>
    <?php endif?>
</body>

</html>