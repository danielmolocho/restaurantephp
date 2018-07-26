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
			<a href="cerrarsesion.php">CERRAR SESION</a>
			</nav>
	</div>
</header>
<h3>
<?php
echo "BIENVENIDO: ".$_SESSION["usuario"];// YA EXISTE PDIDOS.PHP/////////////////
?></h3>
<DIV> <BR><H2>COMPRAS</H2><BR></DIV>
<div class="wrapper">
<p aling="center"><a href="proveedor.php" ><input type="button" name="ir" class="ir" value="PROVEEDORES"></a>
	
</div>
    <form action="#" method="get" class="form-registrer" >
        
    </form>



</body>
</html>