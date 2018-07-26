<?php
$A=$_GET["prove"];
$B=$_GET["can"];
$C=$_GET["id"];

////////////////////////////////////////


include("conexion.php");

mysqli_set_charset($conexion,"utf8");
$consulta= "INSERT INTO ingredientes_platillo_has_platillos(ingredientes_platillo_idingredientes_platillo,platillos_idplatillos,cantidad) VALUES ('$A','$C','$B')";
$resultado=mysqli_query($conexion, $consulta);




if($resultado==false){
	echo "YA EXISTE REGRESAR";
}else{  

header("Location: agregar_ingrediente.php?Id=$C");
}

mysqli_close($conexion);
?>
