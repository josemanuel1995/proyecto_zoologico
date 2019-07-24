  <?php 

include("conexion.php");
$id=$_REQUEST['id'];


$query= "DELETE FROM solicitudcitas  WHERE id='$id'";
$resultado= $conexion->query($query);


if($resultado){
	header("location:tablasoli.php");
}
else{
	echo "conexion FAILED";
}

?>