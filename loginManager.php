<?php 
//se conecta con conexion.php
	include ("conexion.php");
	$manager = $_POST["manager"];
	$pass    = $_POST["pass"];
	$c       = new conexion();
	$c->login($manager,$pass);	

 ?>