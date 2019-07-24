  <?php 

include("conexion.php");
$id=$_REQUEST['id'];


$query= "DELETE FROM veterinario  WHERE id='$id'";
$resultado= $conexion->query($query);


if($resultado){
	header("location:tablaveterinario.php");
}
else{
	echo "conexion FAILED";
}

?>
