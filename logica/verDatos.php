<?php
	require_once "conexion.php";
	$res=$mysqli->query("Select * from usuarios");
	if ($res->num_rows>0) {
		while ($row=$res->fetch_assoc()) {
			echo "ID: ".$row['id']." Usuario: ".$row['usuario']." Clave: ".$row['clave']."<br>";
		};
	}else{
		echo "No se encontraron datos";
	}
?>