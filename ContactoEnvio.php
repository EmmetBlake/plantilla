<?php
/**
* 
*/
include ("conexion.php");

class EnviaContacto {
	var $comentario;
	var $conexion;

	function EnviaContacto()
	{
		$nombre=$_POST["nombre"];
		$mail=$_POST["mail"];
		$con=$_POST["aContacto"];
		
		$conexion = new conexion();
		$conexion->contacto($nombre,$mail,$con);
	}
	

}

$prueba = new EnviaContacto();

     
	 
?>