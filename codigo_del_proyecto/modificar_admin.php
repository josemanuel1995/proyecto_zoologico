 <?php 

include("conexion.php");
$id=$_REQUEST['id'];
$nombre= $_POST['nombre'];
$apellido= $_POST['apellido'];
$username= $_POST['username'];
$password= $_POST['password'];

$query= "UPDATE admin SET  
nombre='$nombre',
apellido='$apellido',
username='$username',
password='$password' WHERE id='$id'";
$resultado= $conexion->query($query);


if($resultado){
	header("location:tablaadmin.php");
}
else{
	echo "conexion FAILED";
}

?>