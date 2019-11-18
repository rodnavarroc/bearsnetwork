 `
		<a href="">
			<div class="container-fluid btn btn-outline-secondary text-dark" style="padding-top: 1%;">
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
			</div>
		</a>
	`