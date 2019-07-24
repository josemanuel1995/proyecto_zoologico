<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="stylesheet" type="text/css" href="css/diseno.css"/>
 <link rel="stylesheet" type="text/css" href="css/formulario.css"/>
	<title>FormularioAtencion</title>
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
	
	$query="SELECT *FROM atencion WHERE id='$id'";
	$resultado= $conexion->query($query);
	$row=$resultado->fetch_assoc();
	?>
			
<div id="foranimal">
 <section class="formulario">
<form action="modificar_at.php?id=<?php echo $row['id'];?>" method="POST">
				
				
          <fieldset>
         <legend class="text-center header">Atencion citas</legend>
				

			  <div class="form-group">
			  <label class="control-label">Id</label>
			  <input type="number" disabled="disabled" name="id" class="form-control" value="<?php echo $row['id'];?>" required>
			  </div> 
			  
				<div class="form-group">
				<label class="control-label">Tipo de Animal:</label>
					<select class="form-control" name="tipo_animal" value="<?php echo $row['tipo_animal'];?>" required="**">
						<option>     </option>
						<option>Mamíferos</option>
						<option>Peces</option>
						<option>Aves</option>
						<option>Reptiles</option>
						<option>Anfibios</option>
						<option>acuaticos</option>
					</select>           
				</div>
			  
			  <div class="form-group">
				<label class="control-label">Descripcion animal</label>
              <input type="text" name="descripcion" class="form-control" value="<?php echo $row['descripcion'];?>" required>
			   </div>	
			   
			  <div class="form-group">
				<label class="control-label">Motivo de consulta</label>
              <input type="text" name="motivo_consulta" class="form-control" value="<?php echo $row['motivo_consulta'];?>" required>
			   </div>
			   
			   <div class="form-group">
				<label class="control-label">Diagnostico</label>
               <input type="text" name="diagnostico" class="form-control" value="<?php echo $row['motivo_consulta'];?>" required>
			    </div>
				
				<div class="form-group">
				<label class="control-label">Observaciones</label>
				<input type="text" name="observaciones" class="form-control" value="<?php echo $row['motivo_consulta'];?>" required>
				</div>
			  
				<div class="form-group">
				<label class="control-label">Tratamientos</label>
              <input type="text" name="tratamientos" class="form-control" value="<?php echo $row['motivo_consulta'];?>" required>
			  </div>				
                
<label><input type="submit" value="Guardar datos"></input></label>
				</form>
	</section>
	
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
</div>
</div>

</body>
</html>