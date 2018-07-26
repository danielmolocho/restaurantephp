<?php
$id = $_GET["numero2"];
echo "$id";
////////////////////////////////////////
include("conexion.php");
mysqli_set_charset($conexion,"utf8");
echo "$id";
$sql="SELECT idmesas FROM mesas where idmesas=$id and sesion ='ACTIVADA'";
    $res = mysqli_query($conexion, $sql);
    $final = mysqli_num_rows($res); 
   
    
    		if($final==false){
			echo "SESION NO ACTIVADA";
    		}else{  
            
				$sql="SELECT max(idrecibo) as maxim FROM recibo";
  				$lib = mysqli_query($conexion, $sql);
  				$rs_lib = mysqli_fetch_assoc($lib); 
  				$ide_lib_nuevo = $rs_lib['maxim'] + 1; 
  				$fecha= date("m/d/Y"); 
				$consulta="INSERT INTO recibo(idrecibo,fecha,total,mesas_idmesas) VALUES ($ide_lib_nuevo ,'$fecha',0,$id)";
				$resultado2=mysqli_query($conexion, $consulta);
				if($resultado2==false){
				echo "error en consulta";
				}
				mysqli_close($conexion);
				header("location:mesas.php?numero2=$id");
			}


mysqli_close($conexion);
?>
