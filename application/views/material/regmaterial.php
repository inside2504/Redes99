<div class="main">
	<div>
		<section class="header">
			<h1>Materiales</h1>
			<h2>Bienvenido al formulario para dar de alta un material</h2>
		</section>
	</div>
	<div class="content">
		<form class="pure-form pure-form-aligned" enctype="multipart/form-data" method="POST" action="<?php echo base_url('index.php/material/guardar');?>">
			<fieldset>
				<legend>Datos del material</legend>
					<div class="pure-control-group">
						<label for="categoria">Categoria (Seleccione una):</label>
						<select name="categoria" required maxlength="40">
							<option>Libros</option>
							<option>Audio</option>
						</select>
					</div>
					<div class="pure-control-group">
						<label for="nombremate">Nombre del material:</label>
	            		<input name="nombremate" class="pure-input-1-2" type="text" placeholder="Nombre del material" required maxlength="50">
					</div>
					<div class="pure-control-group">
						<label for="autor">Autor:</label>
	            		<input name="autor" class="pure-input-1-2" type="text" placeholder="Autor del material" required maxlength="60">
					</div>
					<div class="pure-control-group">
						<label for="descrip">Descripci&oacute;n:</label>
			       		<textarea name="descripcion" type="text" cols="45" rows="3" placeholder="Ingrese la descripción aquí (Máximo 100 caracteres)" required maxlength="100"></textarea>
			       	</div>
					<div class="pure-control-group">
						<label for="link" required>Link del material:</label>
			       		<textarea name="link" type="text" cols="45" rows="3" placeholder="Ingrese la descripción aquí (Máximo 100 caracteres)" required maxlength="100"></textarea>
			       	</div>
			       	<div class="pure-controls">
						<button type="reset" class="pure-button pure-button-cancel">Borrar datos</button>
						<button type="submit" class="pure-button pure-button-primary">Registrar</button>
					</div>
			</fieldset>
		</form>
	</div>
</div>