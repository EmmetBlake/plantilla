<?php  
session_start();
if (!isset($_SESSION["admin"])) {
	header("location:index.php");
}
echo "<h1>Bienvenido: ".$_SESSION["admin"]."</h1>";
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="styleManager.css">
	<title>manager</title>
</head>
<body>
<?php 
	include 'conexion.php';
	$c = new conexion();
	$c->manager();
	//pagina que muestra los resultados de los contactos exclusiva del administrador
 ?>
<a href="index.php">Destruir sesion</a>
</body>
</html>