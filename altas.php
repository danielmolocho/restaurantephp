<?php
    session_start();
    if (!isset($_SESSION["usuario"])) {
        header("location: login.php");
    }
?>

<!doctype html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>WIZDOM's HOUSE</title>
<link rel="stylesheet" href="css/eestilos.css">
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="/resources/demos/style.css">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
   
<script>
$().ready(function() {
$("#datepicker").datepicker({
    changeMonth: true,
    changeYear: true,
    dateFormat: "dd-mm-yy",
    yearRange: "2017:2020",
    onSelect: function(dateText, inst) { 
    $("#datepicker_value").val(dateText);
    }
});
$("#otrodatepicker").datepicker({
    changeMonth: true,
    changeYear: true,
    dateFormat: "dd-mm-yy",
    yearRange: "2017:2020",
    onSelect: function(dateText, inst) { 
    $("#otrodatepicker_value").val(dateText);
    }
});
});
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
        
        <a href="recursos_humanos.php">REGRESAR</a>
    </nav>
    </div>
</header>
<h3>
<?php
echo "BIENVENIDO: ".$_SESSION["usuario"];
?></h3>
<h1>REGISTRO DE EMPLEADO</h1>
    <form  method="post" action="Insertar_Registro.php"  class="form-registrer" >
        DATOS GENERALES<BR>
      <div class="contenedor">
        <input type="text"      name="nombre"        placeholder="nombre"               class="input-48" required>
        <input type="text"      name="apellido_pat"  placeholder="Apellido Paterno"     class="input-48" required>
        <input type="text"      name="apellido_mat"  placeholder="Apellido Materno"     class="input-48" required>
        <input type="text"      name="sexo"          placeholder="Sexo"                 class="input-48" required>
        <input type="text"      name="direccion"     placeholder="Direccion"            class="input-48" required>
        <input type="number"    name="edad"          placeholder="Edad"                 class="input-48" required onkeypress="return valida(event)" min="1" max="99">
        <input type="email"     name="correo"        placeholder="Correo"               class="input-100" required>
        <input type="number"    name="telefono"      placeholder="Telefono"             class="input-100" required onkeypress="return valida(event)" min="1" max="9999999999">
        </div>
        PERFIL ACADEMICO<BR>
        <div class="contenedor">
        <input type="text"      name="academic"      placeholder="Nivel Academico"      class="input-48" required>
        <input type="text"      name="titulo"        placeholder="Titulo"               class="input-48" required>
        <input type="number"    name="cedula"        placeholder="Cedula"               class="input-48" required onkeypress="return valida(event)" min="1" max="999999999999">
        <input type="text"      name="habilidades"   placeholder="Habilidades"          class="input-100" required>
        </div>
         DATOS PUESTO<BR>
      <div class="contenedor">
        <input type="text"      name="turno"        placeholder="Turno"                class="input-48" required>
        <input type="number"    name="horario"       placeholder="Hora Entrada"         class="input-48" required min="0" max="24">
        <input type="number"    name="horario2"      placeholder="Hora Salida"          class="input-48" required min="0" max="24">
        <select name="puesto"  class="input-48" required>
  <option value="COCINA">cocina</option>
  <option value="RECURSOSHUMANOS">recursos humanos</option>
  <option value="ALMACEN">almacen</option>
  <option value="COMPRAS">compras</option>
  <option value="RECEPCION">recepcion</option>
        </select>





        <input type="text"      name="usuario"       placeholder="Usuario"              class="input-48" required>
        <input type="text"      name="contraseña"    placeholder="Contraseña"           class="input-48" required>
        </div>
        DATOS CONTRATO<BR>
      <div class="contenedor">
        <input type="text"      name="tipo"         placeholder="Tipo de contrato" class="input-48" required>
        <input type="text"      name="fecha_inicio"     id="datepicker"        placeholder="Fecha de inicio" class="input-48" required>
        <input type="text"      name="fecha_fin"     id="otrodatepicker"    placeholder="Fecha de final" class="input-48" required>
        </div>
        <div class="contenedor">
        <input type="submit" value="REGISTRAR" class="btn-enviar">
        </div>
    </form>

</body>
</html>