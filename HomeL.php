<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form action="./HomeL.php" method="post">
      <input type = "number" min="1" max="100" name="edad" value="2">
      <input type = "submit" name="JOH" value="submit">
    </form>
    <?php
      $dbconn = pg_connect("host=159.89.34.186 dbname=prueba user=postgres password=papitopiernaslargas69");
      if ($dbconn) {
        if (isset($_POST['JOH'])) {
          $return = pg_fetch_all(pg_query_params($dbconn, "SELECT * FROM PIPOL WHERE EDAD < $1"));
        }
        echo("<ul>");
        foreach ($return as $p) {
          $id = $p['id'];
          echo "<li >$id</li>";
        }
        echo("</ul>");
      }
    ?>
  </body>
</html>
