<div class="main">
	<div>
		<section class="header">
			<h1>Servicios</h1>
			<h2>Bienvenido al formulario para registrar la foto del prestador de servicios.</h2>
		</section>
	</div>
	<div class="content">
		<form class="pure-form pure-form-aligned" enctype="multipart/form-data" method="POST" action="<?php echo base_url('/servicio/subimg');?>">
			<fieldset>
				<legend>Datos de la foto</legend>
					<div class="pure-control-group">
						<label for="id">Nombre del prestador de servicios</label>
						<select name="id" required maxlength="40">
							<?php foreach ($this->my_model->get() as $total): ?>
                                <option value="<?php echo $total->AidiServi ?>"><?php echo $total->NamePrestServ ?> <?php echo $total->ApePatPrestServ ?> <?php echo $total->ApeMatPrestServ ?></option>
                            <?php endforeach;?>
						</select>
					</div>
					<div class="pure-control-group">
						<label for="userfile">Foto del prestador de servicios:</label>
	            		<input name="userfile" class="pure-input-1-2" type="file" placeholder="Nombre" required maxlength="50">
					</div>
					<div class="pure-controls">
						<button type="reset" class="pure-button pure-button-cancel">Borrar datos</button>
						<button type="submit" class="pure-button pure-button-primary">Registrar</button>
					</div>
			</fieldset>
		</form>
	</div>
</div>