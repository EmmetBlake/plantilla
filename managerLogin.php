<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="styleManager.css">
	<title>manager</title>
</head>
<body>
<!-- Pagina para el administrador 
Para que se conecte con manger.php -->
	<form action="loginManager.php" method="post">
		<label>Bienvenido Administrador</label><br><br>
		<label>Usuario: </label>
		<input type="text" name="manager"><br><br>
		<label>Contraseña: </label>
		<input type="password" name="pass"><br><br>
		<input type="submit" name="boton"><br>
	</form>
</body>
</html>