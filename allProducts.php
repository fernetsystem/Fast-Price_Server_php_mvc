<?php  

	$conexion = mysqli_connect('localhost','u858464654_fer','w9w9dorotea','u858464654_bdrem');

	$q = "select nombre_pro,descripcion,contenido,existencia,precio,nombre_suc,direccion from productos as p inner join sucursales as s on p.idsucursal = s.idsucursal where est_pago='PAGADO' order by nombre_pro";

	$Mdatos = array();

	$resultado = mysqli_query($conexion,$q);

	while ($fila = mysqli_fetch_array($resultado,MYSQLI_ASSOC)) {

		$Mdatos[] = $fila;

	}

	mysqli_close($conexion);

	
	echo json_encode($Mdatos);

#	echo "<pre><code>".json_encode($Mdatos, JSON_PRETTY_PRINT)."</code></pre>";

	?>
