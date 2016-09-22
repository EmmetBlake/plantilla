<?php
session_start();
session_destroy();
  ?> 
<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">		
	<script type="text/javascript" src="Jquery/jquery-1.6.3.min.js"></script>
	<script type="text/javascript" src="fancybox/jquery.fancybox-1.3.4.min.js"></script>
	<link rel="stylesheet" href="fancybox/jquery.fancybox-1.3.4.css" type="text/css" >
	<link rel="stylesheet" type="text/css" href="style.css">
	<script type="text/javascript" src="javascript.js"></script>
	<title>Fotos quique</title>
</head>

<body>
<header>
	<div class="imagenCabecera"><img src="imagenes/Jellyfish.jpg"></div>
	<nav>
		<ul>
			<a href="index.php"><li>Inicio</li></a>
			<a href="galeria.php"><li>Galeria</li></a>
			<a href=""><li>Mision</li></a>
			<a href="contacto.php"><li>Contacto</li></a>
			<a href=""><li>Algo</li></a>
		</ul>
	</nav>
</header>