<?php
$idorden = $_GET["orden2"];

////////////////////////////////////////
include("conexion.php");
mysqli_set_charset($conexion,"utf8");
///////////////////////////////////////////////////////

    		$inserto= "UPDATE orden_bebida set estado='FINALIZADA' where idorden_bebida=$idorden";

			$resulte=mysqli_query($conexion, $inserto);
			header("Location: ordenes_bar.php");
	

mysqli_close($conexion);
?>
