<div class="main">
	<div>
		<section class="header">
			<h1>Iglesias</h1>
			<h2>Bienvenido al formulario para registrar una iglesia</h2>
		</section>
	</div>
	<div class="content">
		<form class="pure-form pure-form-aligned" enctype="multipart/form-data" method="POST" action="<?php echo base_url('index.php/iglesia/guardar');?>">
			<fieldset>
				<legend>Datos de la iglesia</legend>
					<div class="pure-control-group">
						<label for="iglesia">Nombre de la iglesia:</label>
	            		<input name="iglesia" class="pure-input-1-2" type="text" placeholder="Nombre">
					</div>
					<div class="pure-control-group">
						<label for="pastor">Pastor de la iglesia:</label>
	            		<input name="pastor" class="pure-input-1-2" type="text" placeholder="Pastor">
					</div>
					<div class="pure-control-group">
						<label for="descripcion">Descripci&oacute;n:</label>
	            		<textarea name="descripcion" class="pure-input-1-2" type="text" placeholder="Descripcion"></textarea>
					</div>
					<div class="pure-control-group">
						<label for="eslogan">Eslogan (si cuenta con uno):</label>
	            		<input name="eslogan" class="pure-input-1-2" type="text" placeholder="Eslogan">
					</div>
					<div class="pure-control-group">
						<label for="logo">Logotipo:</label>
	            		<input name="logo" class="pure-input-1-2" type="file" placeholder="">
					</div>
				<legend>Direcci&oacute;n</legend>
					<div class="pure-control-group">
						<label for="calle">Calle:</label>
	            		<input name="calle" class="pure-input-1-2" type="text" placeholder="Calle">
					</div>
					<div class="pure-control-group">
						<label for="numexterior">N&uacute;mero exterior:</label>
	            		<input name="numexterior" class="pure-input-1-2" type="text" placeholder="Número exterior">
					</div>
					<div class="pure-control-group">
						<label for="numinterior">N&uacute;mero interior (si tiene):</label>
	            		<input name="numinterior" class="pure-input-1-2" type="text" placeholder="Número interior">
					</div>
					<div class="pure-control-group">
						<label for=colonia"">Colonia:</label>
	            		<input name="colonia" class="pure-input-1-2" type="text" placeholder="Colonia">
					</div>
					<div class="pure-control-group">
						<label for="codigo">C&oacute;digo postal:</label>
	            		<input name="codigo" class="pure-input-1-2" type="text" placeholder="Código postal">
					</div>
					<div class="pure-control-group">
						<label for="ciudad">Ciudad:</label>
	            		<input name="ciudad" class="pure-input-1-2" type="text" placeholder="Ciudad">
					</div>
					<div class="pure-control-group">
						<label for="edo">Estado:</label>
	            		<input name="edo" class="pure-input-1-2" type="text" placeholder="Estado">
					</div>
				<legend>Contacto</legend>
					<div class="pure-control-group">
						<label for="telefono">Tel&eacute;fono(s):</label>
	            		<input name="telefono" class="pure-input-1-2" type="text" placeholder="Teléfonos">
					</div>
					<div class="pure-control-group">
						<label for="correo">Correo electrónico:</label>
	            		<input name="correo" class="pure-input-1-2" type="text" placeholder="Correo">
					</div>
			       	<div class="pure-control-group">
						<label for="fb">Facebook (si tiene):</label>
	            		<input name="fb" class="pure-input-1-2" type="text" placeholder="Dirección de Facebook">
					</div>
					<div class="pure-control-group">
						<label for="tw">Twitter (si tiene):</label>
	            		<input name="tw" class="pure-input-1-2" type="text" placeholder="Dirección de Twitter">
					</div>
					<div class="pure-control-group">
						<label for="otrasred">Otras redes (si tiene):</label>
	            		<textarea name="otrasred" class="pure-input-1-2" type="text" placeholder="Ingrese los enlaces de sus otras redes."></textarea>
					</div>
					<div class="pure-controls">
						<button type="reset" class="pure-button pure-button-cancel">Borrar datos</button>
						<button type="submit" class="pure-button pure-button-primary">Registrar</button>
					</div>
			</fieldset>
		</form>
	</div>
</div>