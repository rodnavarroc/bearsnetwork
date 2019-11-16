`
		<div><b-button class="container-fluid btn btn-outline-primary bg-light text-dark" v-b-modal.c-modal-1><div style="padding-top: 1%;" >
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
				</div></b-button>

			<b-modal id="c-modal-1" title="Notificación de Luis en Mi Proyecto" hide-footer="true">
								<form action="xd.php">
									<div class="form-group">
										<label>Descripción</label><br>
										<textarea class="form-control" type="text" required="true" readonly="true">Agregar campo faltante en la base de datos</textarea>
									</div>
										<center>
											<button class="btn btn-outline-primary">Ir a Mi Proyecto</button>
											<button class="btn btn-outline-danger">Eliminar notificación</button>
										</center>
								</form>
							</b-modal>

			</div>
	`