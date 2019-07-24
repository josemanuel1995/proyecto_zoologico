<?php 

include("conexion.php");
$id=$_REQUEST['id'];
$nombre=$_POST['nombre'];
$cedula=$_POST['cedula'];
$plan_turistico=$_POST['plan_turistico'];
$adicionales=$_POST['adicionales'];
$cantidad_adultos=$_POST['cantidad_adultos'];
$cantidad_ninos=$_POST['cantidad_ninos'];
$total=0;

if ($plan_turistico==1) {
	$total=30000;
}elseif ($plan_turistico==2) {
	$total=50000;
}elseif ($plan_turistico==3) {
	$total=75000;
}

if ($adicionales>0) {
	$total=$total+(10000*$adicionales);
}


if ($cantidad_ninos>0) {
	$total_ninos=($total*0.5)*$cantidad_ninos;
}
	
$total_adultos=($cantidad_adultos-$cantidad_ninos)*($total);

if ($cantidad_adultos>5) {
	$total=($total_adultos+$total_ninos)*0.8;
}


$query= "UPDATE compras SET
nombre='$nombre',
cedula='$cedula',
plan_turistico='$plan_turistico',
adicionales='$adicionales',
cantidad_adultos='$cantidad_adultos',
cantidad_ninos='$cantidad_ninos',
total='$total' WHERE id='$id'";
$resultado= $conexion->query($query);


if($resultado){
	header("location:tablacompras.php");
}
else{
	echo "conexion FAILED";
}

?>
