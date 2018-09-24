<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Editar Mis Datos</title>
    <?php $page='ModificarPerfil'; Include("Header.php");
    $dbconn = pg_connect("host=159.89.34.186 dbname=aeropuerto user=postgres password=papitopiernaslargas69");
    if($dbconn){
        $result = pg_query_params($dbconn,"SELECT NO_MODELO FROM MODELO WHERE NO_MODELO NOT IN(SELECT NO_MODELO FROM MODELO NATURAL JOIN EXPERTO WHERE DNI=$1)", array($_SESSION['dni']));
        foreach (pg_fetch_all($result) as $row) {
            $combobit .="<option value='".$row['no_modelo']."'>".$row['no_modelo']."</option>"; 
        }
        if(isset($_POST['tecnico'])){
            pg_query_params($dbconn,"SELECT updatetecnico($1,$2,$3,$4,$5,$6,$7,$8)",array($_SESSION['dni'],$_REQUEST['nsindicato'],$_REQUEST['nombre'],$_REQUEST['direccion'],$_REQUEST['telefono'],$_REQUEST['sueldo'],$_REQUEST['modelo'],$_REQUEST['maestria']));
            echo("<script>alert('Su Perfil Fue Modificado!');</script>");
        }
        
        pg_close($dbconn);
    }
    ?>
</head>
<body>
  <form class='form_base' action="./ModificarPerfil.php" method="post">
    <h1>Editar Mis Datos</h1>
    <label>Ingrese Numero De Afiliación</label>
    <input type="text" name="nsindicato" required="required" pattern="[0-9]{10}" placeholder="Numero De Sindicato" value="<?php echo($result['nsindicato']);?>">
    <label>Ingrese Nombre</label> 
    <input type="text" name="nombre" required="required" placeholder="Nombre Completo" value="<?php echo($result['nombre']);?>">
    <label>Ingrese Dirección</label>
    <input type="text" name="direccion" required="required" placeholder="Direccion De Casa" value="<?php echo($result['direccion']);?>">
    <label>Ingrese Telefono</label>
    <input type="text" name="telefono" required="required" pattern="^[+]*[(]{0,1}[0-9]{1,4}[)]{0,1}[-\s\./0-9]*$" placeholder="Numero De Telefono" value="<?php echo($result['telefono']);?>">
    <label>Ingrese Sueldo</label>
    <input type="text" name="sueldo" required="required" pattern="\d{4,}" placeholder="Sueldo En Lempiras" value="<?php echo($result['sueldo']);?>">
    <label>Agregar Modelo</label>
    <select name="modelo" placeholder="prueba"> 
        <?php echo($combobit);?>
    </select>
    <label>Maestria</label>
    <input type="text" name="maestria" required="required" placeholder="Maestria">
    <input type="submit" name="tecnico" value="Modificar">
  </form>
    
</body>
</html>