<?php
$idorden=$_GET["orden"];
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
 <FONT FACE="Arial" SIZE="10" align="center" COLOR="#27FF00"><B>PREPARANDO BEBIDA</B></FONT>
 <HR width="100%" size="10" color="#27FF00">
 </font>
 </p>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
 <HR width="100%" size="10" color="#27FF00">
 	<p align="center">
 <FONT FACE="Arial" SIZE="10" align="center" COLOR="#27FF00"><B>ESPERE........</B></FONT>
 </font>
 </p>
 <script>
  function r() { location.href="finalizarbebida.php?orden2=<?php echo $idorden ?>" } 
  setTimeout ("r()", 100000);
</script>
</body>
</html>
