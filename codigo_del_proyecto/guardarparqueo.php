<?php 
include("conexion.php");
$id=$_REQUEST['id'];
$nombre = $_POST['nombre'];
$cedula = $_POST['cedula'];
$placa = $_POST['placa'];
$zona = $_POST['zona'];
$horas= $_POST['horas'];
$pagara=0;


if ($horas>0) {
	$pagara=$pagara+(1500*$horas);
}

$query= "UPDATE parqueo SET  nombre='$nombre',cedula='$cedula',
placa='$placa',
zona='$zona',
horas='$horas',
pagara='$pagara' WHERE id='$id'";
$resultado= $conexion->query($query);


if($resultado){
	header("location:tablaparque.php");
}
else{
	echo "conexion FAILED holis php";
}
?>