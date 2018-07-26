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
<DIV> <BR><H2>ALMACEN</H2><BR></DIV>
   <a href="agregar_materia.php"><button class="btn-enviar">AGREGAR MATERIA PRIMA</button></a>
   <a href="agregar_botellas.php"><button class="btn-enviar">AGREGAR BOTELLAS</button></a>
<div id="body_m_o">
	<table id="table_cocina" ><thead>
<tr>
		<th class="thh">NOMBRE: </th>
		<th class="thh">MARCA: </th>
		<th class="thh">KILOS:</th>
		<th class="thh">KILOS MINIMO LIMITE:</th>
		<th class="thh">ENTRADA:</th>
		<th class="thh">PRECIO X U:</th>
		<th class="thh">EMPAQUE:</th>
		<th class="thh">PROVEEDOR:</th>
	</tr></thead>
<?php
include("conexion.php");

mysqli_set_charset($conexion,"utf8");


$consulta= "SELECT ingredientes_platillo.*, proveedor.nombre_p FROM ingredientes_platillo JOIN proveedor ON ingredientes_platillo.proveedor_idproveedor =proveedor.idproveedor ";
$resultado=$conexion->query($consulta);
while ($consulta = $resultado->fetch_array(MYSQLI_BOTH))
{

	echo "<tr>";
	echo "<td class='thh'>".$consulta['nombre']."</td>";
	echo "<td class='thh'>".$consulta['marca']."</td>";
	echo "<td class='thh'>".$consulta['cantidad_kilos']."</td>";
	echo "<td class='thh'>".$consulta['cantidad_limite']."</td>";
	echo "<td class='thh'>".$consulta['fecha_entrada']."</td>";
	echo "<td class='thh'>".$consulta['valor_unidad']."</td>";
	echo "<td class='thh'>".$consulta['tipo_empaque']."</td>";
	echo "<td class='thh'>".$consulta['nombre_p']."</td>";
	//echo '<td class="thh"><a href="eliminar_orden.php?Id='.$consulta['idorden_platillo'].'&numero2='.$id2.'" ><input type="submit" class="btn-enviar" value="ELIMINAR" "></td>';
} 
mysqli_close($conexion);
?>
</tr></table>
</div>

<div id="body_m_o">
	<table id="table_cocina" ><thead>
<tr>
		<th class="thh">NOMBRE: </th>
		<th class="thh">MARCA: </th>
		<th class="thh">TOTAL BOTELLAS:</th>
		<th class="thh">BOTELLAS MINIMO LIMITE:</th>
		<th class="thh">ENTRADA:</th>
		<th class="thh">PRECIO X U:</th>
		<th class="thh">EMPAQUE:</th>
		<th class="thh">PROVEEDOR:</th>
	</tr></thead>
<?php
include("conexion.php");

mysqli_set_charset($conexion,"utf8");


$consulta= "SELECT botellas_bebidas.*, proveedor.nombre_p FROM botellas_bebidas JOIN proveedor ON botellas_bebidas.proveedor_idproveedor =proveedor.idproveedor ";
$resultado=$conexion->query($consulta);
while ($consulta = $resultado->fetch_array(MYSQLI_BOTH))
{

	echo "<tr>";
	echo "<td class='thh'>".$consulta['nombre']."</td>";
	echo "<td class='thh'>".$consulta['marca']."</td>";
	echo "<td class='thh'>".$consulta['cantidad_botella']."</td>";
	echo "<td class='thh'>".$consulta['cantidad_limite']."</td>";
	echo "<td class='thh'>".$consulta['fecha_entrada']."</td>";
	echo "<td class='thh'>".$consulta['valor_unidad']."</td>";
	echo "<td class='thh'>".$consulta['tipo_empaque']."</td>";
	echo "<td class='thh'>".$consulta['nombre_p']."</td>";
	//echo '<td class="thh"><a href="eliminar_orden.php?Id='.$consulta['idorden_platillo'].'&numero2='.$id2.'" ><input type="submit" class="btn-enviar" value="ELIMINAR" "></td>';
} 
mysqli_close($conexion);
?>
</tr></table>
</div>
</body>
</html>