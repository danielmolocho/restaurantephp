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
	<script>
function valida(e){
    tecla = (document.all) ? e.keyCode : e.which;

    //Tecla de retroceso para borrar, siempre la permite
    if (tecla==8){
        return true;
    }
        
    // Patron de entrada, en este caso solo acepta numeros
    patron =/[0-9]/;
    tecla_final = String.fromCharCode(tecla);
    return patron.test(tecla_final);
}
</script>

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

    <form action="insertar_bebida.php" method="post" class="form-registrer" enctype="multipart/form-data">
    	 <div class="contenedor">
    	<input type="text" name="nombre" placeholder="nombre" class="input-48" required>
        <input type="text" name="precio" placeholder="precio" class="input-48" required> 	
        <input type="file" name="imagen" placeholder="imagen" class="input-48" required>
        <input type="text" name="valor" placeholder="valor" class="input-48" required>
 		
        <input type="reset" value=" BORRAR " class="btn-enviar">
        <input type="submit" value="REGISTRAR" class="btn-enviar">      
        </p>
      </div>
        
    </form>
<div>



</div>
</body>
</html>