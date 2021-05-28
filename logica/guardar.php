<?php
include 'conexion.php';
session_start();
		$ruta=$_SESSION['ruta'];

				echo "<h1>Datos Guardados</h1>";
				$nuevo=fopen($ruta,"r") or die("No se puede Acceder al archivo");
				while (!feof($nuevo)) {
					$datos=explode(",", fgets($nuevo));
					$mysqli->query(
					"insert into usuarios values (0,'$datos[0]','$datos[1]');"
					);
				}
				fclose($nuevo);
				
?>