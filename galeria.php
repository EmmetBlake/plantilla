<?php
//Incluye desde el principio hasta el final de header incluyendo barra de navegacion
include("head.php");
//incluye los enlaces a fb etc..
include("sociales.php");
?>
<!-- seccion de galeria en miniaturas -->
<div class="galeria">
	<h3>Galeria de imagenes</h3>
	<ul>
		<li><a href="imagenes/carro1.jpg" rel="galeria" class="algo" title="primera imagen"><img src="imagenes/carro1.jpg"></a></li>
		<li><a href="imagenes/carro2.jpg" rel="galeria" class="algo" title="segunda imagen"><img src="imagenes/carro2.jpg"></a></li>
		<li><a href="imagenes/carro3.jpg" rel="galeria" class="algo" title="tercera imagen"><img src="imagenes/carro3.jpg"></a></li>
		<li><a href="imagenes/carro1.jpg" rel="galeria" class="algo" title="cuarta y quinta imagen"><img src="imagenes/carro1.jpg"></a></li>
		<li><a href="imagenes/carro2.jpg" rel="galeria" class="algo" title="cuarta y quinta imagen"><img src="imagenes/carro2.jpg"></a></li>
	</ul>
</div>

<!-- seccion de imagenes y comentarios -->
<div class="imagenes">
	<div><img src="imagenes/pinguino.jpg">
	<h3>Imagen de pinguinos</h3></div>
	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,</p>
	<form action="ComentariosGaleria.php" method="post">
		<label>Dejanos tu comentario</label> <br>
		
		<textarea rows="4" cols="50" name="comentario"> </textarea><br>
		<input type="submit" name="boton1" value="Gracias" class="boton" onclick="galeria();">
	</form>

	<!-- funcion que da gracias -->
	<script type="text/javascript"> 
	function galeria() {
		alert("Gracias por tu comentario");
	}
	</script>
	<?php
		include("VistaComentarios.php");
	?>
</div>

<?php
//incluye desde la etiqueta footer hasta el cierre del html
include ("footer.php");
?>

