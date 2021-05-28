<?php
session_start();
$nombre=$_SESSION['nombre'];
if (!isset($nombre)) {
    header("location:index.php");
}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
<h1>Bienvenido Usuario <?php echo $_SESSION["nombre"]; ?></h1>
<a href="salir.php"><input type="button" id="Salir" value="Salir" class="btn btn-dark"></a>
</body>
</html>
<style type="text/css">
	body{
		background-image: url("https://i.pinimg.com/originals/79/e9/5c/79e95c8256709dfc0a88c44c7eb0b4fb.jpg");
		color: white;
	}
</style>