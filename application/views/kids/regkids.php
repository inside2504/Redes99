<div class="main">
	<div>
		<section class="header">
			<h1>KIDS</h1>
			<h2>Bienvenido al formulario para dar de alta una entrada para el apartado de KIDS.</h2>
		</section>
	</div>
	<div class="content">
		<form class="pure-form pure-form-aligned" enctype="multipart/form-data" method="POST" action="<?php echo base_url('index.php/kids/guardar');?>">
			<fieldset>
				<legend>Datos de la entrada del blog</legend>
					<div class="pure-control-group">
						<label for="titulo">T&iacute;tulo del blog:</label>
	            		<input name="titulo" class="pure-input-1-2" type="text" placeholder="Título" required maxlength="50">
					</div>
					<div class="pure-control-group">
						<label for="texto">Texto de la entrada:</label>
			       		<textarea name="texto" type="text" cols="45" rows="15" placeholder="Ingrese el texto del blog aquí" required></textarea>
			       	</div>
			       	<div class="pure-control-group">
						<label for="fecha">Fecha de creaci&oacute;n:</label>
	            		<input name="fecha" class="pure-input-1-2" type="date" placeholder="Fecha de creación" required maxlength="50">
					</div>
					<div class="pure-control-group">
						<label for="link">Link del contenido<br> <strong>*En la p&aacute;gina de youtube, copie a partir de lo que est&aacute; marcado en negritas y subrayado en el siguiente ejemplo:</strong><br>www.youtube.com/watch?v=<strong><em>PYjaFBE7NQI</em></strong></label>
	            		<input name="link" class="pure-input-1-2" type="text" placeholder="Link del contenido" required maxlength="50">
					</div>
					<div class="pure-controls">
						<button type="reset" class="pure-button pure-button-cancel">Borrar datos</button>
						<button type="submit" class="pure-button pure-button-primary">Registrar</button>
					</div>
			</fieldset>
		</form>
	</div>
</div>