<?php 

include("conexion.php");
$id=$_REQUEST['id'];
$tipo_animal= $_POST['tipo_animal'];
$descripcion= $_POST['descripcion'];
$razon_citas= $_POST['razon_citas'];
$tipo_cita= $_POST['tipo_cita'];
$fecha_cita= $_POST['fecha_cita'];
$hora_cita= $_POST['hora_cita'];
$encargado_del_animal= $_POST['encargado_del_animal'];
$nombre_veterinario= $_POST['nombre_veterinario'];

$query= "UPDATE citas SET
tipo_animal = '$tipo_animal',
descripcion = '$descripcion',
razon_citas = '$razon_citas',
tipo_cita ='$tipo_cita',
fecha_cita = '$fecha_cita',
hora_cita = '$hora_cita',
encargado_del_animal = '$encargado_del_animal',
nombre_veterinario ='$nombre_veterinario' WHERE id='$id'";
$resultado= $conexion->query($query);


if($resultado){
	header("location:tablacitas.php");
}
else{
	echo "conexion FAILED citas modificar php";
}

?>