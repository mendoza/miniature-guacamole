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
    <label>Ingrese nombre o codigo del tecnico</label>
    <input type="text" name="fname" placeholder="Busqueda">
    <input type="submit" name="tecnico" value="Submit">
  </form>
  <?php
      $dbconn = pg_connect("host=159.89.34.186 user=postgres dbname=aeropuerto password=papitopiernaslargas69");
      if ($dbconn) {
        if (isset($_POST['tecnico'])) {
          $result = pg_query_params($dbconn,"SELECT * FROM TECNICO WHERE DNI=$1 OR NOMBRE=$1",array($_REQUEST['fname'])); //cambiar
          $valor = pg_fetch_all($result);
          if (gettype($valor) == "array"){
            echo "<form>";
            echo "Fecha del examen: <input type='date'>";
            echo "</form>";
          }else{
            echo("<script>alert('El tecnico no existe.'); window.location.href = ('./RegistrarTecnico.php')</script>");
            die();
          }
        }
        pg_close($dbconn);
      }
    ?>
</body>

</html>