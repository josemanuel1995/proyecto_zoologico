 <?php 

include("conexion.php");
$id=$_REQUEST['id'];
$nombre_apellido= $_POST['nombre_apellido'];
$fecha= $_POST['fecha'];
$hora= $_POST['hora'];
$descripcion= $_POST['descripcion'];
$correo= $_POST['correo'];


$query= "UPDATE solicitudplan SET  nombre_apellido='$nombre_apellido',fecha='$fecha',
hora='$hora',
descripcion='$descripcion',
correo='$correo', WHERE id='$id'";
$resultado= $conexion->query($query);


if($resultado){
	header("location:tablaplan.php");
}
else{
	echo "conexion FAILED";
}

?>
