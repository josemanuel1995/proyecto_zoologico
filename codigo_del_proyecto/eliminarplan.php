  <?php 

include("conexion.php");
$id=$_REQUEST['id'];


$query= "DELETE FROM solicitudplan  WHERE id='$id'";
$resultado= $conexion->query($query);


if($resultado){
	header("location:tablaplan.php");
}
else{
	echo "conexion FAILED";
}

?>
