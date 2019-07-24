 <?php 

include("conexion.php");
$id=$_REQUEST['id'];
$nombre= $_POST['nombre'];
$apellido= $_POST['apellido'];
$username= $_POST['username'];
$password= $_POST['password'];
$zona= $_POST['zona'];
$telefono= $_POST['telefono'];
$horas= $_POST['horas'];
$dias= $_POST['dias'];

$query= "UPDATE personal SET  nombre='$nombre',apellido='$apellido',
username='$username',
password='$password',
zona='$zona',
telefono='$telefono',horas='$horas',dias='$dias'  WHERE id='$id'";
$resultado= $conexion->query($query);


if($resultado){
	header("location:tablapersonal.php");
}
else{
	echo "conexion FAILED";
}

?>
