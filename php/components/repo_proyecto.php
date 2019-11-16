`
			<div class="text-dark" style="padding: 0% 3%; background-color: transparent;">
				<div class="d-block d-sm-block d-md-none"><br></div>

				<br><center><h4 class="text-dark">Mi Proyecto</h4></center>
				
				<div class="container-fluid" style="padding: 0% 0% 3% 0%;">
					<div class="row">
						<div class="col-12">
							<h5>Archivos del proyecto</h5>
						</div>
					</div>
					<div class="row">
						<div class="col-12"><br>
								<?php
								$d = dir(".");
								echo "<table class='table table-striped' style='text-align: center;'>";
								echo "<thead>";
								echo "<tr>";
								echo "<td>Nombre del archivo</td>";
								echo "<td>Fecha de modificación</td>";
								echo "<td>Versión</td>";
								echo "<td>Última actualización por</td>";
								echo "</tr>";
								echo "</thead>";
								echo "<tbody>";
								while (false !== ($entry = $d->read())) {
								echo "<tr>";
									if($entry != "." && $entry != "..") 
									{
								  	echo "<td><a href='{$entry}'>{$entry}</a></td>";
								   	echo "<td>14/11/2019</td>";
								   	echo "<td>1</td>";
									echo "<td>David Reyes</td>";
								   	}
								echo "</tr>";
								}
								echo "</tbody>";
								$d->close();
								?>
						</div>
					</div>

					<br><center><b-button class="btn btn-outline-dark bg-light text-dark" v-b-modal.rp-modal-1>Enviar nuevo mensaje</b-button></center>

				<b-modal id="rp-modal-1" title="Crear nuevo proyecto" hide-footer="true">
					<form action="xd.php">
						<div class="form-group">
							<label>Seleccione archivo</label>
							<input class="form-control" type="text" placeholder="Ingrese aquí el archivo" required="true">
						</div>
						<div class="form-group">
							<label>Subir como</label>
								<select class="custom-select" id="subir_como" required="true">
									<option>Nueva versión</option>
									<option>Reemplazar versión actual</option>
								</select>
							</div>
						<center><button type="submit" class="btn btn-outline-primary">Crear</button></center>
					</form>
				</b-modal>
				</div>
`