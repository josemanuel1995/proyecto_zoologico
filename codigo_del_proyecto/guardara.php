<?php 

include("conexion.php");
$fecha_ingreso= $_POST['fecha_ingreso'];
$tipo_animal= $_POST['tipo_animal'];
$descripcion= $_POST['descripcion'];
$peso= $_POST['peso'];
$estado= $_POST['estado'];
$zona_asignada= $_POST['zona_asignada'];
$lugar_llegada= $_POST['lugar_llegada'];
$nombre_encargado= $_POST['nombre_encargado'];


$query= "INSERT INTO animal(

fecha_ingreso,
tipo_animal,
descripcion,
peso,
estado,
zona_asignada,
lugar_llegada,
nombre_encargado) 
VALUES(
'$fecha_ingreso',
'$tipo_animal',
'$descripcion',
'$peso',
'$estado',
'$zona_asignada',
'$lugar_llegada',
'$nombre_encargado')";
$resultado= $conexion->query($query);


if($resultado){
	header("location:tablaanimal.php");
}
else{
	echo "conexion FAILED";
}

?>
 