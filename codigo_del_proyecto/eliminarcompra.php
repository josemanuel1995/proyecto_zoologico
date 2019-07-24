  <?php 

include("conexion.php");
$id=$_REQUEST['id'];


$query= "DELETE FROM compras  WHERE id='$id'";
$resultado= $conexion->query($query);


if($resultado){
	header("location:tablacompras.php");
}
else{
	echo "conexion FAILED";
}

?>
