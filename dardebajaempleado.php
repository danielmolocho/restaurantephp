<?php
$idorden = $_GET["numero2"];

////////////////////////////////////////
include("conexion.php");
mysqli_set_charset($conexion,"utf8");
///////////////////////////////////////////////////////

    		$inserto= "UPDATE empleado_puesto set estado='DESACTIVADA' where idempleado_general_pue=$idorden";

			$resulte=mysqli_query($conexion, $inserto);
			header("Location: recursos_humanos.php");
	

mysqli_close($conexion);
?>
