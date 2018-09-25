<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <?php $page='ModificarModelo'; Include("Header.php");
        $dbconn = pg_connect("host=159.89.34.186 dbname=aeropuerto user=postgres password=papitopiernaslargas69");
        if($dbconn){
            $result = pg_query($dbconn,"SELECT NO_MODELO FROM MODELO");
            foreach (pg_fetch_all($result) as $row) {
                $combobit .="<option value='".$row['no_modelo']."'>".$row['no_modelo']."</option>"; 
            }
            if(isset($_POST['modelo'])){
                pg_query_params($dbconn,"SELECT updatemodelo($1,$2,$3)",array($_REQUEST['nomodelo'],$_REQUEST['capacidad'],$_REQUEST['peso']));
                echo("<script>alert('Modelo Modificado');</script>;");
            }
            pg_close($dbconn);
        }
    ?>
    <title>Modificar Modelo</title>
</head>
<body>
    <form class="form_base" action="ModificarModelo.php" method="POST">
        <h1>Modificar Modelo de Aviones</h1>
        <label>Número De Modelo</label>
        <select name="nomodelo" placeholder="prueba"> 
            <?php echo($combobit);?>
        </select>
        <label>Nueva Capacidad</label>
        <input type="text" name="capacidad" required="required" pattern="[0-9].{0,}" placeholder="Capacidad">
        <label>Nuevo Peso</label>
        <input type="text" name="peso" required="required" pattern="[0-9].{0,}" placeholder="Peso">
        <input type="submit" name="modelo" value="Registrar">
    </form>   
</body>
</html>