<?php
$A=$_POST["nombre"];
$B=$_POST["apellido_pat"];
$C=$_POST["apellido_mat"];
$D=$_POST["sexo"];
$E=$_POST["direccion"];
$F=$_POST["edad"];
$G=$_POST["correo"];
$H=$_POST["telefono"];

$I=$_POST["academic"];
$J=$_POST["titulo"];
$K=$_POST["cedula"];
$L=$_POST["habilidades"];

$M=$_POST["turno"];
$N=$_POST["horario"];
$Ñ=$_POST["horario2"];
$O=$_POST["puesto"];
$P=$_POST["usuario"];
$Q=$_POST["contraseña"];
$x="ACTIVA";
$w=3;

$R=$_POST["tipo"];
$S=$_POST["fecha_inicio"];
$T=$_POST["fecha_fin"];
////////////////////////////////////////


include("conexion.php");

mysqli_set_charset($conexion,"utf8");
$consulta= "INSERT INTO empleado_general(nombre,ape_pat,ape_mat,sexo,direccion,edad,correo,telefono) VALUES ('$A','$B','$C','$D','$E','$F','$G','$H')";
$resultado=mysqli_query($conexion, $consulta);

$consulta2= "INSERT INTO empleado_academico_info(nivel,titulo,cedula,habilidades) VALUES ('$I','$J',$K,'$L')";
$resultado2=mysqli_query($conexion, $consulta2);

$consulta3= "INSERT INTO empleado_puesto(turno,hora_entrada,hora_salida,puesto,usuario,clave,estado) VALUES ('$M','$N','$Ñ','$O','$P','$Q','$x')";
$resultado3=mysqli_query($conexion, $consulta3);

$consulta4= "INSERT INTO empleado_contrato(tipo,fecha_inicio,fecha_fin,duracion) VALUES ('$R','$S','$T','$w')";
$resultado4=mysqli_query($conexion, $consulta4);


if($resultado2==false){
	echo "error en consulta";
}else{  

header("Location: altas.php");
}

mysqli_close($conexion);
?>
