<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Editar Mis Datos</title>
    <?php $page='ModificarPerfil'; Include("Header.php")?>
</head>
<body>
  <form class='form_base' action="./ModificarPerfil.php" method="post">
    <h1>Editar Mis Datos</h1>
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
    
</body>
</html>