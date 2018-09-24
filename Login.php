<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <title>Login</title>
    <?php 
      $page="Login";
      include("Header.php");
      if(isset($_POST['login'])){
          $dbconn = pg_connect("host=159.89.34.186 dbname=aeropuerto user=postgres password=papitopiernaslargas69");
          if ($dbconn){
              $dni = $_REQUEST['dni'];
              $pass = sha1($_REQUEST['pass']);
              $val = pg_query_params($dbconn,"SELECT dni,password FROM TECNICO WHERE DNI=$1 AND PASSWORD=$2",array($dni,$pass));
              $result = pg_fetch_all($val)[0];
              if($result && $result['dni'] == $dni && $result['password'] == $pass){
                  echo("<script>window.location.href = ('./Inicio.php')</script>");
                  $_SESSION['pass'] = $pass;
                  $_SESSION['dni'] = $dni;
              }else{
                  echo ("<script>alert('No se ha encontrado en la base de datos, O tuvo un error.');</script>");
              }
              pg_close();
          }
      }
      ?>
  </head>
  <body>
    <form class="form_login" action="Login.php" method="POST">
      <h1>Login</h1>
      <label>DNI</label>
      <input type="text" name="dni" required="required" pattern="[0-9]{13}" placeholder="DNI">
      <label>Contraseña</label>
      <input type="password" name="pass" required="required" pattern=".{8,}" placeholder="Contraseña">
      <input type="submit" name="login" value="Login">
    </form>
  </body>
</html>

