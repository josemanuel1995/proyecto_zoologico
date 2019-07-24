  <?php 

include("conexion.php");
$id=$_REQUEST['id'];


$query= "DELETE FROM planes  WHERE id='$id'";
$resultado= $conexion->query($query);


if($resultado){
	header("location:tablaplan2.php");
}
else{
	echo "conexion FAILED hola";
}

?>