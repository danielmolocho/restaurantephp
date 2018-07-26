<?php

////////////////////////////////////////
include("conexion.php");
mysqli_set_charset($conexion,"utf8");
$id=$_GET["Id"];

$sql="SELECT idmesas FROM mesas where idmesas=$id and sesion ='DESACTIVADA'";
    $res = mysqli_query($conexion, $sql);
    
    		if($res==true){
					$inserto= "UPDATE mesas SET sesion='ACTIVADA', estado='OCUPADA' WHERE idmesas=$id";
			$resulte=mysqli_query($conexion, $inserto);
			header("Location: recepcion.php");
    		}else{  

    		echo "ACTIVADA";
	}


mysqli_close($conexion);
?>
