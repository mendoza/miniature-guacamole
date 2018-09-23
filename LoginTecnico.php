<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>Login</title>
    <link rel="stylesheet" type="text/css" media="screen" href="styles.css" />
    <?php $page="Login";include("Header.php")?>

</head>

<body>
    <form class="form_login" action="Inicio.php" method="POST">
        <h1>Login de Técnicos</h1>
        <label>DNI</label>
        <input type="text" name="dni" required="required" pattern="[0-9]{13}" placeholder="DNI">
        <label>Contraseña</label>
        <input type="password" name="pass" required="required" pattern=".{8,}" placeholder="Contraseña">
        <input type="submit" name="login" value="Login">
    </form>
</body>

</html>