<div class="main">
	<div>
		<section class="header">
			<h1>Empresas</h1>
			<h2>Bienvenido al formulario para registrar una empresa</h2>
		</section>
	</div>
	<div class="content">
		<form class="pure-form pure-form-aligned" enctype="multipart/form-data" method="POST" action="<?php echo base_url('index.php/empresa/guardar');?>">
			<fieldset>
				<legend>Datos de la iglesia que lo recomienda</legend>
					<div class="pure-control-group">
						<label for="iglesia">Iglesia perteneciente:</label>
	            		<input name="iglesia" class="pure-input-1-2" type="text" placeholder="Iglesia" required maxlength="50">
					</div>
					<div class="pure-control-group">
						<label for="pastor">Pastor que lo recomienda:</label>
	            		<input name="pastor" class="pure-input-1-2" type="text" placeholder="Pastor" required maxlength="50">
					</div>
				<legend>Datos de la empresa</legend>
					<div class="pure-control-group">
						<label for="empresa">Nombre de la empresa:</label>
	            		<input name="empresa" class="pure-input-1-2" type="text" placeholder="Empresa" required maxlength="50">
					</div>
					<div class="pure-control-group">
						<label for="giro">Giro empresarial:</label>
	            		<input name="giro" class="pure-input-1-2" type="text" placeholder="Giro" required maxlength="20">
					</div>
					<div class="pure-control-group">
						<label for="descrip">Descripci&oacute;n:</label>
			       		<textarea name="descripcion" type="text" cols="45" rows="3" placeholder="Ingrese la descripción aquí (Máximo 100 caracteres)" required maxlength="100"></textarea>
			       	</div>
				<legend>Direcci&oacute;n</legend>
					<div class="pure-control-group">
						<label for="calle">Calle:</label>
	            		<input name="calle" class="pure-input-1-2" type="text" placeholder="Calle" required maxlength="40">
					</div>
					<div class="pure-control-group">
						<label for="numexterior">N&uacute;mero exterior:</label>
	            		<input name="numexterior" class="pure-input-1-2" type="text" placeholder="Número exterior" required maxlength="4">
					</div>
					<div class="pure-control-group">
						<label for="numinterior">N&uacute;mero interior (si tiene):</label>
	            		<input name="numinterior" class="pure-input-1-2" type="text" placeholder="Número interior" maxlength="4">
					</div>
					<div class="pure-control-group">
						<label for="colonia">Colonia:</label>
	            		<input name="colonia" class="pure-input-1-2" type="text" placeholder="Colonia" required maxlength="20">
					</div>
					<div class="pure-control-group">
						<label for="codigo">C&oacute;digo postal:</label>
	            		<input name="codigo" class="pure-input-1-2" type="text" placeholder="Código postal" required maxlength="5">
					</div>
					<div class="pure-control-group">
						<label for="ciudad">Ciudad:</label>
	            		<input name="ciudad" class="pure-input-1-2" type="text" placeholder="Ciudad" required maxlength="20">
					</div>
					<div class="pure-control-group">
						<label for="edo">Estado:</label>
	            		<input name="edo" class="pure-input-1-2" type="text" placeholder="Estado" required maxlength="20">
					</div>
				<legend>Contacto</legend>
					<div class="pure-control-group">
						<label for="telefono">Tel&eacute;fono:</label>
	            		<input name="telefono" class="pure-input-1-2" type="text" placeholder="Teléfono" required maxlength="12">
					</div>
					<div class="pure-control-group">
						<label for="correo">Correo electrónico:</label>
	            		<input name="correo" class="pure-input-1-2" type="text" placeholder="Correo" required maxlength="25">
					</div>
					<div class="pure-control-group">
						<label for="descripserv">Descripci&oacute;n de servicios:</label>
			       		<textarea name="descripserv" type="text" cols="45" rows="3" placeholder="Ingrese la descripción de servicios aquí (Máximo 100 caracteres)" required maxlength="100"></textarea>
			       	</div>
			       	<div class="pure-control-group">
						<label for="fb">Facebook (si tiene):</label>
	            		<input name="fb" class="pure-input-1-2" type="text" placeholder="Dirección de Facebook" maxlength="30">
					</div>
					<div class="pure-control-group">
						<label for="tw">Twitter (si tiene):</label>
	            		<input name="tw" class="pure-input-1-2" type="text" placeholder="Dirección de Twitter" maxlength="30">
					</div>
					<div class="pure-control-group">
						<label for="eslogan">Eslogan (si cuenta con uno):</label>
	            		<input name="eslogan" class="pure-input-1-2" type="text" placeholder="Eslogan" maxlength="100">
					</div>
				<legend>Datos del responsable de la empresa</legend>
					<div class="pure-control-group">
						<label for="nombre">Nombre(s):</label>
	            		<input name="nombre" class="pure-input-1-2" type="text" placeholder="Nombre(s)" required maxlength="20">
					</div>
					<div class="pure-control-group">
						<label for="apepat">Apellido paterno:</label>
	            		<input name="apepat" class="pure-input-1-2" type="text" placeholder="Apellido paterno" required maxlength="20">
					</div>
					<div class="pure-control-group">
						<label for="apemat">Apellido materno:</label>
	            		<input name="apemat" class="pure-input-1-2" type="text" placeholder="Apellido materno" required maxlength="20">
					</div>
					<div class="pure-control-group">
						<label for="teleres">Tel&eacute;fono:</label>
	            		<input name="teleres" class="pure-input-1-2" type="text" placeholder="Teléfono" required maxlength="12">
					</div>
					<div class="pure-controls">
						<button type="reset" class="pure-button pure-button-cancel">Borrar datos</button>
						<button type="submit" class="pure-button pure-button-primary">Registrar</button>
					</div>
			</fieldset>
		</form>
	</div>
</div>