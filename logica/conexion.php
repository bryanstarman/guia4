<?php
	$mysqli = new mysqli("localhost","root","","login2021");
	if (mysqli_connect_errno()) {
		echo "No se puede conectar 🚫";
	}
?>