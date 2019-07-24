<?php

try{
	$base=new PDO("mysql:host=localhost; dbname=zoomani","root","88888888");
	
	$base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$sql ="SELECT * FROM personal WHERE username=:username AND password=:password";

$resultado=$base->prepare($sql);

$username=htmlentities(addslashes($_POST["username"]));
$password=htmlentities(addslashes($_POST["password"]));

$resultado->bindvalue(":username",$username);
$resultado->bindvalue(":password",$password);

$resultado->execute();

$numero_registro=$resultado->rowCount();

if($numero_registro!=0){
	header("location:vistapersonal.html");
 
}else{
	header("location:loginpersonal.html");
}

}catch(Exception $e){
	die ("error:" . $e->getMessage());
}
?>