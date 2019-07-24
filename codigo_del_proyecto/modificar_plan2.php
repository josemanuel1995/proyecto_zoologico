 <?php 

include("conexion.php");
$id=$_REQUEST['id'];
$nombre= $_POST['nombre'];
$precio= $_POST['precio'];
$limite= $_POST['limite'];
$duracion= $_POST['duracion'];
$hora_ini_fin= $_POST['hora_ini_fin'];


$query= "UPDATE planes SET 
nombre='$nombre',
precio='$precio',
limite='$limite',
duracion='$duracion',
hora_ini_fin='$hora_ini_fin'
WHERE id='$id'";
$resultado= $conexion->query($query);


if($resultado){
	header("location:tablaplan2.php");
}
else{
	echo "conexion FAILED";
}

?>