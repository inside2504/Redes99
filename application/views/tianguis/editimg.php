<div class="main">
	<div>
		<section class="header">
			<h1>Tianguis</h1>
			<h2>Bienvenido al formulario para cambiar la car&aacute;tula de un producto.</h2>
		</section>
	</div>
	<div class="content">
		<form class="pure-form pure-form-aligned" enctype="multipart/form-data" method="POST" action="<?php echo base_url('/tianguis/editimg');?>">
			<input name="idi" class="pure-input-1-2" type="text" style="visibility:hidden" value="<?php echo $cols->idImgProd ?>">
			<fieldset>
				<legend>Datos de la foto</legend>
					<div class="pure-control-group">
						<label for="id">Nombre del producto</label>
						<select name="id" required maxlength="40">
							<?php foreach ($this->my_model->get() as $total): ?>
                                <option value="<?php echo $total->idProd ?>"><?php echo $total->nombProd ?></option>
                            <?php endforeach;?>
						</select>
					</div>
					<div class="pure-control-group">
						<label for="userfile">Imagen del producto:</label>
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