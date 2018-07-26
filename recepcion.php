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
	<meta http-equiv="refresh" content="20" />
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
			<a href="cerrarsesion.php">CERRAR SESION</a>
			</nav>
	</div>
</header>
<h3>
<?php
echo "BIENVENIDO: ".$_SESSION["usuario"];
?></h3>
<DIV> <BR><H2>RECEPCION</H2><BR></DIV>
<p aling="center"><a href="verreservacion.php" ><input type="button" name="ir" class="ir" value="VER RESERVACIONES"></a>
<div class="wrapper">
<?php
include("conexion.php");

mysqli_set_charset($conexion,"utf8");
date_default_timezone_set("America/Mexico_City");
$fecha= date("m/d/Y");
$consulta= "SELECT * FROM reservacion where fecha ='$fecha' and estado_res ='NO ASIGNADA'";


$resultado=$conexion->query($consulta);
?>
<table ><thead>
<tr>
		<th >ID RESERVACION: </th>
		<th >NOMBRE: </th>
		<th >FECHA:</th>
		<th >HORA</th>
		<th >COMENSALES</th>
		<th >ESTADO</th>
	</tr></thead>
<?php
while ($consulta = $resultado->fetch_array(MYSQLI_BOTH))	
{
echo'<tr>
<td  >'.$consulta['idreservacion'].'</td>
<td >'.$consulta['nombre'].'</td>
<td >'.$consulta['fecha'].'</td>
<td >'.$consulta['hora'].'</td>
<td >'.$consulta['numero'].'</td>
<td >'.$consulta['estado_res'].'</td>
<td  > <a href="asignarreservacion.php?Id='.$consulta['idreservacion'].'&tipo='.$consulta['tipo_mesa'].'&name='.$consulta['nombre'].'" ><input type="submit" value="ASIGNAR MESA HOY" "></td>
</tr>';
}
mysqli_close($conexion);
?>
</table>

</div>

 <div id="mai_cocina">
<?php
include("conexion.php");

mysqli_set_charset($conexion,"utf8");

$consulta= "SELECT * FROM mesas";


$resultado=$conexion->query($consulta);
?>
<table ><thead>
<tr>
		<th >NUMERO DE MESA: </th>
		<th >SILLAS: </th>
		<th >ESTADO:</th>
		<th >MESERO</th>
		<th >SESION</th>
		<th >ID RECEPCION</th>
		<th >A NOMBRE DE:</th>
		<th >SESION</th>
		<th >IR A MESA</th>
		<th >ESTADO TICKET</th>
		<th >IMPRIMIR</th>
	</tr></thead>
<?php
while ($consulta = $resultado->fetch_array(MYSQLI_BOTH))	
{
echo'<tr>
<td  >'.$consulta['idmesas'].'</td>
<td >'.$consulta['tipo'].'</td>
<td >'.$consulta['estado'].'</td>
<td >'.$consulta['mesero'].'</td>
<td >'.$consulta['sesion'].'</td>  
<td >'.$consulta['id_res'].'</td>
<td >'.$consulta['nombre'].'</td>
<td  > <a href="inicio_sesion.php?Id='.$consulta['idmesas'].'" ><input type="submit" value="ABRIR SESION" "></td>
<td  > <a href="pantalla_mesas.php?numero2='.$consulta['idmesas'].'" ><input type="submit" value="IR A MESA" "></td>
<td >'.$consulta['estado_recibo'].'</td>
<td  > <a href="imprimirrecibo.php?numero2='.$consulta['idmesas'].'" ><input type="submit" value=" TICKET" "></td>
</tr>';
}
mysqli_close($conexion);
?>
</table>
</div>
</body>
</html>