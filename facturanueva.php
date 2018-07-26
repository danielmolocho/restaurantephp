<?php
$MESA=$_GET["numero2"];
include("conexion.php");
mysqli_set_charset($conexion,"utf8");
$sql="SELECT max(idrecibo) as maxim FROM recibo";
  $lib = mysqli_query($conexion, $sql);
  $rs_lib = mysqli_fetch_assoc($lib); 
  $ide_lib_nuevo = $rs_lib['maxim'] + 1; 
$consulta="INSERT INTO recibo(idrecibo,fecha,total,mesas_idmesas) VALUES ($ide_lib_nuevo ,now(),0,$MESA)";
$resultado2=mysqli_query($conexion, $consulta);
if($resultado2==false){
	echo "error en consulta";
}
mysqli_close($conexion);
?>