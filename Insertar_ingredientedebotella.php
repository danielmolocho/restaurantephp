<?php
$A=$_GET["prove"];
$B=$_GET["can"];
$C=$_GET["id"];

////////////////////////////////////////


include("conexion.php");

mysqli_set_charset($conexion,"utf8");
$consulta= "INSERT INTO maquina_botellas_has_bebidas(maquina_botellas_botellas_bebidas,bebidas_idbebidas,cantidadml) VALUES ('$A','$C','$B')";
$resultado=mysqli_query($conexion, $consulta);




if($resultado==false){
	echo "YA EXISTE INGREDIENTE REGRESAR";
}else{  

header("Location: agregar_ingrediente_botella.php?Id=$C");
}

mysqli_close($conexion);
?>
