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
			<a href="bar.php">REGRESAR</a>
			</nav>
	</div>
</header>
<h3>
<?php
echo "BIENVENIDO: ".$_SESSION["usuario"];
?></h3>
<DIV> <BR><H2>BAR</H2><BR></DIV>
<div>
<form action="Insertar_ingredientedebotella.php" method="get" class="form-registrer" >
      <h2 class="form-titulo">AGREGA INGREDIENTES</h2>
      <div class="contenedor">
        <select name="prove" id="prove" class="input-100">
<?php
$link = mysql_connect('localhost', 'u131526425_mike', 'kuZoLTdFtBJ8');
mysql_select_db('u131526425_wizdo', $link);
$query="SELECT * FROM botellas_bebidas";
$resultado = mysql_query($query);
if ($resultado){
while($renglon = mysql_fetch_array($resultado))
{
    $valor=$renglon['idbotellas_bebidas'];
$valor2=$renglon['nombre'];
echo "<option value=".$valor.">".$valor2."</option>\n";
}
}
mysql_close($link);
?>
</select>
<br>
<input type="number"    name="can"    id="can"  placeholder="cantidad aprox en mililitros"    class="input-100" required onkeypress="return valida(event)" min="1" >
<?php $iddeplatillo = $_GET['Id']; ?>
<input id="id" type="hidden" name="id"  value="<?php echo $iddeplatillo; ?>">
        <input type="submit" value="AGREGAR" class="btn-enviar">
      </div>
    </form>


</div>

<div id="body_m_o">
	<table id="table_cocina" ><thead>
<tr>
		<th class="thh">BEBIDA: </th>
		<th class="thh">CANTIDAD: </th>
	</tr></thead>
<?php
$iddeplatillo=$_GET['Id'];

include("conexion.php");
mysqli_set_charset($conexion,"utf8");

$consulta= "SELECT * FROM botellas_bebidas INNER JOIN maquina_botellas
ON botellas_bebidas.idbotellas_bebidas = maquina_botellas.botellas_bebidas
INNER JOIN maquina_botellas_has_bebidas
ON botellas_bebidas.idbotellas_bebidas=maquina_botellas_has_bebidas.maquina_botellas_botellas_bebidas
where maquina_botellas_has_bebidas.bebidas_idbebidas='$iddeplatillo'";
$resultado=$conexion->query($consulta);
while ($consulta = $resultado->fetch_array(MYSQLI_BOTH))
{

	echo "<tr>";
	echo "<td class='thh'>".$consulta['nombre']."</td>";
	echo "<td class='thh'>".$consulta['cantidadml']."</td>";
	//echo '<td class="thh"><a href="eliminar_orden.php?Id='.$consulta['idorden_platillo'].'&numero2='.$id2.'" ><input type="submit" class="btn-enviar" value="ELIMINAR" "></td>';
}

mysqli_close($conexion);
?>
</tr></table>

</div>

</body>
</html>