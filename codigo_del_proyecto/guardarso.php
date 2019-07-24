<?php 

include("conexion.php");
$id_animal= $_POST['id_animal'];
$id_personal= $_POST['id_personal'];
$zona_personal= $_POST['zona_personal'];
$fecha= $_POST['fecha'];
$hora= $_POST['hora'];
$razon_cita= $_POST['razon_cita'];
$tipo_cita= $_POST['tipo_cita'];

$query= "INSERT INTO solicitudcitas(id_animal,id_personal,zona_personal,fecha,hora,razon_cita,tipo_cita) 
VALUES('$id_animal','$id_personal','$zona_personal','$fecha','$hora','$razon_cita','$tipo_cita')";
$resultado= $conexion->query($query);


if($resultado){
		header("location:tablasoli.php");
}
else{
	echo "conexion FAILED";
}

?>
 