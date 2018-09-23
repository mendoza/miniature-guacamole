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
        <input type="text" name="dni" required="required" pattern="[0-9]{13}" placeholder="Numero De Identidad">
        <label>Ingrese Numero De Afiliación</label>
        <input type="text" name="nsindicato" required="required" pattern="[0-9]{10}" placeholder="Numero De Sindicato">
        <label>Ingrese Nombre</label>
        <input type="text" name="nombre" required="required" placeholder="Nombre Completo">
            <label>Ingrese Fecha De Su Examen Médico Mas Reciente</label>
            <input type="date" name="fechaexamen" required="required" placeholder="Fecha de Examen Médico">
        <input type="submit" name="conaero" value="Registrar">
    </form>
</body>
</html>