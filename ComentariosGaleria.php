<?php
/**
* 
*/
include ("conexion.php");

class EnviaComentario {
	var $comentario;
	var $conexion;

	function EnviaComentario()
	{
		$comentario=$_POST["comentario"];
		
		$conexion = new conexion();
		$conexion->comentario($comentario);
		
	}
	

}

$prueba = new EnviaComentario();

     
	 
?>