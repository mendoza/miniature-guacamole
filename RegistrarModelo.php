<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Registrar Modelo</title>
    <?php
    $page="RegistrarModelo"; include("Header.php");
    ?>
</head>
<body>
    <form class="form_base" action="RegistrarModelo.php" method="POST">
        <h1>Registrar Modelo De Aviones</h1>
        <label>Número De Modelo</label>
        <input type="text" name="num" placeholder="Número De Modelo">
        <label>Capacidad</label>
        <input type="text" name="capacidad" placeholder="Capacidad">
        <label>Peso</label>
        <input type="text" name="peso" placeholder="Peso">
        <input type="submit" name="modelo" value="Registrar">
</form>
</body>
</html>