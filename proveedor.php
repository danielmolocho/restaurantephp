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
	
	<script type="text/javascript">
  

  function deshabilitaRetroceso(){
    window.location.hash="no-back-button";
    window.location.hash="Again-No-back-button" //chrome
    window.onhashchange=function(){window.location.hash="no-back-button";}
}
</script>

</head>
<body onload="deshabilitaRetroceso()">
<header >
	<div class="wrapper">
		<div class="logo">
			WIZDOM's HOUSE
		</div>
			<nav>
			<a href="compras.php">REGRESAR</a>
			</nav>
	</div>
</header>
<h3>
<?php
echo "BIENVENIDO: ".$_SESSION["usuario"];
?></h3>
<DIV> <BR><H2>COMPRAS</H2><BR></DIV>
<div class="wrapper">
<p aling="center"><a href="nuevo_proveedor.php" ><input type="button" name="ir" class="ir" value="NUEVO PROVEEDOR"></a>
</P>
</div>
   
   <div >
<?php
include("conexion.php");

mysqli_set_charset($conexion,"utf8");
date_default_timezone_set("America/Mexico_City");
$fecha= date("m/d/Y");
$consulta= "SELECT * FROM proveedor";


$resultado=$conexion->query($consulta);
?>
<table ><thead>
<tr>
		<th >ID PROVEEDOR: </th>
		<th >NOMBRE: </th>
		<th >DIRECCION:</th>
		<th >TELEFONO</th>
		<th >CORREO</th>
		<th >TIPO DE SUMINISTRO</th>
		<th >CONDICION DE ENTREGA</th>
		<th >CONDICION DE PAGO</th>
	</tr></thead>
<?php
while ($consulta = $resultado->fetch_array(MYSQLI_BOTH))	
{
echo'<tr>
<td  >'.$consulta['idproveedor'].'</td>
<td >'.$consulta['nombre_p'].'</td>
<td >'.$consulta['direccion'].'</td>
<td >'.$consulta['telefono'].'</td>
<td >'.$consulta['correo'].'</td>
<td >'.$consulta['tipo_suministro'].'</td>
<td >'.$consulta['condicion_entrega'].'</td>
<td >'.$consulta['condicion_pago'].'</td>
</tr>';
}
mysqli_close($conexion);
?>
</table>

</div>


</body>
</html>