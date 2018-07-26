<?php

	$id2 = $_GET["numeromesa"];
	

include("conexion.php");
mysqli_set_charset($conexion,"utf8");
$inserto= "UPDATE mesas SET sesion='DESACTIVADA', estado='DISPONIBLE', id_res='0', nombre='NOBODY' , estado_recibo='SOLICITA TICKET' WHERE idmesas=$id2";
			$resulte=mysqli_query($conexion, $inserto);


$sql="SELECT max(idrecibo) as maxim FROM recibo where mesas_idmesas=$id2";
  $lib = mysqli_query($conexion, $sql);
  $rs_lib = mysqli_fetch_assoc($lib); 
  $IDMAXIMO = $rs_lib['maxim'];



$inserto2= "UPDATE recibo SET estado='NO IMPRESO' WHERE idrecibo=$IDMAXIMO";
			$resulte2=mysqli_query($conexion, $inserto2);



			header("Location: pantalla_mesas.php?numero2=$id2");
?>