  <?php 

include("conexion.php");
$id=$_REQUEST['id'];


$query= "DELETE FROM parqueo  WHERE id='$id'";
$resultado= $conexion->query($query);


if($resultado){
	header("location:tablaparque.php");
}
else{
	echo "conexion FAILED hola";
}

?>