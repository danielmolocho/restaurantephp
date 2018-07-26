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
		<a href="index.html">Inicio</a>
		<a href="filosofia.html">Filosofia</a>
		<a href="acerca.html">Acerca</a>
		<a href="reservaciones.php">Reservaciones</a>
	</nav>
	</div>
</header>
    <form  id="frmajax" method="POST" class="form-registrer" >
      <h2 class="form-titulo">RESERVA YA</h2>
      <div class="contenedor">
        <input type="text" 		name="nombre" 		id="nombre" 		placeholder="Nombre" class="input-48" required>
        <input type="email" 	name="correo" 		id="correo"			placeholder="Correo" class="input-100" required>
        <input type="text" 		name="datepicker" 	id="datepicker" 	placeholder="Fecha" class="input-48" required>
        <input type="number"    name="hora"    		id="hora"  			placeholder="Hora"    class="input-48" required onkeypress="return valida(event)" min="1" max="24">
         <input type="number"   name="telefono"   	id="telefono"   	placeholder="Telefono"             class="input-100" required onkeypress="return valida(event)" min="1" max="9999999999">
        <input type="number"    name="num_comensal" id="num_comensal"  	placeholder="Numero Comensales"    class="input-48" required onkeypress="return valida(event)" min="1" max="8">

       <button id="btnguardar" class="btn-enviar">RESERVAR</button>
      </div>
    </form>

<p align="left"><a href="login_admin.html" >AD</a>
</body>
</html>


<script type="text/javascript">
    $(document).ready(function(){
        $('#btnguardar').click(function(){
            var datos=$('#frmajax').serialize();
            $.ajax({
                type:"POST",
                url:"Insertar_Reservacion.php",
                data:datos,
                success:function(r){
                    if(r==1){
                        $('#frmajax')[0].reset(); 
                        alert("HA SIDO RESERVADA REVISE SU CORREO");
                    }else{
                        alert("NO HAY RESERVACIONES DIPONIBLES PARA ESE DIA");
                    }
                }//success
            });//ajax

            return false;
        });
    });
</script>