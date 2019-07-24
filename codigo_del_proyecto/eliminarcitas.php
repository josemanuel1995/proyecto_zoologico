  <?php 

include("conexion.php");
$id=$_REQUEST['id'];


$query= "DELETE FROM citas  WHERE id='$id'";
$resultado= $conexion->query($query);


if($resultado){
	header("location:tablacitas.php");
}
else{
	echo "conexion FAILED hola";
}

?>