<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title> Registrar Técnico </title>
  <?php $page='RegistrarTecnico'; include("Header.php");
    $dbconn = pg_connect("host=159.89.34.186 dbname=aeropuerto user=postgres password=papitopiernaslargas69");
    if($dbconn){
        $result = pg_query($dbconn,"SELECT * FROM MODELO");
        foreach (pg_fetch_all($result) as $row) {
            $combobit .="<option value='".$row['no_modelo']."'>".$row['no_modelo']."</option>"; 
        }
    }
    pg_close($dbconn);
  ?>
</head>
<body>
  <form class='form_base' action="./RegistrarTecnico.php" method="post">
    <h1>Registrar Ténico</h1>
    <label>Ingrese DNI</label>
    <input type="text" name="dni" required="required" pattern="[0-9]{13}" placeholder="Numero De Identidad">
    <label>Ingrese Numero De Afiliación</label>
    <input type="text" name="nsindicato" required="required" pattern="[0-9]{10}" placeholder="Numero De Sindicato">
    <label>Ingrese Nombre</label>
    <input type="text" name="nombre" required="required" placeholder="Nombre Completo">
    <label>Ingrese Dirección</label>
    <input type="text" name="direccion" required="required" placeholder="Direccion De Casa">
    <label>Ingrese Telefono</label>
    <input type="text" name="telefono" required="required" pattern="^[+]*[(]{0,1}[0-9]{1,4}[)]{0,1}[-\s\./0-9]*$" placeholder="Numero De Telefono">
    <label>Ingrese Sueldo</label>
    <input type="text" name="sueldo" required="required" pattern="\d{4,}" placeholder="Sueldo En Lempiras">
    <label>Modelo</label>
    <select name="modelo" placeholder="prueba">
    <?php echo($combobit);?>
    </select>
    <label>Maestria</label>
    <input type="text" name="maestria" required="required" placeholder="Maestria">
    <label>Contraseña</label>
    <input type="password" name="pass" required="required" pattern=".{8,}" placeholder="Contraseña">
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