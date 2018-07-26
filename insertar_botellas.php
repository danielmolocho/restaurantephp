<?php 


include("conexion.php");
mysqli_set_charset($conexion,"utf8");

	
	$nombre=$_POST['nombre'];
	$dir=$_POST['marca'];
	$tel=$_POST['kilos'];
	$email=$_POST['limite'];
	$tipesum=$_POST['datepicker'];
	$con=$_POST['valor'];
	$conn=$_POST['tipo'];
	$co=$_POST['prove'];

	$sql="INSERT INTO botellas_bebidas(nombre,marca,cantidad_botella,cantidad_limite,fecha_entrada,valor_unidad,tipo_empaque,proveedor_idproveedor) 
									VALUES ('$nombre','$dir','$tel','$email','$tipesum','$con','$conn','$co')";

	echo mysqli_query($conexion,$sql);
 ?>