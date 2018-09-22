<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title> Registrar Técnico </title>
  <?php $page='RegistrarTecnico'; include("Header.php");?>
</head>
<body>
  <form class='form_base' action="./RegistrarTecnico.php" method="post">
    <h1>Registrar Ténico</h1>
    <label>Ingrese DNI</label>
    <input type="text" name="dni" placeholder="Numero De Identidad">
    <label>Ingrese Numero De Afiliación</label>
    <input type="text" name="nsindicato" placeholder="Numero De Sindicato">
    <label>Ingrese Nombre</label>
    <input type="text" name="nombre" placeholder="Nombre Completo">
    <label>Ingrese Dirección</label>
    <input type="text" name="direccion" placeholder="Direccion De Casa">
    <label>Ingrese Telefono</label>
    <input type="text" name="telefono" placeholder="Numero De Telefono">
    <label>Ingrese Sueldo</label>
    <input type="text" name="sueldo" placeholder="Sueldo En Lempiras">
    <label>Contraseña</label>
    <input type="password" name="pass" placeholder="Contraseña">
    <input type="submit" name="tecnico" value="Registrar">
  </form>
  <?php
      $dbconn = pg_connect("host=159.89.34.186 user=postgres dbname=aeropuerto password=papitopiernaslargas69");
      if($dbconn){
        if (isset($_POST['tecnico'])) {
          $insertemp = pg_query_params($dbconn,"INSERT INTO EMPLEADO VALUES($1,$2)",array($_REQUEST['dni'],$_REQUEST['nsindicato']));
          if($insertemp){
            $inserttec = pg_query_params($dbconn,"INSERT INTO TECNICO VALUES($1,$2,$3,$4,$5)",array($_REQUEST['dni'],$_REQUEST['nombre'],$_REQUEST['direccion'],$_REQUEST['telefono'],$_REQUEST['sueldo']));
          }
        }
      }
      pg_close($dbconn);
    ?>
</body>

</html>