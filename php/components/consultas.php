`
			<div class="text-dark" style="padding: 0% 3%; background-color: transparent;">
				<div class="d-block d-sm-block d-md-none"><br></div>

				<br><center><h4 class="text-dark">Mi Proyecto</h4></center>
				
				<div class="container-fluid" style="padding: 0% 0% 3% 0%;">
					<div class="row">
						<div class="col-12">
							<h5>Consultas</h5>
						</div>
					</div>
					<div class="row">
						<div class="col-12">
							<table class="table table-warning">
								<tbody>
									<tr>
										<td>Buscar como hacer una linea del tiempo</td>
										<td><center><b-button class="btn btn-outline-dark bg-light text-dark" v-b-modal.modal-1>Responder consulta</b-button></center></td>
									</tr>
									<tr>
										<td>Buscar como hacer una linea del tiempo</td>
										<td><center><b-button class="btn btn-outline-dark bg-light text-dark" v-b-modal.modal-1>Responder consulta</b-button></td>
									</tr>
								</tbody>
							</table>

							<b-modal id="modal-1" title="Nombre de la consulta" hide-footer="true">
								<form action="xd.php">
									<div class="form-group">
										<label>Respuesta</label>
										<textarea class="form-control" type="text" placeholder="Ingrese aquí la respuesta" required="true"></textarea>
									</div>
									<center><button type="submit" class="btn btn-outline-primary">Enviar</button></center>
								</form>
							</b-modal>

						</div>
					</div>

					<div class="row">
						<div class="col-12"><br>
							<h5>Consultas resueltas</h5>
						</div>
					</div>
					<div class="row">
						<div class="col-12">
							<table class="table table-success">
								<tbody>
									<tr>
										<td>Buscar como hacer una linea del tiempo</td>
										<td><center><b-button class="btn btn-outline-dark bg-light text-dark" v-b-modal.r-modal-1>Ver respuesta</b-button></center></td>
									</tr>
								</tbody>
							</table>

							<b-modal id="r-modal-1" title="Nombre de la consulta" hide-footer="true">
								<form action="xd.php">
									<div class="form-group">
										<label>Respuesta</label>
										<textarea class="form-control" type="text" required="true" readonly="true">La respuesta aquí</textarea>
									</div>
									<center><button type="submit" class="btn btn-outline-primary">Enviar</button></center>
								</form>
							</b-modal>
						</div>
					</div>

					<br><center><b-button class="btn btn-outline-dark bg-light text-dark" v-b-modal.c-modal-1>Crear nueva consulta</b-button></center>

					<b-modal id="c-modal-1" title="Nueva Tarea" hide-footer="true">
								<form action="xd.php">
									<div class="form-group">
										<label>Consulta</label>
										<input id="nombre_tarea" type="text" class="form-control" type="text" placeholder="Ingrese aquí la consulta" required="true">
									</div>
									<center><button type="submit" class="btn btn-outline-primary">Crear</button></center>
								</form>
							</b-modal>
				</div>
`