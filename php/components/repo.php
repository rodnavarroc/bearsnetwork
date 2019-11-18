`
			<div id="contRepos" style="padding: 0% 3%; background-color: transparent;">	
				<!-- <div class="d-block d-sm-block d-md-none">
					<br>
				</div> -->

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
				<br>

				<center><b-button id="btn_crearProyecto" class="btn btn-outline-dark bg-light text-dark" v-b-modal.modal-1>Crear nuevo proyecto </b-button></center>

				<b-modal id="modal-1" title="Crear nuevo proyecto" hide-footer="true">
					<form  id="formulario_nuevoProyecto" method="post">
						<div class="form-group">
							<label>Nombre del proyecto</label>
							<input class="form-control" type="text" id="nombre_proyecto" placeholder="Ingrese aquí el nombre" required="true">
						</div>
						<div class="form-group">
							<label>Descripcion</label>
							<textarea class="form-control" name="descripcion_proyecto" id="descripcion_proyecto" cols="30" rows="10" require="true"></textarea>
						</div>
						<center><button type="submit" class="btn btn-outline-primary">Crear</button></center>
					</form>
				</b-modal>

				<!-- <div class="d-block d-sm-block d-md-none">
					<br>
				</div> -->
			</div>
`