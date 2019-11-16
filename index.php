<!DOCTYPE html>
<html>
<head>
	<title>Bears Network | Inicio</title>
	<meta charset="utf-8">
    
	<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css" />
	<link type="text/css" rel="stylesheet" href="css/bootstrap-vue.min.css" />
	<link rel="stylesheet" type="text/css" href="css/estilo_principal.css" />

	<script src="js/vue.min.js"></script>
	<script src="js/bootstrap-vue.min.js"></script>
	<script src="js/vue-router.js"></script>
	<script src="js/lateral_izq.js"></script>
	
</head>
<body>

<nav class="navbar sticky-top navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Bears Network</a>
</nav>

<div id="app2" class="container" style="padding-top: 3%;">

	<div class="row">
		<div class="col-sm">
			<center><h1 style="font-weight: lighter;">¡Bienvenido/a Bears Network!</h1></center><br>
		</div>
	</div>

		<div class="row">
		    <div class="col-sm text-dark" style="padding: 2% 10%;">
		      	<br><h3>Iniciar Sesión</h3>
		      	<form action="">
				  <div class="form-group">
				    <label for="exampleInputEmail1">Nombre de usuario</label>
				    <input type="text" class="form-control" id="usuario" placeholder="Usuario">
				  </div>
				  <div class="form-group">
				    <label for="exampleInputPassword1">Contraseña</label>
				    <input type="password" class="form-control" id="password" placeholder="Contraseña">
				  </div><br>
				 <center><button type="submit" class="btn btn-lg btn-primary" style="padding: 1% 5%;">Ingresar</button></center>
				</form>
				<br><br>
	  		</div>

	  		<div class="col-sm">
	  			<center><img src="img/tought.png" class="img-fluid" width="100%;"></center>
	  		</div>
	  </div>

	  <div class="row">
		  <div class="col-sm">
		    <center><h2 style="font-weight: lighter;">¿Aún no registrado/a?</h2></center><br>
		    <center><b-button class="btn btn-lg btn-outline-dark bg-light text-dark" v-b-modal.rg-modal-1>Empiece aquí</b-button></center>

		    <b-modal id="rg-modal-1" title="Registrar nueva cuenta" hide-footer="true">
								<form action="xd.php">
									<div class="form-group">
										<label>Nombre completo</label>
										<input id="nombre" type="text" class="form-control" type="text" placeholder="Juan Pérez" required="true">
									</div>
									<div class="form-group">
										<label>Correo electrónico</label>
										<input id="password" type="email" class="form-control" type="text" placeholder="" required="true">
									</div>
									<div class="form-group">
										<label>Contraseña</label>
										<input id="password" type="password" class="form-control" type="text" placeholder="" required="true">
									</div>
									<div class="form-group">
										<label>Afiliación (universidad, facultad o empresa)</label>
										<input id="afiliacion" type="text" class="form-control" type="text" placeholder="UANL" required="true">
									</div>
									<div class="form-group">
									    <label for="exampleFormControlFile1">Subir foto de perfil</label>
									    <input type="file" class="form-control-file" id="exampleFormControlFile1">
									  </div>
									<center><button type="submit" class="btn btn-outline-primary">Crear</button></center>
								</form>
							</b-modal>
		  </div>
	  </div>
</div>

<div class="container" style="padding-top: 40px;">
	<hr><br>
	<h5><center><p style="text-align: center;">Bears Network es una plataforma de colaboración que permite desarrollar proyectos en conjuntos a través de herramientas útiles y desarrolladas especialmente para satisfacer las necesidades de cualquier equipo profesional o académico.</p></center></h5>
</div>

<br><br>

<?php 
include('js/app.php');
?>

</body>
</html>