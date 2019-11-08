<!DOCTYPE html>
<html>
<head>
	<title>Bears Network</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<script src="js/vue.min.js"></script>
	<script src="js/vue-router.js"></script>
	<link rel="stylesheet" type="text/css" href="css/estilo_principal.css">
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
			<a class = "prueba" href="#"> <img src ="img/overview.png" class="img-fluid">Vista general</a>
			<a class = "prueba" href="#"> <img src ="img/tablero.png" class="img-fluid">Tablero</a>
			<a class = "prueba" href="#"> <img src ="img/repo.png" class="img-fluid">Repositorio</a>
			<span onclick="openNav()"><router-link to="/msj" class = "prueba"><img src ="img/queries.png" class="img-fluid">Consultas</router-link></span>
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

		<div class="col-lg-2 align-self-end" style="background-color: #f2f2f2; padding: 0% 1%;">
			<br><br>
			<center><img src="img/perfil.png" class="img-fluid" width="50%;"></center>
			<br>
			<h4><center>Rodolfo Navarro</center></h4>
			<h6><center>Facultad de Ingeniería Mecánica y Eléctrica</center></h6>
			<br><hr><br>

			<h5><center><router-link to="/notif">Notificaciones</router-link></center></h5><br>
			<h5><center><router-link to="/msj">Mensajes</router-link></center></h5><br>
			<h5><center><router-link to="/repo">Mi repositorio</router-link></center></h5><br>

			<br><br>
		</div>
	</div>
</div>

<script src="js/app.js"></script>
</body>
</html>