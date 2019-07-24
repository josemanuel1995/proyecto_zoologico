<?php 

include("conexion.php");
$nombre_apellido= $_POST['nombre_apellido'];
$fecha= $_POST['fecha'];
$hora= $_POST['hora'];
$descripcion= $_POST['descripcion'];
$correo= $_POST['correo'];

$query= "INSERT INTO solicitudplan(nombre_apellido,fecha,hora,descripcion,correo) VALUES('$nombre_apellido','$fecha','$hora','$descripcion','$correo')";
$resultado= $conexion->query($query);


if($resultado){
		header("location:mensaje.html");
}
else{
	echo "conexion FAILED";
}

?>
 