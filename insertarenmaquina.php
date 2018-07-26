<?php
$A=$_GET["prove"];
$B=$_GET["can"];
$C=$_GET["id"];

////////////////////////////////////////


include("conexion.php");

mysqli_set_charset($conexion,"utf8");
$consulta= "INSERT INTO maquina_botellas(botellas_bebidas,cantidadml,cantidad_botella,cantidad_unidad) VALUES ('$A','$B','$B',$C')";
$resultado=mysqli_query($conexion, $consulta);

if($resultado==false){
	echo "YA EXISTE BOTELLA REGRESAR";
}else{  

header("Location: botellamaquina.php");
}

mysqli_close($conexion);
?>
