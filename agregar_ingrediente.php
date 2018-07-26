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
			<a href="cocina.php">REGRESAR</a>
			</nav>
	</div>
</header>
<h3>
<?php
echo "BIENVENIDO: ".$_SESSION["usuario"];
?></h3>
<DIV> <BR><H2>COCINA</H2><BR></DIV>
<div>
<form action="Insertar_ingredientede.php" method="get" class="form-registrer" >
      <h2 class="form-titulo">AGREGA INGREDIENTES</h2>
      <div class="contenedor">
        <select name="prove" id="prove" class="input-100">
<?php
$link = mysql_connect('localhost', 'u131526425_mike', 'kuZoLTdFtBJ8');
mysql_select_db('u131526425_wizdo', $link);
$query="SELECT * FROM ingredientes_platillo";
$resultado = mysql_query($query);
if ($resultado){
while($renglon = mysql_fetch_array($resultado))
{
    $valor=$renglon['idingredientes_platillo'];
$valor2=$renglon['nombre'];
echo "<option value=".$valor.">".$valor2."</option>\n";
}
}
mysql_close($link);
?>
</select>
<br>
<input type="number"    name="can"    id="can"  placeholder="cantidad aprox en kilos o gramos con ."    class="input-100" required onkeypress="return valida(event)" step="any" >
<?php $iddeplatillo = $_GET['Id']; ?>
<input id="id" type="hidden" name="id"  value="<?php echo $iddeplatillo; ?>">
        <input type="submit" value="AGREGAR" class="btn-enviar">
      </div>
    </form>


</div>

<div id="body_m_o">
	<table id="table_cocina" ><thead>
<tr>
		<th class="thh">INGREDIENTE: </th>
		<th class="thh">CANTIDAD EN KILOS: </th>
	</tr></thead>
<?php
$iddeplatillo=$_GET['Id'];

include("conexion.php");

mysqli_set_charset($conexion,"utf8");

$consulta= "SELECT ingredientes_platillo.*, ingredientes_platillo_has_platillos.* FROM ingredientes_platillo JOIN ingredientes_platillo_has_platillos 
			ON ingredientes_platillo.idingredientes_platillo=ingredientes_platillo_has_platillos.ingredientes_platillo_idingredientes_platillo 
			WHERE ingredientes_platillo_has_platillos.platillos_idplatillos='$iddeplatillo'";
$resultado=$conexion->query($consulta);
while ($consulta = $resultado->fetch_array(MYSQLI_BOTH))
{

	echo "<tr>";
	echo "<td class='thh'>".$consulta['nombre']."</td>";
	echo "<td class='thh'>".$consulta['cantidad']."</td>";
	//echo '<td class="thh"><a href="eliminar_orden.php?Id='.$consulta['idorden_platillo'].'&numero2='.$id2.'" ><input type="submit" class="btn-enviar" value="ELIMINAR" "></td>';
}

mysqli_close($conexion);
?>
</tr></table>

</div>

</body>
</html>