<?php
$idorden = $_GET["Id"];
$id2 = $_GET["numero2"];
////////////////////////////////////////
include("conexion.php");
mysqli_set_charset($conexion,"utf8");
///////////////////////////////////////////////////////

    		$inserto= "DELETE FROM orden_bebida WHERE idorden_bebida = '$idorden'";
			$resulte=mysqli_query($conexion, $inserto);
			header("Location: menu_bebidas.php?numero2=$id2");
	
mysqli_close($conexion);
?>
