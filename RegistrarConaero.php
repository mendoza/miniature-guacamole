<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Registrar Controlador Aéreo</title>
    <?php
    $page="RegistrarConaero"; include("Header.php");
    ?>
</head>
<body>
    <form class="form_base" action="RegistrarConaero.php" method="POST">
        <h1>Registrar Controlador Aéreo</h1>
        <label>Ingrese DNI</label>
        <input type="text" name="dni" placeholder="Numero De Identidad">
        <label>Ingrese Numero De Afiliación</label>
        <input type="text" name="nsindicato" placeholder="Numero De Sindicato">
        <label>Ingrese Nombre</label>
        <input type="text" name="nombre" placeholder="Nombre Completo">
        <div>
            <label>Ingrese Fecha De Su Examen Médico Mas Reciente</label>
            <input type="date" name="fechaexamen" placeholder="Fecha de Examen Médico">
        </div>
        <input type="submit" name="conaero" value="Registrar">
    <?php
        $dbconn = pg_connect("host=159.89.34.186 user=postgres dbname=aeropuerto password=papitopiernaslargas69");
        if($dbconn){
          if (isset($_POST['tecnico'])) {
            $insertemp = pg_query_params($dbconn,"INSERT INTO EMPLEADO VALUES($1,$2)",array($_REQUEST['dni'],$_REQUEST['nsindicato']));
            if($insertemp){
              $insertcon = pg_query_params($dbconn,"INSERT INTO CONAERO VALUES($1,$2)",array($_REQUEST['dni'],$_REQUEST['fechaexamen']));
            }
          }
        }
        pg_close($dbconn);
    ?>
    
</body>
</html>