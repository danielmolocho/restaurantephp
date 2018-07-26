<?php
$idorden = $_GET["Id"];

////////////////////////////////////////
include("conexion.php");
mysqli_set_charset($conexion,"utf8");
///////////////////////////////////////////////////////

    		$inserto= "UPDATE orden_platillo set estado='FINALIZADA' where idorden_platillo=$idorden";

			$resulte=mysqli_query($conexion, $inserto);
			header("Location: ordenes_cocina.php");
	

mysqli_close($conexion);
?>
