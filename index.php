<?php
//Incluye desde el principio hasta el final de header incluyendo barra de navegacion
include("head.php");
include("sociales.php");
?>


<!-- Aqui empieza la seccion principal de la pagina abarca desde abajo del nav hasta 
antes del footer y a la izquierda del aside-->

<div class="main">
	
	<div class="seccion1">
	<div class="imagenMain"><img src="imagenes/pinguino.jpg"></div>
	<h2>Bienvenida</h2>
	<div class="textoMain"><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
	consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
	cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
	proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p></div>
	</div>

	<div class="seccion2">
	<div class="imagenMain"><img src="imagenes/pinguino.jpg"></div>
	<h2>Presentacion</h2>
	<div class="textoMain"><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
	consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
	cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
	proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p></div>
	</div>

</div>

<!--Finaliza la seccion principal   -->



<?php
//incluye todo el aside todo su div es el que esta pegado a la derecha y las redes sociales
include("aside.php");
//incluye desde la etiqueta footer hasta el cierre del html
include ("footer.php");
?>



