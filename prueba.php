<?php
$I="fgb";
$J="gfbdf";
$K=343214;
$L="FDBV";

include("conexion.php");

mysqli_set_charset($conexion,"utf8");



$sql="SELECT max(idempleado_general) as maxim FROM empleado_general";
  $lib = mysqli_query($conexion, $sql);
  $rs_lib = mysqli_fetch_assoc($lib); 
  $ide_max = 2;// $rs_lib['maxim'] + 1; 

$consulta2= "INSERT INTO empleado_academico_info(nivel,titulo,cedula,habilidades,idempleado_general_aca) VALUES ('$I','$J',$K,'$L',$ide_max)";
$resultado2=mysqli_query($conexion, $consulta2);



if($resultado2==false){
	echo "error en consulta";
}else{  

header("Location: altas.html");
}

mysqli_close($conexion);
?>
