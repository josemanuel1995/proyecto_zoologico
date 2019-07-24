<?php 

include("conexion.php");
$nombre= $_POST['nombre'];
$apellido= $_POST['apellido'];
$username= $_POST['username'];
$password= $_POST['password'];
$zona= $_POST['zona'];
$telefono= $_POST['telefono'];
$horas= $_POST['horas'];
$dias= $_POST['dias'];

$query= "INSERT INTO personal(nombre,apellido,username,password,zona,telefono,horas,dias) 
VALUES('$nombre','$apellido','$username','$password','$zona','$telefono','$horas','$dias')";
$resultado= $conexion->query($query);


if($resultado){
	header("location:tablapersonal.php");
}
else{
	echo "conexion FAILED";
}

?>
 