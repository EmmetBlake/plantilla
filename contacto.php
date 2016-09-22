<?php
//Incluye desde el principio hasta el final de header incluyendo barra de navegacion
include("head.php");
//incluye los enlaces a fb etc..
include("sociales.php");
?>

<div class="contacto">
<p>Ponte en contacto con nosotros deja tus datos en el formulario y nos pondremos en contacto a la brevedad</p>

<form action="ContactoEnvio.php" method="post">
	<label>Nombre: </label>
	<input type="text" name="nombre"><br>
	<label>Correo Electronico: </label>
	<input type="text" name="mail"><br>
	<label>Compartenos tus dudas y nos pondremos en contacto contigo a la brevedad</label><br>
	<textarea rows="10" cols="60" name="aContacto"></textarea><br>
	<input type="submit" name="" id="send" value="Ten un buen dia" onclick="contacto();">

</form>
</div>
<!-- funcion que da gracias -->
<script type="text/javascript"> 
		function contacto() {
		alert("Gracias nos pondremos en contacto");
	}
	</script>
<?php

//incluye desde la etiqueta footer hasta el cierre del html
include ("footer.php");
?>


