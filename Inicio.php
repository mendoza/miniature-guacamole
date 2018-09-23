<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Inicio</title>
    <?php
      $page="Inicio";
      include("Header.php");
      if(!isset($_SESSION['dni']) && !isset($_SESSION['pass'])){
        echo("<script>window.location.href = ('./Login.php')</script>");
      }
    ?>
  </head>
  <body>
  </body>
</html>
