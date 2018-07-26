<?php
$idorden = $_GET["Id"];
$id2 = $_GET["numero2"];
////////////////////////////////////////
include("conexion.php");
mysqli_set_charset($conexion,"utf8");
///////////////////////////////////////////////////////

    		$inserto= "DELETE FROM orden_platillo WHERE idorden_platillo = '$idorden'";
			$resulte=mysqli_query($conexion, $inserto);
			header("Location: menu_platillos.php?numero2=$id2");
	

mysqli_close($conexion);
?>
