<script type="text/javascript">

const notif = { template: <?php include('php/components/notif.php');?> }

const msj = { template: <?php include('php/components/msj.php');?> }

const repo = { template: <?php include('php/components/repo.php');?> }

const general = { template: <?php include('php/components/general.php');?> }

const tablero = { template: <?php include('php/components/tablero.php');?> }

const repo_proyecto = { template: <?php include('php/components/repo_proyecto.php');?> }

const consultas = { template: <?php include('php/components/consultas.php');?> }


const routes = [
  { path: '/notif', component: notif },
  { path: '/msj', component: msj },
  { path: '/repo', component: repo },
  { path: '/repo_proyecto', component: repo_proyecto },
  { path: '/consultas', component: consultas },
  { path: '/tablero', component: tablero },
  { path: '/general', component: general }
]

const router = new VueRouter({
  routes // short for `routes: routes`
})

Vue.component('proyect-card', {
	props: ['nombre_proyecto','fecha','iniciado_por','progreso'],
	template: <?php include('php/elements/proyect-card.php');?>
})

Vue.component('msj-card',
{
	props: ['remitente','fecha','hora'],
	template: <?php include('php/elements/msj-card.php');?>
})

Vue.component('notif-card',
{
	props: ['contenido','asignado_por','proyecto','limite'],
	template: <?php include('php/elements/notif-card.php');?>
})

new Vue({
	el: '#app',
	router
})

new Vue({
	el: '#app2',
	router
})

</script>