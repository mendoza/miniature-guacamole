<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Modelos Existentes</title>
    <?php session_start(); $page="MostrarPrueba"; Include("Header.php");?>
</head>
<body>
    <h1>Condiciones De Aviones</h1>
    <?php
		$dbconn = pg_connect("host=159.89.34.186 dbname=aeropuerto user=postgres password=papitopiernaslargas69");
		if($dbconn){
			echo("<table class='tablita' align='center'>");
            echo("<tr>");
            echo("<th>No. Prueba</th>");
            echo("<th>No. Registro</th>"); //Avion
			echo("<th>DNI</th>"); //Tecnico
			echo("<th>Nombre</th>");
            echo("<th>Puntuación Máxima</th>");
            echo("<th>Fecha</th>");
            echo("<th>Horas</th>");
            echo("<th>Calificación</th>");
			echo("</tr>");
			$result = pg_query_params($dbconn,"SELECT * FROM experto NATURAL JOIN prueba WHERE no_modelo = (SELECT no_modelo FROM experto WHERE DNI = $1)", array($_SESSION['dni']));
			$rows = pg_fetch_all($result);
			for ($i=0; $i < count($rows); $i++) {
				echo("<tr>");
				echo "<td>".$rows[$i]['no_examen']."</td>";
				echo "<td>".$rows[$i]['no_registro']."</td>";
                echo "<td>".$rows[$i]['dni']."</td>";
				echo "<td>".$rows[$i]['nombre']."</td>";
                echo "<td>".$rows[$i]['puntuacionmax']."</td>";				
				echo "<td>".$rows[$i]['fecha']."</td>";
                echo "<td>".$rows[$i]['horas']."</td>";
                echo "<td>".$rows[$i]['puntuacion']."</td>";
				echo("</tr>");
			}
			echo("</table>");
		}
		pg_close($dbconn);
		?>
</body>
</html>