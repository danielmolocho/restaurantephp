<?php
$idorden = $_GET["Id"];
$recibo=$_GET["recibo"];
$platillo=$_GET["platillo"];

////////////////////////////////////////
include("conexion.php");
mysqli_set_charset($conexion,"utf8");
///////////////////////////////////////////////////////

    		$inserto= "UPDATE orden_platillo set estado='EN PROCESO' where idorden_platillo=$idorden";
			$resulte=mysqli_query($conexion, $inserto);


    		$inserto2= "SELECT ingredientes_platillo_idingredientes_platillo, cantidad from ingredientes_platillo_has_platillos where platillos_idplatillos=$platillo";
			$resultado=$conexion->query($inserto2);
			
	while ($inserto2 = $resultado->fetch_array(MYSQLI_BOTH))//numero de las ordenes del maxiomo recibo de la mesa con estado orden
		
		 
{		
$Z[]= $inserto2['cantidad'];
$X[]= $inserto2['ingredientes_platillo_idingredientes_platillo'];		
}

$longitud = count($X);
for($i=0; $i<$longitud; $i++)
      {
      //saco el valor de cada elemento
	 //echo $Z[$i];

	  $sql1="INSERT INTO registro_ingredientes(recibo,platillo,ingrediente,cantidad) values ('$recibo','$platillo','$X[$i]','$Z[$i]')";
				$resultado2=$conexion->query($sql1);
      }






			header("Location: ordenes_cocina.php");
	

mysqli_close($conexion);
?>
