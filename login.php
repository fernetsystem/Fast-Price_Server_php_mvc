<?php 
$email = $_POST['email'];
$pass = $_POST['pass'];
$contador = 0;

$conexion = mysqli_connect('localhost','u858464654_fer','w9w9dorotea','u858464654_bdrem');

$q = "select * from sucursales where email='$email' and pass='$pass'";

$resultado = mysqli_query($conexion,$q);

while ($fila = mysqli_fetch_array($resultado,MYSQLI_ASSOC)) {
	$contador++;
}

mysqli_close($conexion);

if ($contador >= 1) {
	 $arr = array('aceptado'=>'OK');	
}else{
	$arr = array('aceptado'=>'NO');	
}

echo json_encode($arr);

?>