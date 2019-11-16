`
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

				<div class="d-block d-sm-block d-md-none">
					<br>
				</div>

				<center><b-button class="btn btn-outline-dark bg-light text-dark" v-b-modal.ms-modal-1>Enviar nuevo mensaje</b-button></center>

				<b-modal id="ms-modal-1" title="Crear nuevo proyecto" hide-footer="true">
					<form action="xd.php">
						<div class="form-group">
							<label>Destinatario</label>
							<input class="form-control" type="text" placeholder="Ingrese aquí el nombre" required="true">
						</div>
						<div class="form-group">
							<label>Mensaje</label><br>
							<textarea class="form-control" type="text" required="true" placeholder="Escriba aquí el mensaje"></textarea>
						</div>
						<center><button type="submit" class="btn btn-outline-primary">Crear</button></center>
					</form>
				</b-modal>

			</div>`