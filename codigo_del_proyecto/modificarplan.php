<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="stylesheet" type="text/css" href="css/diseno.css"/>
 <link rel="stylesheet" type="text/css" href="css/formulario.css"/>
	<title>FormularioRegistro</title>
</head>
<body>

<div id="contenedor12">
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
		
<?php
	$id=$_REQUEST['id'];
	include("conexion.php");
	
	$query="SELECT *FROM solicitudplan WHERE id='$id'";
	$resultado= $conexion->query($query);
	 $row=$resultado->fetch_assoc();
	?>
		
<div id="foranimal">
 <section class="formulario">
<form id="formulario" action="modificar_plan.php?id=<?php echo $row['id'];?>" method="POST">
				
				
          <fieldset>
         <legend class="text-center header">Solicitudes de planes</legend>
				

			  <div class="form-group">
			  <label class="control-label">Nombre y Apellido</label>
			  <input type="text" name="nombre_apellido"  value="<?php echo $row['nombre_apellido'];?>"  class="form-control" required>
			  </div> 
			  
				<div class="form-group">					  
				<label class="control-label">Fecha de la solicitud</label>
              <input type="date" name="fecha"  value="<?php echo $row['fecha'];?>" class="form-control" required>
			  </div>
			  
			  	<div class="form-group">					  
				<label class="control-label">hora de la solicitud</label>
              <input type="time" name="hora"  value="<?php echo $row['hora'];?>" class="form-control" required>
			  </div>
			  
			  	<div class="form-group">					  
				<label class="control-label">Describa el plan a solicitar </label>
              <input type="text" name="descripcion"  value="<?php echo $row['descripcion'];?>" class="form-control" required>
			  </div>
			  
			  
			 
			   
			   <div class="form-group">
				<label class="control-label">Correo Electronico</label>
               <input type="text" name="correo"  value="<?php echo $row['correo'];?>" class="form-control" required>
			    </div>
			  
			
				
	
				
                
<label><input type="submit" value="Modificar datos"></input></label>
				</form>
	</section>
	
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
</div>
</div>

</body>
</html>