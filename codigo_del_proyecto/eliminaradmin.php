  <?php 

include("conexion.php");
$id=$_REQUEST['id'];


$query= "DELETE FROM admin  WHERE id='$id'";
$resultado= $conexion->query($query);


if($resultado){
	header("location:tablaadmin.php");
}
else{
	echo "conexion FAILED";
}

?>