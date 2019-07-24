<?php 

include("conexion.php");
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$username = $_POST['username'];
$password = $_POST['password'];

$query= "INSERT INTO admin(nombre,apellido,username,password) 
VALUES('$nombre','$apellido','$username','$password')";
$resultado= $conexion->query($query);


if($resultado){
	header("location:tablaadmin.php");
}
else{
	echo "conexion FAILED";
}

?>