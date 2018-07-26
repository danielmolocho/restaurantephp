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
			<a href="bar.php">REGRESAR</a>
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
<div class="wrapper">
	<BR>
<a href="botellamaquina.php" ><input type="button" name="ir" class="btn-enviar" value="AGREGAR BOTELLA MAQUINA"></a>
	<BR>
</div>
<div >
<table ><thead>
<tr>
		<th >NOMBRE BOTELLA: </th>
		<th >MILILITROS: </th>
		<th >BOTELLA EN MAQUINA:</th>
		<th >AGREGAR:</th>
	</tr></thead>
<?php
include("conexion.php");

mysqli_set_charset($conexion,"utf8");
 //ID DEL RECIBO
$consulta= "SELECT botellas_bebidas.*, maquina_botellas.* FROM botellas_bebidas JOIN maquina_botellas ON botellas_bebidas.idbotellas_bebidas=maquina_botellas.botellas_bebidas";
$resultado=$conexion->query($consulta);
while ($consulta = $resultado->fetch_array(MYSQLI_BOTH))
{ 

	echo "<tr>";
	echo "<td  >".$consulta['nombre']."</td>";
	echo "<td  >".$consulta['cantidadml']."</td>";
	echo "<td  >".$consulta['cantidad_unidad']."</td><td>";
	echo '<a href="nuevabotella.php?Id='.$consulta['botellas_bebidas'].'" ><input type="submit"  class="boton_personalizado" value="NUEVA BOTELLA" "></td>';
}

mysqli_close($conexion);
?>
</tr></table>

</div>


<div id="body">
	<div id="izquierda">
<table id="table_cocina"><thead>
<tr>
		<th class="thh">HORA: </th>
		<th class="thh">MESA: </th>
		<th class="thh">ESTADO:</th>
		<th class="thh">NOMBRE:</th>
		<th class="thh">PONER EN PROCESO:</th>
	</tr></thead>
<?php
include("conexion.php");

mysqli_set_charset($conexion,"utf8");
date_default_timezone_set("America/Mexico_City");
$fecha= date("m/d/Y");                         // 03.10.01
$hora=date("H:i:s",time());
 //ID DEL RECIBO
$consulta= "SELECT orden_bebida.*, bebidas.* FROM orden_bebida JOIN bebidas ON orden_bebida.bebidas_idbebidas=bebidas.idbebidas 
			WHERE  orden_bebida.estado='ENVIADO' or orden_bebida.estado='EN PROCESO'  and fecha ='$fecha' ORDER BY orden_bebida.idorden_bebida ASC";
$resultado=$conexion->query($consulta);
while ($consulta = $resultado->fetch_array(MYSQLI_BOTH))
{

	echo "<tr>";
	echo "<td class='thh'>".$consulta['hora']."</td>";
	echo "<td class='thh'>".$consulta['mesas_idmesas']."</td>";
	echo "<td class='thh'>".$consulta['estado']."</td>";
	echo "<td class='thh'>".$consulta['nombre']."</td><td class='thh'>";
	echo '<a href="enprocesoordenbebida.php?Id='.$consulta['idorden_bebida'].'&recibo='.$consulta['recibo_idrecibo'].'&bebida='.$consulta['bebidas_idbebidas'].'" >
	<input type="submit" class="btn-enviar" value="PONER PROCESO" "></td>';
}

mysqli_close($conexion);
?>
</tr></table>
    </div>  


    <div id="derecha">
<table id="table_cocina"><thead>
<tr>
		<th class="thh" >HORA </th>
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
$consulta= "SELECT orden_bebida.*, bebidas.* FROM orden_bebida JOIN bebidas ON orden_bebida.bebidas_idbebidas=bebidas.idbebidas 
			WHERE orden_bebida.estado='FINALIZADA' and fecha ='$fecha' ORDER BY orden_bebida.idorden_bebida DESC";
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
<style type="text/css">

table td:first-child {
	width: 200px;
	height: 12px;
}
 
table td:nth-child(2) {
	width: 200px;
	height: 12px;
}
 
table td:nth-child(3) {
	width: 200px;
	height: 12px;
}
 
table td:last-child {
	width: 150px;
	height: 12px;
}
.boton_personalizado{
    text-decoration: none;
    padding: 8px;
    font-weight: 600;
    font-size: 10px;
    color: #ffffff;
    background-color: #1883ba;
    border-radius: 4px;
    border: 2px solid #0016b0;
  }

</style>