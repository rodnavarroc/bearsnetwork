const notif = { template: `
			<div style="padding: 0% 3%; background-color: transparent;">	
				<div class="d-block d-sm-block d-md-none">
					<br>
				</div>

				<center><h4>Notificaciones</h4></center><br>
				
				<notif-card
					contenido="Agregar campo faltante en tabla usuarios de la base de datos"
					asignado_por="Luis Guerrero"
					proyecto="Mi Proyecto"
					limite="12/nov/2019"
				></notif-card>
				<br>

				<div class="d-block d-sm-block d-md-none">
					<br>
				</div>
			</div>` }

const msj = { template: `
			<div style="padding: 0% 3%; background-color: transparent;">	
				<div class="d-block d-sm-block d-md-none">
					<br>
				</div>

				<center><h4>Mensajería</h4></center><br>
				
				<msj-card
					remitente="Luis Guerrero"
					fecha="29/sep/2019"
					hora="17:24"
				></msj-card>
				<br>

				<msj-card
					remitente="David Reyes"
					fecha="29/sep/2019"
					hora="19:51"
				></msj-card>
				<br>

				<div class="d-block d-sm-block d-md-none">
					<br>
				</div>
			</div>` }

const repo = { template: `
			<div style="padding: 0% 3%; background-color: transparent;">	
				<div class="d-block d-sm-block d-md-none">
					<br>
				</div>

				<center><h4>Repositorio de proyectos</h4></center><br>
				
				<proyect-card
					nombre_proyecto="Mi Proyecto"
					fecha="Inició el 29/sep/2019"
					iniciado_por="Iniciado por Luis Guerrero"
					progreso=25
				></proyect-card>
				<br>

				<proyect-card
					nombre_proyecto="Mi Proyecto 2"
					fecha="Inició el 12/oct/2019"
					iniciado_por="Iniciado por Rodolfo Navarro"
					progreso=60
				></proyect-card>
				<br><br>

				<div class="d-block d-sm-block d-md-none">
					<br>
				</div>
			</div>
` }

const routes = [
  { path: '/notif', component: notif },
  { path: '/msj', component: msj },
  { path: '/repo', component: repo }
]

const router = new VueRouter({
  routes // short for `routes: routes`
})

Vue.component('proyect-card', {
	props: ['nombre_proyecto','fecha','iniciado_por','progreso'],
	template: `
		<a href=""><div class="container-fluid btn btn-outline-secondary text-dark" style="padding-top: 1%;">
					<div class="row">
						<div class="col-sm">
							<center><h5>{{nombre_proyecto}}</h5></center>
						</div>
						<div class="col-sm">
							<center><h6>{{fecha}}</h6></center>
						</div>
						<div class="col-sm">
							<center><h6>{{iniciado_por}}</h6></center>
						</div>
						<div class="col-sm">
							<center><h6>Progreso</h6></center>
						</div>
						<div class="col-sm">
							<div class="progress" style="height: 25px;">
							  <div class="progress-bar bg-success" role="progressbar" :style="{width: progreso + '%'}" :aria-valuenow="progreso" aria-valuemin="0" aria-valuemax="100">{{progreso}}%</div>
							</div>
						</div>
					</div>
				</div></a>
	`
})

Vue.component('msj-card',
{
	props: ['remitente','fecha','hora'],
	template: `
		<a href=""><div class="container-fluid btn btn-outline-success text-dark" style="padding-top: 1%;">
					<div class="row">
						<div class="col-sm">
							<center><h5>Mensaje de {{remitente}}</h5></center>
						</div>
						<div class="col-sm">
							<center><h6>{{fecha}}</h6></center>
						</div>
						<div class="col-sm">
							<center><h6>{{hora}}</h6></center>
						</div>
					</div>
				</div></a>
	`
})

Vue.component('notif-card',
{
	props: ['contenido','asignado_por','proyecto','limite'],
	template: `
		<a href=""><div class="container-fluid btn btn-outline-warning text-dark" style="padding-top: 1%;">
					<div class="row">
						<div class="col-sm">
							<center><h5>{{contenido}}</h5></center>
						</div>
						<div class="col-sm">
							<center><h6>Te asignó {{asignado_por}}</h6></center>
						</div>
						<div class="col-sm">
							<center><h6>Proyecto: {{proyecto}}</h6></center>
						</div>
						<div class="col-sm">
							<center><h6>Límite: {{limite}}</h6></center>
						</div>
					</div>
				</div></a>
	`
})

new Vue({
	el: '#app',
	router
})

new Vue({
	el: '#app2',
	router
})
