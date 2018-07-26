<?php
	session_start();
	if (!isset($_SESSION["usuario"])) {
		header("location: login.php");
	}
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>WIZDOM's HOUSE</title>	
	<link rel="stylesheet" href="css/estilos.css">
</head>
<body>
<header >
	<div class="wrapper">
		<div class="logo">
			WIZDOM's HOUSE
		</div>
			<nav>
			<a href="recepcion.php">REGRESAR</a>
			</nav>
	</div>
</header>
<h3>
<?php
echo "BIENVENIDO: ".$_SESSION["usuario"];
?></h3>
<DIV> <BR><H2>RECEPCION</H2><BR></DIV>
<div>
<?php
include("conexion.php");

mysqli_set_charset($conexion,"utf8");
date_default_timezone_set("America/Mexico_City");
$fecha= date("m/d/Y");
$consulta= "SELECT * FROM reservacion where estado_res ='NO ASIGNADA'";


$resultado=$conexion->query($consulta);
?>
<table ><thead>
<tr>
		<th >ID RESERVACION: </th>
		<th >NOMBRE: </th>
		<th >CORREO:</th>
		<th >FECHA:</th>
		<th >HORA</th>
		<th >TELEFONO:</th>
		<th >COMENSALES</th>
		<th >ESTADO</th>
	</tr></thead>
<?php
while ($consulta = $resultado->fetch_array(MYSQLI_BOTH))	
{
echo'<tr>
<td  >'.$consulta['idreservacion'].'</td>
<td >'.$consulta['nombre'].'</td>
<td >'.$consulta['correo'].'</td>
<td >'.$consulta['fecha'].'</td>
<td >'.$consulta['hora'].'</td>
<td >'.$consulta['telefono'].'</td>
<td >'.$consulta['numero'].'</td>
<td >'.$consulta['estado_res'].'</td>
<td  > <a href="cancelarreservacion.php?Id='.$consulta['idreservacion'].'" ><input type="submit" value="CANCELAR" "></td>
</tr>';
}
mysqli_close($conexion);
?>
</table>

</div>



<div>
<?php
include("conexion.php");

mysqli_set_charset($conexion,"utf8");
date_default_timezone_set("America/Mexico_City");
$fecha= date("m/d/Y");
$consulta= "SELECT * FROM reservacion where estado_res ='CANCELADA'";


$resultado=$conexion->query($consulta);
?>
<table ><thead>
<tr>
		<th >ID RESERVACION: </th>
		<th >NOMBRE: </th>
		<th >CORREO:</th>
		<th >FECHA:</th>
		<th >HORA</th>
		<th >TELEFONO:</th>
		<th >COMENSALES</th>
		<th >ESTADO</th>
	</tr></thead>
<?php
while ($consulta = $resultado->fetch_array(MYSQLI_BOTH))	
{
echo'<tr>
<td  >'.$consulta['idreservacion'].'</td>
<td >'.$consulta['nombre'].'</td>
<td >'.$consulta['correo'].'</td>
<td >'.$consulta['fecha'].'</td>
<td >'.$consulta['hora'].'</td>
<td >'.$consulta['telefono'].'</td>
<td >'.$consulta['numero'].'</td>
<td >'.$consulta['estado_res'].'</td>
</tr>';
}
mysqli_close($conexion);
?>
</table>

</div>
 
</body>
</html>