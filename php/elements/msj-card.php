`
		<div><b-button class="container-fluid btn btn-outline-success bg-light text-dark" v-b-modal.m-modal-1><div style="padding-top: 1%;" >
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
				</div></b-button>

				<b-modal id="m-modal-1" title="Mensaje de Luis en Mi Proyecto" hide-footer="true">
								<form action="xd.php">
									<div class="form-group">
										<label>Mensaje</label><br>
										<textarea class="form-control" type="text" required="true" readonly="true">Agregar campo faltante en la base de datos</textarea>
									</div>
									<div class="form-group">
										<label>Su respuesta</label><br>
										<textarea class="form-control" type="text">Simon voy</textarea>
									</div>
										<center>
											<button class="btn btn-outline-primary">Responder mensaje</button>
											<button class="btn btn-outline-danger">Eliminar mensaje</button>
										</center>
								</form>
							</b-modal>
			</div>
	`