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
			<a href="ordenes_bar.php">REGRESAR</a>
			</nav>
	</div>
</header>
<h3>
<?php
echo "BIENVENIDO: ".$_SESSION["usuario"];
?></h3>
<DIV> <BR><H2>BAR</H2><BR></DIV>
<div>
<form action="insertarenmaquina.php" method="get" class="form-registrer" >
      <h2 class="form-titulo">AGREGA BOTELLA</h2>
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
<input type="number"    name="can"    id="can"  placeholder="tamaño en mililitros de botella"    class="input-100" required onkeypress="return valida(event)" min="1" >
<?php
$a=1;
?>
<input id="id" type="hidden" name="id"  value="<?php echo $a;?>">

<input type="submit" value="AGREGAR" class="btn-enviar">
      </div>
    </form>


</div>



</body>
</html>