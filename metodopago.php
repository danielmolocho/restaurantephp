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
			
			</nav>
	</div>
</header>
<div class="form-registrer">
<a href="enefectivo.php?numero2=<?php echo $id2;?>"><input type="button" align="center" class="btn-enviar" value="		    PAGO EN EFECTIVO		      " ></a>
</div>
<BR>
	<BR>
<div class="contenedor">
<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top" class="form-registrer">
<input type="hidden" name="cmd" value="_donations">
<input type="hidden" name="business" value="crew_dic@hotmail.com">
<input type="hidden" name="lc" value="MX">
<input type="hidden" name="item_name" value="wizdomshouse">
<input type="hidden" name="no_note" value="0">
<input type="hidden" name="currency_code" value="MXN">
<input type="hidden" name="bn" value="PP-DonationsBF:pagop.png:NonHostedGuest">
<input type="image" src="http://wizdomshouse.xyz/img/pagop.png" border="0" name="submit" alt="PayPal, la forma más segura y rápida de pagar en línea.">
<img alt="" border="0" src="https://www.paypalobjects.com/es_XC/i/scr/pixel.gif" width="10" height="10">
</form>
</DIV>


</body>
</html>