<?php 

include("conexion.php");
$tipo_animal= $_POST['tipo_animal'];
$descripcion= $_POST['descripcion'];
$razon_citas= $_POST['razon_citas'];
$tipo_cita= $_POST['tipo_cita'];
$fecha_cita= $_POST['fecha_cita'];
$hora_cita= $_POST['hora_cita'];
$encargado_del_animal= $_POST['encargado_del_animal'];
$nombre_veterinario= $_POST['nombre_veterinario'];

if ($tipo_cita=='urgencias') {

$sql2="UPDATE citas set fecha_cita=ADDDATE(fecha_cita, INTERVAL 1 DAY)";
$result2 = $conexion->query($sql2);

}

$query= "INSERT INTO citas(
tipo_animal,
descripcion,
razon_citas,
tipo_cita,
fecha_cita,
hora_cita,
encargado_del_animal,
nombre_veterinario) 
VALUES('$tipo_animal','$descripcion','$razon_citas','$tipo_cita','$fecha_cita','$hora_cita','$encargado_del_animal','$nombre_veterinario')";
$resultado= $conexion->query($query);


if($resultado){
	header("location:tablacitas.php");
}
else{
	echo "conexion FAILED php";
}

?>
 