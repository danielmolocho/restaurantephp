<?php
$mesa=$_GET["numero2"];
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>DRUNK-BOT</title>

</head>

<body background="FONDO.GIF">
<br>
<br>
<br>
<br>
<br>
<p align="center" >
 <FONT FACE="Arial" SIZE="10" align="center" COLOR="#27FF00"><B>GRACIAS POR SU COMPRA </B></FONT>
 <HR width="100%" size="10" color="#27FF00">
 </font>
 </p>
<br>
<br>
<br>
 <HR width="100%" size="10" color="#27FF00">
 	<p align="center">
 <FONT FACE="Arial" SIZE="10" align="center" COLOR="#27FF00"><B>RECIBIRA SU TICKET EN UN MOMENTO</B></FONT>
 </font>
 </p>
 <script>
  function r() { location.href="cerrarsesionmesa.php?numeromesa=<?php echo $mesa ?>" } 
  setTimeout ("r()", 5000);
</script>
</body>
</html>
