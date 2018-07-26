<?php
	$id2 = $_GET["numero2"];
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
			</nav>
		</div> 
</header>
<H2>MESA <?php echo $id2;

 ?></H2>





<div id="body_m_o">
<div id="izquierda_m_o">
	
	<br><br>
<table id="table_cocina"><thead>
<tr>
		<th class="thh">PLATILLO: </th>
		<th class="thh">PRECIO: </th>
	
</tr></thead>
<?php
include("conexion.php");

mysqli_set_charset($conexion,"utf8");
$sql="SELECT max(idrecibo) as maxim FROM recibo where mesas_idmesas=$id2 and estado='NO IMPRESO'";
  $lib = mysqli_query($conexion, $sql);
  $rs_lib = mysqli_fetch_assoc($lib); 
  $IDMAXIMO = $rs_lib['maxim']; //ID DEL RECIBO

$consulta= "SELECT orden_platillo.*, platillos.* FROM orden_platillo JOIN platillos ON orden_platillo.platillos_idplatillos=platillos.idplatillos 
			WHERE orden_platillo.recibo_idrecibo='$IDMAXIMO' ORDER BY orden_platillo.idorden_platillo asc";
$resultado=$conexion->query($consulta);
while ($consulta = $resultado->fetch_array(MYSQLI_BOTH))
{

	echo "<tr>";
	echo "<td class='thh'>".$consulta['nombre']."</td>";
	echo "<td class='thh'>$".$consulta['precio']."</td>";
	
}
$sqlt="SELECT SUM(costo) as total_suma FROM orden_platillo WHERE recibo_idrecibo = '$IDMAXIMO'";
  $d = mysqli_query($conexion, $sqlt);
  $c = mysqli_fetch_assoc($d); 
  $TOTALCOM = $c['total_suma']; 
mysqli_close($conexion);
?>
</tr></table><br>
<H3 align='right'><?php echo "TOTAL PLATILLOS: $".$TOTALCOM; ?></H3>
</div>

    <div id="derecha_m_o">
<br><br>
<table id="table_cocina"><thead>
<tr>
		<th class="thh">BEBIDA: </th>
		<th class="thh">PRECIO: </th>
		
	</tr></thead>
<?php
include("conexion.php");

mysqli_set_charset($conexion,"utf8");
$sql="SELECT max(idrecibo) as maxim FROM recibo where mesas_idmesas=$id2";
  $lib = mysqli_query($conexion, $sql);
  $rs_lib = mysqli_fetch_assoc($lib); 
  $IDMAXIMO = $rs_lib['maxim']; //ID DEL RECIBO

$consulta2= "SELECT orden_bebida.*, bebidas.* FROM orden_bebida JOIN bebidas ON orden_bebida.bebidas_idbebidas=bebidas.idbebidas 
			WHERE orden_bebida.recibo_idrecibo='$IDMAXIMO' ORDER BY orden_bebida.idorden_bebida asc";
$resultado2=$conexion->query($consulta2);
while ($consulta2 = $resultado2->fetch_array(MYSQLI_BOTH))
{

	echo "<tr>";
	echo "<td class='thh'>".$consulta2['nombre']."</td>";
	echo "<td class='thh'>$".$consulta2['precio']."</td>";
	
}
$sqlt="SELECT SUM(costo) as total_suma FROM orden_bebida WHERE recibo_idrecibo = '$IDMAXIMO'";
  $d = mysqli_query($conexion, $sqlt);
  $c = mysqli_fetch_assoc($d); 
  $TOTALCOM = $c['total_suma']; 
mysqli_close($conexion);
?>
</tr></table><br>
<H3 align='right'><?php echo "TOTAL BEBIDAS: $".$TOTALCOM; ?></H3>
    </div>  
</div>


 <div class="wrapper">
<table id="table_cocina"><thead>
<tr>
		<th class="thh">recibo: </th>
		<th class="thh">fecha: </th>
		<th class="thh">mesa:</th>
	</tr></thead>
<?php
include("conexion.php");

mysqli_set_charset($conexion,"utf8");
$sql="SELECT max(idrecibo) as maxim FROM recibo where mesas_idmesas=$id2 and estado='NO IMPRESO'";
  $lib = mysqli_query($conexion, $sql);
  $rs_lib = mysqli_fetch_assoc($lib); 
  $IDMAXIMO = $rs_lib['maxim']; //ID DEL RECIBO

$consulta2= "SELECT * FROM recibo
			WHERE idrecibo='$IDMAXIMO' and mesas_idmesas='$id2'";
$resultado2=$conexion->query($consulta2);
while ($consulta2 = $resultado2->fetch_array(MYSQLI_BOTH))
{

	echo "<tr>";
	echo "<td class='thh'>".$consulta2['idrecibo']."</td>";
	echo "<td class='thh'>".$consulta2['fecha']."</td>";
	echo "<td class='thh'>".$consulta2['mesas_idmesas']."</td>";
}
$sqlt="SELECT SUM(costo) as total_suma FROM orden_bebida WHERE recibo_idrecibo = '$IDMAXIMO'";
  $d = mysqli_query($conexion, $sqlt);
  $c = mysqli_fetch_assoc($d); 
  $TOTALCOM = $c['total_suma']; 

$sqlt="SELECT SUM(costo) as total_suma FROM orden_platillo WHERE recibo_idrecibo = '$IDMAXIMO'";
  $d = mysqli_query($conexion, $sqlt);
  $c = mysqli_fetch_assoc($d); 
  $TOTALCOM2 = $c['total_suma']; 


$ma=$TOTALCOM+$TOTALCOM2;

$sqlt2="UPDATE recibo SET total='$ma' WHERE idrecibo = '$IDMAXIMO'";
  $totale = mysqli_query($conexion, $sqlt2);


mysqli_close($conexion);




?>
</tr></table><br>
<H3 align='right'><?php echo "TOTAL:$".$ma; ?></H3>
 
    </div>  

<DIV class="form-registrer">
	<input type="button" class="btn-enviar" value="IMPRIMIR TICKET" onclick="window.print()">
<a href="cerrarticket.php?numero2=<?php echo $id2;?>"><input type="button" align="center" class="btn-enviar" value="REGRESAR" ></a>
</DIV>
</body>
</html>


