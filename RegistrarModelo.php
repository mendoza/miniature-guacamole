<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Registrar Modelo</title>
    <?php
    $page="RegistrarModelo"; include("Header.php");
    $dbconn = pg_connect("host=159.89.34.186 dbname=aeropuerto user=postgres password=papitopiernaslargas69");
    if($dbconn){
        if(isset($_POST['modelo'])){
            pg_query_params($dbconn,"SELECT addmodelo($1,$2,$3)",array($_REQUEST['num'],$_REQUEST['capacidad'],$_REQUEST['peso']));
            echo("<script>alert('Modelo Creado!');</script>");
        }
    }
    ?>
</head>
<body>
    <form class="form_base" action="RegistrarModelo.php" method="POST">
        <h1>Registrar Modelo De Aviones</h1>
        <label>Número De Modelo</label>
        <input type="text" name="num" required="required" pattern="[0-9].{0,}" placeholder="Número De Modelo">
        <label>Capacidad</label>
        <input type="text" name="capacidad" required="required" pattern="[0-9].{0,}" placeholder="Capacidad">
        <label>Peso</label>
        <input type="text" name="peso" required="required" pattern="[0-9].{0,}" placeholder="Peso">
        <input type="submit" name="modelo" value="Registrar">
</form>
</body>
</html>