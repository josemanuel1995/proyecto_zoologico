<?php 

include("conexion.php");
$nombre= $_POST['nombre'];
$apellido= $_POST['apellido'];
$username= $_POST['username'];
$password= $_POST['password'];
$cargo= $_POST['cargo'];
$dias_atencion= $_POST['dias_atencion'];
$horas_atencion= $_POST['horas_atencion'];


$query= "INSERT INTO veterinario(nombre,apellido,username,password,cargo,dias_atencion,horas_atencion) VALUES(
'$nombre',
'$apellido',
'$username',
'$password',
'$cargo',
'$dias_atencion',
'$horas_atencion'
)";
$resultado= $conexion->query($query);


if($resultado){
	header("location:tablaveterinario.php");
}
else{
	echo "conexion FAILED";
}

?>
