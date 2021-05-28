<?php
session_start();
		$ruta=$_SESSION['ruta'];
				echo "<h1>Archivo Guardado .$ruta.</h1>";
				$nuevo=fopen($ruta,"r") or die("No se puede Acceder al archivo");
				echo "<input type='text' name='texto' id='texto'>";
				echo"<table border='1'>";
				while (!feof($nuevo)) {
					$datos=explode(",", fgets($nuevo));
					echo "<tr><td>$datos[0]</td><td>$datos[1]</td></tr>";//fila por fila fgets
				}
				echo "</table>";
				fclose($nuevo);
				
?>