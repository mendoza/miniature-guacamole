<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Modificar Controlador Aéreo</title>
    <?php $page='ModificarConaero'; Include("Header.php");
        $dbconn = pg_connect("host=159.89.34.186 dbname=aeropuerto user=postgres password=papitopiernaslargas69");
        if($dbconn){
            $result = pg_query($dbconn,"SELECT dni FROM Conaero");
            foreach (pg_fetch_all($result) as $row) {
                $combobit .="<option value='".$row['dni']."'>".$row['dni']."</option>"; 
            }
            if (isset($_POST['conaero'])){
                pg_query_params($dbconn,"SELECT updateconaero($1,$2,$3,$4)",array($_REQUEST['dni'],$_REQUEST['fechaexamen'],$_REQUEST['nsindicato'],$_REQUEST['nombre']));
                echo("<script>alert('Controlador Aereo Modificado!');</script>");
            }
            pg_close($dbconn);
        }
    ?>
</head>
<body>
    <form class="form_base" action="ModificarConaero.php" method="POST">
        <h1>Modificar Controlador Aéreo</h1>
        <label>DNI</label>
        <select name="dni" placeholder="prueba"> 
            <?php echo($combobit);?>
        </select>
        <label>Nuevo Numero De Afiliación</label>
        <input type="text" name="nsindicato" required="required" pattern="[0-9]{10}" placeholder="Numero De Sindicato">
        <label>Nuevo Nombre</label>
        <input type="text" name="nombre" required="required" placeholder="Nombre Completo">
        <label>Ingrese Fecha De Su Examen Médico Mas Reciente</label>
        <input type="date" name="fechaexamen" required="required" placeholder="Fecha de Examen Médico">
        <input type="submit" name="conaero" value="Modificar">
    </form>
</body>
</html>