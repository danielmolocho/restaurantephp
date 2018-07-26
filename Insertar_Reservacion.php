<?php
$A=$_POST['nombre'];
$B=$_POST['correo'];
$C=$_POST['datepicker'];
$D=$_POST['hora'];
$E=$_POST['telefono'];
$NUM=$_POST['num_comensal'];

////////////////////////////////////////
include("conexion.php");
mysqli_set_charset($conexion,"utf8");
///////////////////////////////////////////////////////
$DOS=2;
$CUATRO=4;
$OCHO=8;
$ESTATE="NO ASIGNADA";
///////////////////////////////////////////////////////
if ($NUM<=$DOS) {

    $query1=("SELECT * FROM mesas where tipo='$DOS'");
    $resultado=mysqli_query($conexion, $query1);
    $row_cnt = mysqli_num_rows($resultado);///mesas


    $query2=("SELECT * FROM reservacion where fecha='$C' and tipo_mesa='$DOS'");
    $resultado2=mysqli_query($conexion, $query2);
    $row_cnt2 = mysqli_num_rows($resultado2);///reservaciones hechas


    		if($row_cnt2<$row_cnt){
			$consulta= "INSERT INTO reservacion(nombre,correo,fecha,hora,telefono,numero,tipo_mesa,estado_res) VALUES ('$A','$B','$C','$D','$E','$NUM','$DOS','$ESTATE')";
            echo mysqli_query($conexion, $consulta);
             
    		}else{ 
            echo 2; 

	}
/////////////////////////////////////////////////////////
}else if ($NUM>=3&&$NUM<=$CUATRO) {
    $query1=("SELECT * FROM mesas where tipo='$CUATRO'");
    $resultado=mysqli_query($conexion, $query1);
    $row_cnt = mysqli_num_rows($resultado);///mesas


    $query2=("SELECT * FROM reservacion where fecha='$C' and tipo_mesa='$CUATRO'");
    $resultado2=mysqli_query($conexion, $query2);
    $row_cnt2 = mysqli_num_rows($resultado2);///reservaciones hechas


            if($row_cnt2<$row_cnt){
            $consulta= "INSERT INTO reservacion(nombre,correo,fecha,hora,telefono,numero,tipo_mesa,estado_res) VALUES ('$A','$B','$C','$D','$E','$NUM','$CUATRO','$ESTATE')";
            echo mysqli_query($conexion, $consulta);
            
            }else{ 
            echo 2;
    }

}else if ($NUM>=5&&$NUM<=$OCHO) {
    $query1=("SELECT * FROM mesas where tipo='$OCHO'");
    $resultado=mysqli_query($conexion, $query1);
    $row_cnt = mysqli_num_rows($resultado);///mesas


    $query2=("SELECT * FROM reservacion where fecha='$C' and tipo_mesa='$OCHO'");
    $resultado2=mysqli_query($conexion, $query2);
    $row_cnt2 = mysqli_num_rows($resultado2);///reservaciones hechas


            if($row_cnt2<$row_cnt){
            $consulta= "INSERT INTO reservacion(nombre,correo,fecha,hora,telefono,numero,tipo_mesa,estado_res) VALUES ('$A','$B','$C','$D','$E','$NUM','$OCHO','$ESTATE')";
            echo mysqli_query($conexion, $consulta);
           
            }else{ 
            echo 2; 

    }

}

$to = $B;
$subject = "Asunto del email";
$message = "SU RESERVACION HA SIDO REGISTRADA"."  FECHA: ".$C."  NOMBRE: ".$A."   HORA: ".$D."  GRACIAS";
 
mail($to, $subject, $message);

mysqli_close($conexion);
?>
