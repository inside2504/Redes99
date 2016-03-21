<div class="main">
	<div>
		<section class="header">
			<h1>Taxista</h1>
			<h2>Bienvenido al formulario para registrar un taxista</h2>
		</section>
	</div>
	<div class="content">
		<form class="pure-form pure-form-aligned" enctype="multipart/form-data" method="POST" action="<?php echo base_url('index.php/taxi/guardar');?>">
			<fieldset>
				<legend>Datos de la iglesia que lo recomienda</legend>
					<div class="pure-control-group">
						<label for="iglesia">Nombre de la iglesia:</label>
	            		<input name="iglesia" class="pure-input-1-2" type="text" placeholder="Iglesia" required maxlength="50">
					</div>
					<div class="pure-control-group">
						<label for="pastor">Pastor de la iglesia:</label>
	            		<input name="pastor" class="pure-input-1-2" type="text" placeholder="Pastor" required maxlength="50">
					</div>
				<legend>Datos del taxista</legend>
					<div class="pure-control-group">
						<label for="nombre">Nombre:</label>
	            		<input name="nombre" class="pure-input-1-2" type="text" placeholder="Nombre" required maxlength="20">
					</div>
					<div class="pure-control-group">
						<label for="apepaterno">Apellido paterno:</label>
	            		<input name="apepaterno" class="pure-input-1-2" type="text" placeholder="Apellido paterno" required maxlength="20">
					</div>
					<div class="pure-control-group">
						<label for="apematerno">Apellido materno</label>
	            		<input name="apematerno" class="pure-input-1-2" type="text" placeholder="Apellido materno" required maxlength="20">
					</div>
				<legend>Datos del taxi</legend>
					<div class="pure-control-group">
						<label for="numeco">N&uacute;mero econ&oacute;mico:</label>
	            		<input name="numeco" class="pure-input-1-2" type="text" placeholder="Número económico" required maxlength="5">
					</div>
					<div class="pure-control-group">
						<label for="placa">N&uacute;mero de placa:</label>
	            		<input name="placa" class="pure-input-1-2" type="text" placeholder="Número de placa" required maxlength="8">
					</div>
					<div class="pure-control-group">
						<label for="horario">Horario:</label>
	            		<input name="horario" class="pure-input-1-2" type="text" placeholder="Horario" required maxlength="20">
					</div>
				<legend>M&aacute;s datos</legend>
					<div class="pure-control-group">
						<label for="telefono">Tel&eacute;fono:</label>
	            		<input name="telefono" class="pure-input-1-2" type="text" placeholder="Teléfono" required maxlength="12">
					</div>
					<div class="pure-controls">
						<button type="reset" class="pure-button pure-button-cancel">Borrar datos</button>
						<button type="submit" class="pure-button pure-button-primary">Registrar</button>
					</div>
			</fieldset>
		</form>
	</div>
</div>