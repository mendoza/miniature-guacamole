<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Inicio</title>
    <?php 
      session_start();
      $page="Inicio";
      include("Header.php");
      if(!isset($_SESSION['dni']) && !isset($_SESSION['pass'])){
        echo("<script>window.location.href = ('./LoginTecnico.php')</script>");
      }
    ?>
  </head>
  <body>
  </body>
</html>
