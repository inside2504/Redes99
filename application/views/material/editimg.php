<div class="main">
	<div>
		<section class="header">
			<h1>Material</h1>
			<h2>Bienvenido al formulario para editar la car&aacute;tula de un material.</h2>
		</section>
	</div>
	<div class="content">
		<form class="pure-form pure-form-aligned" enctype="multipart/form-data" method="POST" action="<?php echo base_url('/material/editimg');?>">
			<input name="idi" class="pure-input-1-2" type="text" style="visibility:hidden" value="<?php echo $cols->idImgMate ?>">
			<fieldset>
				<legend>Datos de la car&aacute;tula</legend>
					<div class="pure-control-group">
						<label for="id">Nombre del material</label>
						<select name="id" required maxlength="40">
							<?php foreach ($this->my_model->get() as $total): ?>
                                <option value="<?php echo $total->idMate ?>"><?php echo $total->nombMate ?></option>
                            <?php endforeach;?>
						</select>
					</div>
					<div class="pure-control-group">
						<label for="userfile">Im&aacute;gen de la car&aacute;tula:</label>
	            		<input name="userfile" class="pure-input-1-2" type="file" placeholder="Nombre" required maxlength="50">
					</div>
					<div class="pure-controls">
						<button type="reset" class="pure-button pure-button-cancel">Borrar datos</button>
						<button type="submit" class="pure-button pure-button-primary">Actualizar</button>
					</div>
			</fieldset>
		</form>
	</div>
</div>