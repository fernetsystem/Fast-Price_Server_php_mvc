<?php 

class Conectar
{
	public static function conexion(){
	$conexion = new mysqli("localhost","u858464654_fer","w9w9dorotea","u858464654_bdrem");
	$conexion->query("SET NAMES 'utf8'");
		return $conexion;
	}
	
}

 ?>