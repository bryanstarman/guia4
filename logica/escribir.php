<?php
session_start();
		$ruta=$_SESSION['ruta'];
		$cambio=$_GET['cambio'];
				echo "<h1>Datos Ingresados $cambio</h1>";
				$nuevo2=fopen($ruta,"a+") or die("No se puede Acceder al archivo");
				fputs($nuevo2,",\n$cambio");
				fclose($nuevo2);
				$nuevo=fopen($ruta,"r") or die("No se puede Acceder al archivo");
				echo "<input type='text' name='texto' id='texto'>";
				echo"<table border='1'>";
				while (!feof($nuevo)) {
					$datos=explode(",", fgets($nuevo));
					echo "<tr><td>$datos[0]</td><td>$datos[1]</td><td>$datos[2]</td></tr>";//fila por fila fgets
				}
				echo "</table>";
				fclose($nuevo);
				
?>