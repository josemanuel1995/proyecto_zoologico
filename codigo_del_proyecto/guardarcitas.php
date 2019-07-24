<?php 
include("conexion.php");
$id= $_POST['id'];
$tipo_animal= $_POST['tipo_animal'];
$descripcion= $_POST['descripcion'];
$motivo_consulta= $_POST['motivo_consulta'];
$diagnostico= $_POST['diagnostico'];
$observaciones= $_POST['observaciones'];
$tratamientos= $_POST['tratamientos'];

$query= "INSERT INTO atencion(id,tipo_animal,descripcion,motivo_consulta,diagnostico,observaciones,tratamientos) 
VALUES('$id','$tipo_animal','$descripcion','$motivo_consulta','$diagnostico','$observaciones','$tratamientos')";
$resultado= $conexion->query($query);


if($resultado){
	header("location:tablaatencion.php");
}
else{
	echo "conexion FAILED";
}

?>
 