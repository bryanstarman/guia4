<?php
session_start();
$nombre=$_FILES['file']['name'];
$ruta="../archivos/".$nombre;
if (move_uploaded_file($_FILES['file']['tmp_name'], $ruta)) {
	echo "<h1>Archivo Guardado .$ruta.</h1>";
	$_SESSION['ruta']=$ruta;
				$nuevo=fopen($ruta,"r") or die("No se puede Acceder al archivo");
				echo"<table border='1'>";
				while (!feof($nuevo)) {
					$datos=explode(",", fgets($nuevo));
					echo "<tr><td>$datos[0]</td><td>$datos[1]</tr>";//fila por fila fgets
				}
				echo "</table>";
				fclose($nuevo);
			}
			else{
				echo "<h1> Error al subir el archivo</h1>";
	}
?>