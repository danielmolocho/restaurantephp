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
	<meta http-equiv="refresh" content="10" />
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
			<a href="cocina.php">REGRESAR</a>
			</nav>
		</div> 
</header>
<h3>
	<?php
	date_default_timezone_set("America/Mexico_City");
$fecha= date("m/d/Y");                         // 03.10.01
$hora=date("H:i:s",time());
echo "BIENVENIDO: ".$_SESSION["usuario"];
echo "   							FECHA: ".$fecha;
echo "   HORA: ".$hora;
?>
</h3>
<div id="body">
	<div id="izquierda">
<table id="table_cocina"><thead>
<tr>
		<th class="thh">HORA: </th>
		<th class="thh">MESA: </th>
		<th class="thh">ESTADO:</th>
		<th class="thh">NOMBRE:</th>
		<th class="thh">PONER EN PROCESO:</th>
		<th class="thh">FINALIZAR:</th>
	</tr></thead>
<?php
include("conexion.php");

mysqli_set_charset($conexion,"utf8");
 //ID DEL RECIBO
date_default_timezone_set("America/Mexico_City");
$fecha= date("m/d/Y");                         // 03.10.01
$hora=date("H:i:s",time());

$consulta= "SELECT orden_platillo.*, platillos.* FROM orden_platillo JOIN platillos ON orden_platillo.platillos_idplatillos=platillos.idplatillos 
			WHERE  orden_platillo.estado='ENVIADO' or orden_platillo.estado='EN PROCESO'  and fecha ='$fecha' ORDER BY orden_platillo.hora ASC";
$resultado=$conexion->query($consulta);
while ($consulta = $resultado->fetch_array(MYSQLI_BOTH))
{

	echo "<tr>";
	echo "<td class='thh'>".$consulta['hora']."</td>";
	echo "<td class='thh'>".$consulta['mesas_idmesas']."</td>";
	echo "<td class='thh'>".$consulta['estado']."</td>";
	echo "<td class='thh'>".$consulta['nombre']."</td><td class='thh'>";
	echo '<a href="enprocesoorden.php?Id='.$consulta['idorden_platillo'].'&recibo='.$consulta['recibo_idrecibo'].'&platillo='.$consulta['platillos_idplatillos'].'" ><input type="submit" value="PONER PROCESO" "></td><td class="thh">';
	echo '<a href="finalizar.php?Id='.$consulta['idorden_platillo'].'" ><input type="submit" value="FINALIZAR" "></td>';
}

mysqli_close($conexion);
?>
</tr></table>
    </div>  


    <div id="derecha">
<table id="table_cocina"><thead>
<tr>
		<th class="thh" >HORA: </th>
		<th class="thh" >MESA: </th>
		<th class="thh" >ESTADO:</th>
		<th class="thh" >NOMBRE:</th>
	</tr></thead>
<?php
include("conexion.php");

mysqli_set_charset($conexion,"utf8");
 //ID DEL RECIBO
date_default_timezone_set("America/Mexico_City");
$fecha= date("m/d/Y");                         // 03.10.01
$hora=date("H:i:s",time());
$consulta= "SELECT orden_platillo.*, platillos.* FROM orden_platillo JOIN platillos ON orden_platillo.platillos_idplatillos=platillos.idplatillos 
			WHERE orden_platillo.estado='FINALIZADA' and fecha='$fecha'  ORDER BY orden_platillo.hora DESC";
$resultado=$conexion->query($consulta);
while ($consulta = $resultado->fetch_array(MYSQLI_BOTH))
{

	echo "<tr>";
	echo "<td class='thh'>".$consulta['hora']."</td>";
	echo "<td class='thh'>".$consulta['mesas_idmesas']."</td>";
	echo "<td class='thh'>".$consulta['estado']."</td>";
	echo "<td class='thh'>".$consulta['nombre']."</td>";
}

mysqli_close($conexion);
?>
</tr></table>
    </div> 
    </div>
</body>
</html>
