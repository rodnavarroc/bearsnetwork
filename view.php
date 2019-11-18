<?php
	include 'php/functions/sessions.php';
	
	
?>  
<!DOCTYPE html>
<html>
<head>
	<title>Bears Network</title>
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
	
		<div id="main-t">
			<div id ="menu">
				<span onclick="openNav()">&#9776;</span>
			</div>
		
			<div id = "bearsnetwork">
				<a class="navbar-brand" href="#">Bears Network</a>
			</div>
		</div>
 
	</nav>

	<div id="app2" class="container">
		<div id="mySidenav" class="sidenav">
			<center><a id ="est-miproy" href="#">Mi Proyecto</a></center>
			<span onclick="openNav()"><router-link to="/general" class = "prueba"><img src ="img/overview.png" class="img-fluid">Vista general</router-link></span>
			<span onclick="openNav()"><router-link to="/tablero" class = "prueba"><img src ="img/tablero.png" class="img-fluid">Tablero</router-link></span>
			<span onclick="openNav()"><router-link to="/repo_proyecto" class = "prueba"><img src ="img/repo.png" class="img-fluid">Repositorio</router-link></span>
			<span onclick="openNav()"><router-link to="/consultas" class = "prueba"><img src ="img/queries.png" class="img-fluid">Consultas</router-link></span>
			<hr>
			<a class = "prueba" href="#"> <img src ="img/config.png" class="img-fluid">Configuración</a>
		</div>
	</div>
	
	<div id="foto1" class = "container" style = "visibility: hidden; position: absolute; top: -9999px; margin-left: 25%; margin-top: 3%;">
		<center><img src = "img/tought.png" class ="img-fluid"></center>
	</div>

	<div id="app" class="container-fluid">
		<div class="row">
			<div class="col-sm" style="padding-top: 2%;">
			<router-view></router-view>
		</div>

		<div class="d-block d-sm-block d-md-none">
			<br>
		</div>

		<div class="col-lg-2" style="background-color: #f2f2f2; padding: 0% 1%;">
			<br><br>
			<center><img src="<?php echo "users/" . $_SESSION['nickname'] . "/" . $_SESSION['image']; ?>" class="img-fluid" width="50%;"></center>
			<br>
			<h4><center><?php echo $_SESSION['name']; ?></center></h4>
			<h6><center><?php echo $_SESSION['dependencia'] ?></center></h6>
			<br><hr><br>

			<h5><center><router-link to="/notif">Notificaciones</router-link></center></h5><br>
			<h5><center><router-link to="/msj">Mensajes</router-link></center></h5><br>
			<h5><center><router-link to="/repo">Mi repositorio</router-link></center></h5><br>
			<h5><center><a href="index.php?cerrar_sesion=true">Cerrar sesion</a></center></h5><br>

				<br><br>
			</div>
		</div>
	</div>

<?php 
include('js/app.php');
?>

</body>
</html>