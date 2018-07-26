<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>WIZDOM's HOUSE</title>
	<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
	<link rel="stylesheet" href="/resources/demos/style.css">
	<link rel="stylesheet" href="css/estilos.css">
    <script src="jquery-3.2.1.min.js"></script>
	<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    
	<script>
	$( function() {
		$( "#datepicker" ).datepicker();
	} );
	</script>
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
		<a href="almacen.php">REGRESAR</a>
	</nav>
	</div>
</header>
    <form id="frmajax" method="POST" class="form-registrer" >
     
      <div class="contenedor">
         <input type="text"    name="nombre"               id="nombre"               placeholder="Nombre"       class="input-48" required>
         <input type="text"    name="marca"                id="marca"                placeholder="marca" class="input-48" required>
        <input type="number"   name="kilos"                id="kilos"                placeholder="Cantidad de botellas" class="input-100" required>
        <input type="number"   name="limite"                id="limite"              placeholder="Cantidad de botellas limite" class="input-100" required>
        <input type="text"     name="datepicker"             id="datepicker"         placeholder="Fecha de entrada" class="input-48" required>
        <input type="text"     name="valor"                   id="valor"             placeholder="valor por unidad" class="input-48" required>
       <input type="text"     name="tipo"                   id="tipo"                placeholder="tipo de empaque" class="input-48" required>
       <select name="prove" id="prove"class="input-48">
<?php
$link = mysql_connect('localhost', 'u131526425_mike', 'kuZoLTdFtBJ8');
mysql_select_db('u131526425_wizdo', $link);
$query="SELECT * FROM proveedor where tipo_suministro='bebidas'";
$resultado = mysql_query($query);
if ($resultado){
while($renglon = mysql_fetch_array($resultado))
{
    $valor=$renglon['idproveedor'];
$valor2=$renglon['nombre_p'];
echo "<option value=".$valor.">".$valor2."</option>\n";
}
}
mysql_close($link);
?>
</select>
        <button id="btnguardar" class="btn-enviar">Guardar datos</button>
      </div>
    </form>


</body>
</html>

<script type="text/javascript">
    $(document).ready(function(){
        $('#btnguardar').click(function(){
            var datos=$('#frmajax').serialize();
            $.ajax({
                type:"POST",
                url:"insertar_botellas.php",
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