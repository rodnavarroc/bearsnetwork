`
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

				<center><b-button class="btn btn-outline-dark bg-light text-dark" v-b-modal.modal-1>Crear nuevo proyecto </b-button></center>

				<b-modal id="modal-1" title="Crear nuevo proyecto" hide-footer="true">
					<form action="xd.php">
						<div class="form-group">
							<label>Nombre del proyecto</label>
							<input class="form-control" type="text" placeholder="Ingrese aquí el nombre" required="true">
						</div>
						<center><button type="submit" class="btn btn-outline-primary">Crear</button></center>
					</form>
				</b-modal>

				<div class="d-block d-sm-block d-md-none">
					<br>
				</div>
			</div>
`