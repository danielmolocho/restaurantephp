<?php

	$id2 = $_GET["numero2"];
	

include("conexion.php");
mysqli_set_charset($conexion,"utf8");
$inserto= "UPDATE mesas SET estado_recibo='.' WHERE idmesas=$id2";
			$resulte=mysqli_query($conexion, $inserto);


$sql="SELECT max(idrecibo) as maxim FROM recibo where mesas_idmesas=$id2 and estado='NO IMPRESO'";
  $lib = mysqli_query($conexion, $sql);
  $rs_lib = mysqli_fetch_assoc($lib); 
  $IDMAXIMO = $rs_lib['maxim'];


$inserto2= "UPDATE recibo SET estado='IMPRESO' WHERE idrecibo=$IDMAXIMO";
			$resulte2=mysqli_query($conexion, $inserto2);

 

			header("Location:recepcion.php");
?>  