<DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form action="./HomeC.php" method="post">
      <input type="number" min="1" max="100" name="edad" value="1">
      <input type="submit" name="JOH" value="submit">
    </form>
    <?php
      for ($i=0; $i < 2; $i++) {
        echo("<h1>Wenas</h1>"); #imprimir en el hmtl
        print_r("asdasdasdsadawdasdas"); #imprimir exactamente
      }
      $dbconnect =  pg_connect("host=159.89.34.186 dbname=prueba user=postgres password=papitopiernaslargas69");
      if($dbconnect){

        $table =  print_r(pg_fetch_all(pg_query($dbconnect,"SELECT * FROM PIPOL")));
        foreach ($table as $p) {
          $s = $p['id'];
          echo "<li>$s</li>";
        }
      }
    ?>
  </body>
</html>
