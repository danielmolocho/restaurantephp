<?php
	$id2 = $_GET["numero2"];///////mesa
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
				<a href="mesas.php?numero2=<?php echo $id2;?>">ACEPTAR</a>
			</nav>
		</div> 
</header>
<h3>
</h3>
<DIV><H2>MESA <?php echo $id2;?></H2></DIV>
<div id="body_m_o">
	<table id="table_cocina" ><thead>
<tr>
		<th class="thh">PLATILLO: </th>
		<th class="thh">PRECIO: </th>
		<th class="thh">ESTADO:</th>
		<th class="thh">CANCELAR:</th>
	</tr></thead>
<?php
include("conexion.php");

mysqli_set_charset($conexion,"utf8");
$sql="SELECT max(idrecibo) as maxim FROM recibo where mesas_idmesas=$id2";
  $lib = mysqli_query($conexion, $sql);
  $rs_lib = mysqli_fetch_assoc($lib); 
  $IDMAXIMO = $rs_lib['maxim']; 

$consulta= "SELECT orden_platillo.*, platillos.* FROM orden_platillo JOIN platillos ON orden_platillo.platillos_idplatillos=platillos.idplatillos 
			WHERE orden_platillo.recibo_idrecibo='$IDMAXIMO' and orden_platillo.estado='ORDEN'";
$resultado=$conexion->query($consulta);
while ($consulta = $resultado->fetch_array(MYSQLI_BOTH))
{

	echo "<tr>";
	echo "<td class='thh'>".$consulta['nombre']."</td>";
	echo "<td class='thh'>".$consulta['precio']."</td>";
	echo "<td class='thh'>".$consulta['estado']."</td>";
	echo '<td class="thh"><a href="eliminar_orden.php?Id='.$consulta['idorden_platillo'].'&numero2='.$id2.'" ><input type="submit" class="btn-enviar" value="ELIMINAR" "></td>';
}
$sqlt="SELECT SUM(costo) as total_suma FROM orden_platillo WHERE recibo_idrecibo = '$IDMAXIMO'";
  $d = mysqli_query($conexion, $sqlt);
  $c = mysqli_fetch_assoc($d); 
  $TOTALCOM = $c['total_suma']; 
mysqli_close($conexion);
?>
</tr></table>
<H3 align='right'><?php echo "TOTAL:$".$TOTALCOM; ?></H3>
</div>

	<br><br>
PLATILLOS
<section>
<?php
include("conexion.php");
mysqli_set_charset($conexion,"utf8");
$consulta= "SELECT * FROM platillos";
$resultado=$conexion->query($consulta);
while ($consulta = $resultado->fetch_array(MYSQLI_BOTH))	
{
$x=$consulta['idplatillos'];
$c=$consulta['precio'];
?>
			<div class="producto">
			<center>
				<a href="platilloorden.php?numero2=<?php echo $x;?>&mesa=<?php echo $id2; ?>&precio=<?php echo $c; ?>"><img src="/img/<?php echo $consulta['imagen'];?>"></a><br>
				<span><?php echo $consulta['nombre'];?></span><br>
				<span><?php echo $consulta['precio'];?></span><br>
			</center>
		</div>
	<?php
		}
		mysqli_close($conexion);
	?>

</section>

                                           
</body>
</html>

<style type="text/css">
section{
	width: 100%;
	min-height: 500px;
	padding: 0%;
	margin:0 auto;
	
	margin-top: 30px;
}
.producto{
	width: 20%;
	height: auto;
	
	display: inline-block;
	vertical-align: top;
	margin-left: 1%;
	margin-top: 1%;
	color: #4a4a4a;
	font-weight: bolder;
	font-size: 1.2rem;
	padding: 1%;
	-webkit-box-shadow: 0px 0px 10px rgba(240, 240, 240, 0.75);
	-moz-box-shadow:    0px 0px 10px rgba(240, 240, 240, 0.75);
	box-shadow:         0px 0px 10px rgba(240, 240, 240, 0.75);
	-webkit-transition: all 1s ease-in-out;
	-moz-transition: all 1s ease-in-out;
}
.producto:hover{

	-webkit-transform: scale(1.2);
	-moz-transform: scale(1.2);
}
.producto img{
	width: 150px;
	height: 200px;
	margin:0 auto;
	border-radius: 50%;
	-webkit-box-shadow: 0px 0px 10px rgba(74, 74, 74, 0.75);
	-moz-box-shadow:    0px 0px 10px rgba(74, 74, 74, 0.75);
	box-shadow:         0px 0px 10px rgba(74, 74, 74, 0.75);
	-webkit-transition: all 1s ease-in-out;
	-moz-transition: all 1s ease-in-out;
}
.producto img:hover{
	-webkit-transform: rotate(355deg);
	-moz-transform: rotate(355deg);
}
.producto a{
	background-color: #4a4a4a;
	padding: 0px;
	color: white;
	width: 30%;
	padding-left: 10px;
	padding-right: 10px;
	border-radius: 2px;
}

</style>

