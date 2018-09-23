<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Registrar Avion</title>
    <?php $page='RegistrarAvion'; include("Header.php");
    ?>
</head>
<body>
    <?php
        $dbconn = pg_connect("host=159.89.34.186 dbname=aeropuerto user=postgres password=papitopiernaslargas69");
        if($dbconn){
            $result = pg_query($dbconn,"SELECT * FROM MODELO");
            foreach (pg_fetch_all($result) as $row) {
                $combobit .="<option value='".$row['no_modelo']."'>".$row['no_modelo']."</option>"; 
            }
            if (isset($_POST['avion'])){
                pg_query_params($dbconn,"SELECT addavion($1,$2)",array($_REQUEST['numregistro'],$_REQUEST['no_modelo']));
                echo("<script>alert('Avion Creado!');</script>");
            }
        }
        pg_close($dbconn);
    ?>
    <form class="form_base" action="RegistrarAvion.php" method="POST">
        <h1>Registrar Avion</h1>
        <label>Seleccione El Modelo Del Avion</label>
        <select name="no_modelo">
            <?php echo($combobit); 
            ?>
        </select>
        <label>Número De Registro</label>
        <input type="text" name="numregistro" placeholder="Número de Registro">
        <input type="submit" name="avion" value="Registrar">
    </form>
</body>
</html>