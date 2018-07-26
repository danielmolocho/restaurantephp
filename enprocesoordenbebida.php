<?php
$idorden = $_GET["Id"];
$recibo=$_GET["recibo"];
$bebida=$_GET["bebida"];
////////////////////////////////////////
include("conexion.php");
mysqli_set_charset($conexion,"utf8");
///////////////////////////////////////////////////////

    		$inserto= "UPDATE orden_bebida set estado='EN PROCESO' where idorden_bebida=$idorden";
			$resulte=mysqli_query($conexion, $inserto);

			$inserto2= "SELECT maquina_botellas_botellas_bebidas, cantidadml from maquina_botellas_has_bebidas where bebidas_idbebidas=$bebida";
			$resultado=$conexion->query($inserto2);
			
	while ($inserto2 = $resultado->fetch_array(MYSQLI_BOTH))//numero de las ordenes del maxiomo recibo de la mesa con estado orden
		
		
{		
$Z[]= $inserto2['cantidadml'];
$X[]= $inserto2['maquina_botellas_botellas_bebidas'];		
}

$longitud = count($X);
for($i=0; $i<$longitud; $i++)
      {
      //saco el valor de cada elemento
	 //echo $Z[$i];

	  $sql1="INSERT INTO registro_ingredientes_bebidas(recibo,bebida,ingrediente,cantidad) values ('$recibo','$bebida','$X[$i]','$Z[$i]')";
				$resultado2=$conexion->query($sql1);
      }


$onoroff = $bebida;
$textfile = "LEDstate.txt";
$fileLocation = "$textfile";
$time=0;
$fh = fopen($fileLocation, 'w   ') or die("Algo Fallo"); // Esto abre el archivo .txt para escribir y remplaza su contenido
$stringToWrite = "$onoroff"; // Escribe 1 o 0 dependiendo de la respuesta obtenida en index.html
fwrite($fh, $stringToWrite); // Escribe sobre el archivo .txt
fclose($fh);
sleep(2);

$fh = fopen($fileLocation, 'w   ') or die("Algo Fallo"); // Esto abre el archivo .txt para escribir y remplaza su contenido
$stringToWrite2 = "$time"; // Escribe 1 o 0 dependiendo de la respuesta obtenida en index.html
fwrite($fh, $stringToWrite2); // Escribe sobre el archivo .txt
fclose($fh);
mysqli_close($conexion);
header("Location: espera.php?orden=$idorden"); 



?>
