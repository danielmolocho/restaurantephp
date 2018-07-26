<?php 

include("conexion.php");
mysqli_set_charset($conexion,"utf8");

	
	$nombre=$_POST['nombre'];
	$dir=$_POST['direccion'];
	$tel=$_POST['telefono'];
	$email=$_POST['correo'];
	$tipesum=$_POST['tipo_suministro'];
	$con=$_POST['condicion'];
	$conn=$_POST['condicion_pago'];

	$sql="INSERT INTO proveedor(nombre_p,direccion,telefono,correo,tipo_suministro,condicion_entrega,condicion_pago) VALUES ('$nombre','$dir','$tel','$email','$tipesum','$con','$conn')";

	echo mysqli_query($conexion,$sql);
 ?>