<?php 

include("conexion.php");
$nombre = $_POST['nombre'];
$cedula = $_POST['cedula'];
$placa = $_POST['placa'];
$zona = $_POST['zona'];
$horas= $_POST['horas'];
$pagara=0;


if ($horas>0) {
	$pagara=$pagara+(1500*$horas);
}



$query= "INSERT INTO parqueo(
nombre,
cedula,
placa,
zona,
horas,
pagara)
VALUES('$nombre','$cedula','$placa','$zona','$horas','$pagara')";
$resultado= $conexion->query($query);


if($resultado){
	header("location:tablaparque.php");
}
else{
	echo "conexion FAILED holis php";
}

?>