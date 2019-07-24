<!DOCTYPE html>    
<html>
 <head>
 <meta charset="UTF-8">
 <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" type="text/css" href="css/formulario.css"/>
  <link rel="stylesheet" type="text/css" href="css/diseno.css"/>
   <!-- La linea de arriba es para importar estilos CSS a nuestro formulario -->
  <title>Formulario de citas</title>
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
	
	$query="SELECT *FROM citas WHERE id='$id'";
	$resultado= $conexion->query($query);
	$row=$resultado->fetch_assoc();
	?>
	
   <div id="foranimal">
  <section class="formulario">
   <form action="modificar_ci.php?id=<?php echo $row['id'];?>" method="post">
   
   
    <fieldset>
         <legend class="text-center header" >Registro De Citas Medicas</legend>
   
   

 <div class="form-group">
 <label class="control-label">id del Animal en la cita:</label>
 <input type="text" name="tipo_animal" class="form-control"  required="**"></div>
 
 
<div class="form-group">
 <label class="control-label">Descripcion del Animal:</label>
 <input type="text" name="descripcion" class="form-control" value="<?php echo $row['descripcion'];?>"  required="**"></div>
 
 
 <div class="form-group">
 <label class="control-label">Razon De La Cita:</label>
 <input type="text" name="razon_citas" class="form-control" 
value="<?php echo $row['razon_citas'];?>" required="**"></div>
 
   <div class="form-group">
 <label class="control-label">Tipo de Cita:</label>
 <select class="form-control" name="tipo_cita" value="<?php echo $row['tipo_cita'];?>" required="**">
			<option>     </option>
            <option>General</option>
            <option>Prioritaria</option>
			<option>urgencias</option>
        </select>           
</div>
 
 <div class="form-group">
 <label class="control-label">Fecha De La Cita:</label>
  <input type="date" name="fecha_cita" class="form-control" value="<?php echo $row['fecha_cita'];?>"   required="**">
 </div>
 
 <div class="form-group">
 <label class="control-label">Hora De La Cita:</label>
  <input type="time" name="hora_cita" class="form-control"
value="<?php echo $row['hora_cita'];?>"  required="**">
 </div>
 
 
 <div class="form-group">
 <label class="control-label">Encargado del Animal:</label>
 <input  type="text" name="encargado_del_animal" class="form-control" value="<?php echo $row['encargado_del_animal'];?>" required="**"></div>
 
 <div class="form-group">
 <label class="control-label">Veterinario Que Atendera La Cita:</label>
 <input  type="text" name="nombre_veterinario" class="form-control" value="<?php echo $row['nombre_veterinario'];?>" required="**"></div>
 
 <br>

 <input id="submit" type="submit" name="submit" value="Modificar Datos">
</form>

  </section>

  
  <script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>

  </div>
  </div>
 </body>
</html>