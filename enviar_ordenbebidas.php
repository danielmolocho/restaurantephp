<?php
$id2 = $_GET["numero2"];//esta es la mesa
////////////////////////////////////////
include("conexion.php");
mysqli_set_charset($conexion,"utf8");
$sql="SELECT max(idrecibo) as maxim FROM recibo where mesas_idmesas=$id2";
  $lib = mysqli_query($conexion, $sql);
  $rs_lib = mysqli_fetch_assoc($lib); 
  $IDMAXIMO = $rs_lib['maxim'];
///////////////////////////////////////////////////////

    		$inserto= "SELECT idorden_bebida from orden_bebida where recibo_idrecibo=$IDMAXIMO and estado='ORDEN'";
			$resultado=$conexion->query($inserto);
			
	while ($inserto = $resultado->fetch_array(MYSQLI_BOTH))
		$X[]= $inserto['idorden_bebida'];
		//print_r($X);
{				
}

$longitud = count($X);
 date_default_timezone_set("America/Mexico_City");
 $fecha= date("m/d/Y"); 
 $hora=date("H:i:s",time());
//Recorro todos los elementos
for($i=0; $i<$longitud; $i++)
      {
      //saco el valor de cada elemento
	  echo $X[$i];
	  echo "<br>";

	  $sql1="UPDATE orden_bebida set estado='ENVIADO' , fecha='$fecha', hora='$hora' where idorden_bebida=$X[$i]";
				$resultado=$conexion->query($sql1);
      }

mysqli_close($conexion);
header("Location: mesas.php?numero2=$id2");
?>
