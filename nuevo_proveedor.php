<!DOCTYPE html>
<html>
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
	<script src="jquery-3.2.1.min.js"></script>
</head>
<body onload="deshabilitaRetroceso()">
<header >
	<div class="wrapper">
		<div class="logo">
			WIZDOM's HOUSE
		</div>
			<nav>
			<a href="proveedor.php">REGRESAR</a>
			</nav>
	</div>
</header>
	<form id="frmajax" method="POST">
		
		<input type="text"  name="nombre" id="nombre" placeholder="nombre">
		
		<input type="text"  name="direccion" id="direccion" placeholder="direccion">
		
		<input type="text"  name="telefono" id="telefono" placeholder="telefono">
		
		<input type="text"  name="correo" id="correo"  placeholder="correo">

		<input type="text"  name="tipo_suministro" id="tipo_suministro" placeholder="tipo suministro">

		<input type="text"  name="condicion"  id="condicion" placeholder="condicion de entrega">

		<input type="text"  name="condicion_pago" id="condicion_pago" placeholder="condicion de pago">

		<button id="btnguardar">Guardar datos</button>
	</form>
</body>
</html>

<script type="text/javascript">
	$(document).ready(function(){
		$('#btnguardar').click(function(){
			var datos=$('#frmajax').serialize();
			$.ajax({
				type:"POST",
				url:"insertar_proveedor.php",
				data:datos,
				success:function(r){
					if(r==1){
						$('#frmajax')[0].reset(); 
						alert("agregado con exito");
					}else{
						alert("Fallo el server");
					}
				}//success
			});//ajax

			return false;
		});
	});
</script>

