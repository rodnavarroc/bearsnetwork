`
			<div class="text-dark" style="padding: 0% 3%; background-color: transparent;">
				<div class="d-block d-sm-block d-md-none"><br></div>

				<br><center><h4 class="text-dark">Mi Proyecto</h4></center>
				
				<div class="container-fluid" style="padding: 0% 0% 0% 0%;">
					<div class="row">
						<div class="col-12">
							<h5>Tareas pendientes</h5>
						</div>
					</div>
					<div class="row">
						<div class="col-12">
							<table class="table table-primary">
								<tbody>
									<tr>
										<td>Crear script PHP para el HTML de inicio de sesión</td>
										<td>Asignado a: Luis</td>
										<td>Hasta: 19/oct</td>
										<td><center><button class="btn btn-outline-primary bg-light text-dark" onclick="">Marcar como completada</button></center></td>
									</tr>
									<tr>
										<td>Crear script PHP para el HTML de inicio de sesión</td>
										<td>Asignado a: Luis</td>
										<td>Hasta: 19/oct</td>
										<td><center><center><button class="btn btn-outline-primary bg-light text-dark" onclick="">Marcar como completada</button></center></center></td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
				</div>

					<div class="row">
						<div class="col-12"><br>
							<h5>Tareas completadas</h5>
						</div>
					</div>
					<div class="row">
						<div class="col-12">
							<table class="table table-warning">
								<tbody>
									<tr>
										<td>Crear script PHP para el HTML de inicio de sesión</td>
										<td>Completada por: Rodolfo</td>
										<td>Subida el: 19/oct</td>
										<td><center><center><button class="btn btn-outline-warning bg-light text-dark" onclick="">Reportar error</button></center></center></td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>

					<div class="row">
						<div class="col-12"><br>
							<h5>Errores / correciones</h5>
						</div>
					</div>
					<div class="row">
						<div class="col-12">
							<table class="table table-danger">
								<tbody>
									<tr>
										<td>Crear script PHP para el HTML de inicio de sesión</td>
										<td>Asignado a: Todos</td>
										<td>Hasta: 19/oct</td>
										<td><center><center><button class="btn btn-outline-danger bg-light text-dark" onclick="">Marcar como corregido</button></center></center></td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>

				<br><center><b-button class="btn btn-outline-dark bg-light text-dark" v-b-modal.modal-1>Crear nueva tarea</b-button></center>

				<b-modal id="modal-1" title="Nueva Tarea" hide-footer="true">
								<form action="xd.php">
									<div class="form-group">
										<label>Descripción</label>
										<input id="nombre_tarea" type="text" class="form-control" type="text" placeholder="Ingrese aquí la descrpción" required="true">
									</div>
									<div class="form-group">
										<label>Asignar a</label>
										<select class="custom-select" id="asignar_a" required="true">
											<option>Rodolfo</option>
											<option>Luis</option>
											<option>David</option>
											<option>Todos</option>
										</select>
									</div>
									<center><button type="submit" class="btn btn-outline-primary">Crear</button></center>
								</form>
							</b-modal>
			</div>
`