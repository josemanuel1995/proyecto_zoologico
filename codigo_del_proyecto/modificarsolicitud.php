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
	
	$query="SELECT *FROM solicitudcitas WHERE id='$id'";
	$resultado= $conexion->query($query);
	 $row=$resultado->fetch_assoc();
	?>
	
			
<div id="foranimal">
 <section class="formulario">
<form action="modificar_soli.php?id=<?php echo $row['id'];?>" method="POST">
				
				
          <fieldset>
         <legend class="text-center header">Modifica Citas</legend>
					  <div class="form-group">
			  <label class="control-label">Id animal</label>
			  <input type="text" name="id_animal" value="<?php echo $row['id_animal'];?>" class="form-control" required>
			  </div> 

			  <div class="form-group">
			  <label class="control-label">Id Personal</label>
			  <input type="text" name="id_personal" value="<?php echo $row['id_personal'];?>" class="form-control" required>
			  </div> 
			  
				<div class="form-group">
				<label class="control-label">zona del personal</label>
				<select class="form-control" value="<?php echo $row['zona_personal'];?>" name="zona_personal">
				<option value="...">     </option>
				<option value="desierto">Desierto </option>
				<option value="patizales">Pastizales </option>
				<option value="tundra">Tundra </option>
				<option value="avario">Aviario </option>
				<option value="Anfibios">Anfibios</option>
				<option value="Anfibios">acuaticos</option>
				
				</select></div>
			  
			  <div class="form-group">
				<label class="control-label">fecha</label>
              <input type="date" name="fecha" value="<?php echo $row['fecha'];?>" class="form-control" required>
			   </div>
			   
			   <div class="form-group">
				<label class="control-label">hora</label>
               <input type="time" name="hora" value="<?php echo $row['hora'];?>" class="form-control" required>
			    </div>
			  
			  <div class="form-group">
				<label class="control-label">razon de la cita</label>
              <input type="text" name="razon_cita" class="form-control" value="<?php echo $row['razon_cita'];?>" required>
			  </div>
			  
			     <div class="form-group">
 <label class="control-label">Tipo de Cita:</label>
 <select class="form-control" name="tipo_cita" required="**">
			<option>     </option>
            <option>Cita General</option>
            <option>Cita Prioritaria</option>
			<option>Cita Urgencias</option>
        </select>           
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