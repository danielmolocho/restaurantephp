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
			<a href="cerrarsesion.php">CERRAR SESION</a>
			</nav>
	</div>
</header>
<h3>
<?php
echo "BIENVENIDO: ".$_SESSION["usuario"];
?></h3>
<DIV> <BR><H2>RECURSOS  HUMANOS</H2><BR></DIV>
<p align="CENTER"><a href="altas.php" ><input type="button" name="ir" class="ir" value="DAR DE ALTA"></a>
<p align="CENTER"><a href="bajasempleado.php" ><input type="button" name="ir" class="ir" value="VER BAJAS"></a>

<table id="table_cocina"><thead>
<tr>
		<th class="thh">NOMBRE: </th>
		<th class="thh">TURNO: </th>
		<th class="thh">PUESTO:</th>
		<th class="thh">USUARIO:</th>
		<th class="thh">CLAVE:</th>
		<th class="thh">ESTADO:</th>
		<th class="thh">BAJA:</th>
</tr></thead>
<?php
include("conexion.php");

mysqli_set_charset($conexion,"utf8");

$consulta= "SELECT empleado_general.*, empleado_puesto.* FROM empleado_general JOIN empleado_puesto ON empleado_general.idempleado_general=empleado_puesto.idempleado_general_pue WHERE empleado_puesto.estado='ACTIVA'";
$resultado=$conexion->query($consulta);
while ($consulta = $resultado->fetch_array(MYSQLI_BOTH))

{
echo'<tr>
<td  >'.$consulta['nombre'].'</td>
<td >'.$consulta['turno'].'</td>
<td >'.$consulta['puesto'].'</td>
<td >'.$consulta['usuario'].'</td>
<td >'.$consulta['clave'].'</td>  
<td >'.$consulta['estado'].'</td>
<td  > <a href="dardebajaempleado.php?numero2='.$consulta['idempleado_general_pue'].'" ><input type="submit" value=" DAR DE BAJA" "></td>
</tr>';
}
mysqli_close($conexion);
?>
</tr></table>


</body>
</html>