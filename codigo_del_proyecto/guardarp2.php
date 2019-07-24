<?php 

include("conexion.php");
$nombre= $_POST['nombre'];
$precio= $_POST['precio'];
$limite= $_POST['limite'];
$duracion= $_POST['duracion'];
$hora_ini_fin= $_POST['hora_ini_fin'];

$query= "INSERT INTO planes(nombre,precio,limite,duracion,hora_ini_fin) 
VALUES('$nombre','$precio','$limite','$duracion','$hora_ini_fin')";
$resultado= $conexion->query($query);


if($resultado){
		header("location:tablaplan2.php");
}
else{
	echo "conexion FAILED";
}

?>
 