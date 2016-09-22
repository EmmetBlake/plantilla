<?php
/**
* 
*/
include ("conexion.php");

class VistaComentarios {
	
	var $conexion;

	function VistaComentarios()
	{
		
		$conexion = new conexion();
		$conexion->comentarioVista();
		
		
	}
	

}

$prueba = new VistaComentarios();

     
	 
?>