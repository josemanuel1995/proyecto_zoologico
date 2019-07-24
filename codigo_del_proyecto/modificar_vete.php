 <?php 

include("conexion.php");
$id=$_REQUEST['id'];
$nombre= $_POST['nombre'];
$apellido= $_POST['apellido'];
$username= $_POST['username'];
$password= $_POST['password'];
$cargo= $_POST['cargo'];
$dias_atencion= $_POST['dias_atencion'];
$horas_atencion= $_POST['horas_atencion'];


$query= "UPDATE veterinario SET  
nombre='$nombre',
apellido='$apellido',
username='$username',
password='$password',
cargo='$cargo',
dias_atencion='$dias_atencion',
horas_atencion='$horas_atencion'
 WHERE id='$id'";
$resultado= $conexion->query($query);


if($resultado){
	header("location:tablaveterinario.php");
}
else{
	echo "conexion FAILED";
}

?>
