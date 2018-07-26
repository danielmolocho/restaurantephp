<?php
$idorden = $_GET["Id"];

////////////////////////////////////////
include("conexion.php");
mysqli_set_charset($conexion,"utf8");
///////////////////////////////////////////////////////
$inserto2= "SELECT cantidad_botella as can FROM maquina_botellas WHERE botellas_bebidas=$idorden";

			$resulte2=mysqli_query($conexion, $inserto2);
			$rs_lib = mysqli_fetch_assoc($resulte2); 
  			$cant = $rs_lib['can'];

    		$inserto= "UPDATE maquina_botellas set cantidadml=$cant where botellas_bebidas=$idorden";

			$resulte=mysqli_query($conexion, $inserto);
			header("Location: ordenes_bar.php");
	

mysqli_close($conexion);
?>
