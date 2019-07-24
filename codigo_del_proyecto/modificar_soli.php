 <?php 

include("conexion.php");
$id=$_REQUEST['id'];
$id_animal= $_POST['id_animal'];
$id_personal= $_POST['id_personal'];
$zona_personal= $_POST['zona_personal'];
$fecha= $_POST['fecha'];
$hora= $_POST['hora'];
$razon_cita= $_POST['razon_cita'];
$tipo_cita= $_POST['tipo_cita'];

$query= "UPDATE solicitudcitas SET 
id_animal='$id_animal',
id_personal='$id_personal',
zona_personal='$zona_personal',
fecha='$fecha',
hora='$hora',
razon_cita='$razon_cita',
tipo_cita='$tipo_cita' WHERE id='$id'";
$resultado= $conexion->query($query);


if($resultado){
	header("location:tablasoli.php");
}
else{
	echo "conexion FAILED";
}

?>
