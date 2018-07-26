<?php

$nombre_imagen=$_FILES['imagen']['name'];
$tipo_imagen=$_FILES['imagen']['type'];
$tamagno=$_FILES['imagen']['size'];

$nombre=$_POST['nombre'];
$precio=$_POST['precio'];


if ($tamagno<=1000000) {

	if ($tipo_imagen=="image/jpeg" || $tipo_imagen=="image/jpg" || $tipo_imagen=="image/png" || $tipo_imagen=="image/gif") {
		
		$carpeta_destino=$_SERVER['DOCUMENT_ROOT'].'/img/';

		move_uploaded_file($_FILES['imagen']['tmp_name'] , $carpeta_destino.$nombre_imagen);


	}else{
		echo "fgdaaa";
	}
}else{


	echo "fdbdsbsfdbda";
}

///////////////////////////////////////////////////////////////////////////
include("conexion.php");
mysqli_set_charset($conexion,"utf8");
/////////////////////////////////////////////////////////////////////////
$consulta= "INSERT INTO platillos(nombre,precio,imagen) VALUES ('$nombre','$precio','$nombre_imagen')";
   			$resultado=mysqli_query($conexion, $consulta);
header("Location: nuevo_platillo.php");

?>