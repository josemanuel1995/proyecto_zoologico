  <?php 

include("conexion.php");
$id=$_REQUEST['id'];


$query= "DELETE FROM animal  WHERE id='$id'";
$resultado= $conexion->query($query);


if($resultado){
	header("location:tablaanimal.php");
}
else{
	echo "conexion FAILED";
}

?>
