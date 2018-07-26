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
			<a href="recepcion.php">.</a>
			</nav>
	</div>
</header>

<div id="main_mesas">
<a href="loginm.php?numero2=<?php echo $id2;?>"><input  name="boton2" type="image"src="img/entrar.jpg" class="imagen" width="500" height="350"></a>
<BR>
</DIV>
</body>
</html>