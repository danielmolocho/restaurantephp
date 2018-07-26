<?php
$db_host="localhost";
$db_nombre="u131526425_wizdo";
$db_usuario="u131526425_mike";
$db_contra="kuZoLTdFtBJ8";
$conexion= mysqli_connect($db_host,$db_usuario,$db_contra,$db_nombre);
if (mysqli_connect_errno())
{
	echo "fallo conexion";
	exit();
}
?>