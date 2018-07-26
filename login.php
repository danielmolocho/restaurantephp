
<?php
try {
	$base=new PDO("mysql:host=localhost; dbname=u131526425_wizdo","u131526425_mike","kuZoLTdFtBJ8");
	$base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$sql="SELECT * FROM empleado_puesto WHERE usuario =:usuario AND clave =:contra AND puesto =:puesto AND estado='activa'";
	$resultado=$base->prepare($sql);

	$usuario=htmlentities(addslashes($_POST["usuario"]));     //addlashes es para evitar injection sql
	$contraseña=htmlentities(addslashes($_POST["contra"]));
	$puesto=htmlentities(addslashes($_POST["puesto"]));
	$puesto2=$_POST["puesto"];

	$resultado->bindValue(":usuario", $usuario);
	$resultado->bindValue(":contra", $contraseña);
	$resultado->bindValue(":puesto", $puesto);
	$resultado->execute();
	$numero_registro=$resultado->rowCount();
$RH="RECURSOSHUMANOS";
$CH="COCINA";
$AL="ALMACEN";
$COM="COMPRAS";
$RES="RECEPCION";
$BAR="BAR";

	if ($numero_registro!=0) {


	    if($puesto2 == $CH){
		session_start();
		$_SESSION["usuario"]=$_POST["usuario"];
		header("location: cocina.php");
		}

		else if($puesto2 == $RH){
		session_start();
		$_SESSION["usuario"]=$_POST["usuario"];
		header("location: recursos_humanos.php");
		}

		else if($puesto2 == $AL){
		session_start();
		$_SESSION["usuario"]=$_POST["usuario"];
		header("location: almacen.php");
		}

		else if($puesto2 == $COM){
		session_start();
		$_SESSION["usuario"]=$_POST["usuario"];
		header("location: compras.php");
		}

		else if($puesto2 == $RES){
		session_start();
		$_SESSION["usuario"]=$_POST["usuario"];
		header("location: recepcion.php");
		}
		else if($puesto2 == $BAR){
		session_start();
		$_SESSION["usuario"]=$_POST["usuario"];
		header("location: bar.php");
		}
	}else{
		header("location:login_admin.html");
	}
} catch (Exception $e) {
	die("error:".$e->getMessage());
}

?>
