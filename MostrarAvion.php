<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Aviones Estacionados</title>
    <?php $page="MostrarAvion"; Include("Header.php");
    ?>
</head>
<body>
    <h1>Aviones Estacionados</h1>
    <?php
		$dbconn = pg_connect("host=159.89.34.186 dbname=aeropuerto user=postgres password=papitopiernaslargas69");
		if($dbconn){
			echo("<table class='tablita' align='center'>");
            echo("<tr>");
			echo("<th>No. Registro</th>");            
			echo("<th>No. Modelo</th>");
			echo("</tr>");
			$result = pg_query($dbconn,"SELECT * FROM Avion");
			$rows = pg_fetch_all($result);
			for ($i=0; $i < count($rows); $i++) {
				echo("<tr>");
				echo "<td>".$rows[$i]['no_registro']."</td>";
				echo "<td>".$rows[$i]['no_modelo']."</td>";
				echo("</tr>");
			}
			echo("</table>");
		}
		pg_close($dbconn);
		?>
</body>
</html>