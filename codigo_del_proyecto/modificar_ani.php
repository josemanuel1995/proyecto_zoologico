
<?php 

include("conexion.php");
$id=$_REQUEST['id'];
$fecha_ingreso= $_POST['fecha_ingreso'];
$tipo_animal= $_POST['tipo_animal'];
$descripcion= $_POST['descripcion'];
$peso= $_POST['peso'];
$estado= $_POST['estado'];
$zona_asignada= $_POST['zona_asignada'];
$lugar_llegada= $_POST['lugar_llegada'];
$nombre_encargado= $_POST['nombre_encargado'];


$query= "UPDATE animal SET  
fecha_ingreso='$fecha_ingreso',
tipo_animal='$tipo_animal',
descripcion='$descripcion',
peso='$peso',
estado='$estado',
zona_asignada='$zona_asignada',
lugar_llegada='$lugar_llegada',
nombre_encargado='$nombre_encargado' WHERE id='$id'";
$resultado= $conexion->query($query);


if($resultado){
	header("location:tablaanimal.php");
}
else{
	echo "conexion FAILED";
}

?>
