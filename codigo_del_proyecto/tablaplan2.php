<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="stylesheet" type="text/css" href="css/diseno.css"/>
  <link rel="stylesheet" type="text/css" href="css/formulario.css"/>
	<title>mostrar datos</title>
</head>
<body>

<div id="contenedor5">

<nav id="men" class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">navegador</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="index.html">ZooMani </a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
	  
	 
		<li ><a href="index.html"><font id="uno" face="Comic Sans MS,Arial,Verdana" color="white">Inicio</font></a></li>
        <li ><a href="ofertaplan.html"><font face="Comic Sans MS,Arial,Verdana" color="white">Compras online</font></a></li>
		<li ><a href="animal.html"><font face="Comic Sans MS,Arial,Verdana" color="white">Animales</font></a></li>
		<li ><a href="accederht.html"><font face="Comic Sans MS,Arial,Verdana" color="white">Acceder</font></a></li>
             
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
			

  
 <div class="container">
<div class="  col-xs-10 col-sm-10 col-md-10 col-lg-10">
<div class="table-responsive"> <!para que nuestra tabla se adapte a dispositivos moviles>
<table class="table table-bordered table-hover table-condensed">

	<thead>
	<tr>
	<th colspan="1" class="active success"><a href="forplan2.html"> Nuevo Registro</a> 
	<th colspan="10" class="active success"><center>Lista planes nuevos </th></center>
	</tr>
	
	</thead>
	<tbody>
	<tr class="active danger">
	<td>id</td>
	<td>Nombre Del Plan</td>
	<td>Preco Del Plan</td>
	<td>Limite de personas</td>
	<td>Duracion del plan</td>
	<td>hora de inicio y fin del plan</td>
	
	<td colspan="2">Operaciones</td>
	
	</tr>
	<?php
	include("conexion.php");
	$query="SELECT *FROM planes";
	$resultado= $conexion->query($query);
	while($row=$resultado->fetch_assoc()){
	?>
	<tr>
	<td><?php echo $row['id'];?></td>
	<td><?php echo $row['nombre'];?></td>
	<td><?php echo $row['precio'];?></td>
	<td><?php echo $row['limite'];?></td>
	<td><?php echo $row['duracion'];?></td>
	<td><?php echo $row['hora_ini_fin'];?></td>
	
	<td><a href="modificarplan2.php?id=<?php echo $row['id'];?>"><img src="editar.png" class="img-responsive" align="center"></a></td>
	<td><a href="eliminarplan2.php?id=<?php echo $row['id'];?>"><img src="eliminar.png" class="img-responsive" align="center"></a></td>
	</tr>
	<?php
	}
	?>
	
	</tbody> 
	</table>
</center>
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>