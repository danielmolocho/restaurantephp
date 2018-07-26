<?php
$id=$_GET["Id"];
////////////////////////////////////////
include("conexion.php");
mysqli_set_charset($conexion,"utf8");


 

    		

			$inserto2= "UPDATE reservacion SET estado_res='CANCELADA' WHERE idreservacion=$id";
			$resulte2=mysqli_query($conexion, $inserto2);
			header("Location: verreservacion.php");
	


mysqli_close($conexion);
?>
