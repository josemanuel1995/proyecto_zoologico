  <?php 

include("conexion.php");
$id=$_REQUEST['id'];


$query= "DELETE FROM personal  WHERE id='$id'";
$resultado= $conexion->query($query);


if($resultado){
	header("location:tablapersonal.php");
}
else{
	echo "conexion FAILED";
}

?>
