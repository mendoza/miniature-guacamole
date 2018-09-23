<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>Login</title>
    <?php session_start();
    $page="Login";include("Header.php");
        if(isset($_POST['dni']) && isset($_POST['pass'])){
            $dni = $_POST['dni'];
            $pass = $_POST['pass'];
            $_SESSION['pass'] = $pass;
            $_SESSION['dni'] = $dni;
            echo("<script>window.location.href = ('./Inicio.php')</script>");

        }
    ?>

</head>

<body>
    <form class="form_login" action="LoginTecnico.php" method="POST">
        <h1>Login de Técnicos</h1>
        <label>DNI</label>
        <input type="text" name="dni" required="required" pattern="[0-9]{13}" placeholder="DNI">
        <label>Contraseña</label>
        <input type="password" name="pass" required="required" pattern=".{8,}" placeholder="Contraseña">
        <input type="submit" name="login" value="Login">
    </form>
</body>

</html>