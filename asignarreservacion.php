<?php

////////////////////////////////////////
include("conexion.php");
mysqli_set_charset($conexion,"utf8");
$id=$_GET["Id"];
$tipo=$_GET["tipo"];
$name=$_GET["name"];

$DOS=2;
$CUATRO=4;
$OCHO=8;
///////////////////////////////////////////////////////
if ($tipo==$DOS) {
	$sql="SELECT min(idmesas) as minim FROM mesas where tipo=$DOS and estado !='RESERVADA' and estado !='OCUPADA'";
    $res = mysqli_query($conexion, $sql);
    $ress = mysqli_fetch_assoc($res); 
    $minim = $ress['minim'];//ESTE ES EL ID DE LA MESA DISPONIBLE

 

    		$inserto= "UPDATE mesas SET estado='RESERVADA', id_res = '$id', nombre ='$name' WHERE idmesas=$minim";
			$resulte=mysqli_query($conexion, $inserto);

			$inserto2= "UPDATE reservacion SET estado_res='ASIGNADA' WHERE idreservacion=$id";
			$resulte2=mysqli_query($conexion, $inserto2);
			header("Location: recepcion.php");
	

}else if ($tipo==$CUATRO) {
	$sql="SELECT min(idmesas) as minim FROM mesas where tipo=$CUATRO and estado !='RESERVADA' and estado !='OCUPADA'";
    $res = mysqli_query($conexion, $sql);
    $ress = mysqli_fetch_assoc($res); 
    $minim = $ress['minim'];//ESTE ES EL ID DE LA MESA DISPONIBLE

 

    		$inserto= "UPDATE mesas SET estado='RESERVADA', id_res = '$id', nombre ='$name' WHERE idmesas=$minim";
			$resulte=mysqli_query($conexion, $inserto);

			$inserto2= "UPDATE reservacion SET estado_res='ASIGNADA' WHERE idreservacion=$id";
			$resulte2=mysqli_query($conexion, $inserto2);
			header("Location: recepcion.php");
	

}else if ($tipo==$OCHO) {
	$sql="SELECT min(idmesas) as minim FROM mesas where tipo=$OCHO and estado !='RESERVADA' and estado !='OCUPADA'";
    $res = mysqli_query($conexion, $sql);
    $ress = mysqli_fetch_assoc($res); 
    $minim = $ress['minim'];//ESTE ES EL ID DE LA MESA DISPONIBLE

 

    		$inserto= "UPDATE mesas SET estado='RESERVADA', id_res = '$id', nombre ='$name' WHERE idmesas=$minim";
			$resulte=mysqli_query($conexion, $inserto);

			$inserto2= "UPDATE reservacion SET estado_res='ASIGNADA' WHERE idreservacion=$id";
			$resulte2=mysqli_query($conexion, $inserto2);
			header("Location: recepcion.php");
	

}

mysqli_close($conexion);
?>
