<!DOCTYPE html>    
<html>
 <head>
 <meta charset="UTF-8">
 <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" type="text/css" href="css/formulario.css"/>
  <link rel="stylesheet" type="text/css" href="css/diseno.css"/>
   <!-- La linea de arriba es para importar estilos CSS a nuestro formulario -->
  <title>Formulario de contacto</title>
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
	
	$query="SELECT *FROM animal WHERE id='$id'";
	$resultado= $conexion->query($query);
	$row=$resultado->fetch_assoc();
	?>
	
	
  
 <div id="foranimal">
  <section class="formulario">
   <form action="modificar_ani.php?id=<?php echo $row['id'];?>" method="post">
   
    <fieldset>
         <legend class="text-center header" >Registrar Animal</legend>
   
   
 <div class="form-group">  
<label class="control-label">Fecha de Ingreso:</label>
 <input type="date" name="fecha_ingreso" class="form-control" value="<?php echo $row['fecha_ingreso'];?>" required="**" /></div>
 
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
 <label class="control-label">Descripcion del Animal:</label>
 <input type="text" name="descripcion" class="form-control" value="<?php echo $row['descripcion'];?>" required="**" /></div>
 
 <div class="form-group">
 <label class="control-label">Peso del Animal:</label>
  <input type="text" name="peso" class="form-control" value="<?php echo $row['peso'];?>" required="**">
 </div>
 
 <div class="form-group">
 <label class="control-label">Estado del Animal:</label>
     <select class="form-control" name="estado" value="<?php echo $row['estado'];?>" required="**">
			<option>     </option>
            <option>Optimo</option>
            <option>Revisar</option>


        </select>

 </div>
 
<div class="form-group">
 <label class="control-label">Zona Asignada:</label>
<select class="form-control" name="zona_asignada" required="**">
		<option value="...">     </option>
				<option value="">Africa </option>
				<option value="">America </option>
				<option value="">Asia </option>
				<option value="">Europa </option>
				<option value="">Oceanía</option>
				<option value="">Antártida</option></select></div>
 
 <div class="form-group">
 <label class="control-label">lugar de Llegada:</label>
 <input  type="text" name="lugar_llegada" class="form-control" value="<?php echo $row['lugar_llegada'];?>" required="**" /></div>
 
 <div class="form-group">
 <label class="control-label">Encargado:</label>
 <input  type="text" name="nombre_encargado" class="form-control"  value="<?php echo $row['nombre_encargado'];?>" required="**" /></div>
 
 <br>

 <input id="submit" type="submit" name="submit" value="Enviar" />
</form>

  </section>

  
  <script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>

  </div>
  </div>
 </body>
</html>