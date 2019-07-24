 <?php 

include("conexion.php");
$id=$_REQUEST['id'];
$id=$_POST['id'];
$tipo_animal=$_POST['tipo_animal'];
$descripcion=$_POST['descripcion'];
$motivo_consulta=$_POST['motivo_consulta'];
$diagnostico=$_POST['diagnostico'];
$observaciones=$_POST['observaciones'];
$tratamientos=$_POST['tratamientos'];

$query= "UPDATE atencion SET  
id='$id',
tipo_animal='$tipo_animal',
descripcion='$descripcion',
motivo_consulta='$motivo_consulta',
diagnostico='$diagnostico',
observaciones='$observaciones',
tratamientos='$tratamientos'
WHERE id='$id'";
$resultado= $conexion->query($query);


if($resultado){
	header("location:tablaatencion.php");
}
else{
	echo "conexion FAILED";
}

?>
