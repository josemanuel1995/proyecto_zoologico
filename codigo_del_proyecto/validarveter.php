<?php

try{
	$base=new PDO("mysql:host=localhost; dbname=zoomani","root","88888888");
	
	$base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$sql ="SELECT * FROM veterinario WHERE username=:username AND password=:password";

$resultado=$base->prepare($sql);

$username=htmlentities(addslashes($_POST["username"]));
$password=htmlentities(addslashes($_POST["password"]));

$resultado->bindvalue(":username",$username);
$resultado->bindvalue(":password",$password);

$resultado->execute();

$numero_registro=$resultado->rowCount();

if($numero_registro!=0){
	header("location:vistavete.html");
 
}else{
	header("location:loginveterinario.html");
}

}catch(Exception $e){
	die ("error:" . $e->getMessage());
}
?>