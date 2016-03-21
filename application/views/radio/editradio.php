<div class="main">
	<div>
		<section class="header">
			<h1>Iglesias</h1>
			<h2>Bienvenido al formulario para editar una iglesia</h2>
		</section>
	</div>
	<div class="content">
		<form class="pure-form pure-form-aligned" enctype="multipart/form-data" method="POST" action="<?php echo base_url('index.php/iglesia/actualizar');?>">
			<fieldset>
				<input name="id" class="pure-input-1-2" type="text" style="visibility:hidden" value="<?php echo $item->idIgle ?>">
				<legend>Datos de la iglesia</legend>
					<div class="pure-control-group">
						<label for="iglesia">Nombre de la iglesia:</label>
	            		<input name="iglesia" class="pure-input-1-2" type="text" value="<?php echo $item->nomIgle ?>">
					</div>
					<div class="pure-control-group">
						<label for="pastor">Pastor de la iglesia:</label>
	            		<input name="pastor" class="pure-input-1-2" type="text"  value="<?php echo $item->pasIgle ?>">
					</div>
					<div class="pure-control-group">
						<label for="descripcion">Descripci&oacute;n:</label>
	            		<textarea name="descripcion" class="pure-input-1-2" type="text" cols="45" rows="3"><?php echo $item->descIgle?></textarea>
					</div>
					<div class="pure-control-group">
						<label for="eslogan">Eslogan (si cuenta con uno):</label>
	            		<input name="eslogan" class="pure-input-1-2" type="text"  value="<?php echo $item->eslogIgle ?>">
					</div>
					<div class="pure-control-group">
						<label for="logo">Logotipo:</label>
	            		<input name="logo" class="pure-input-1-2" type="file"  value="<?php echo $item->logo ?>">
					</div>
				<legend>Direcci&oacute;n</legend>
					<div class="pure-control-group">
						<label for="calle">Calle:</label>
	            		<input name="calle" class="pure-input-1-2" type="text"  value="<?php echo $item->calleIgle ?>">
					</div>
					<div class="pure-control-group">
						<label for="numexterior">N&uacute;mero exterior:</label>
	            		<input name="numexterior" class="pure-input-1-2" type="text"  value="<?php echo $item->numExtIgle ?>">
					</div>
					<div class="pure-control-group">
						<label for="numinterior">N&uacute;mero interior (si tiene):</label>
	            		<input name="numinterior" class="pure-input-1-2" type="text"  value="<?php echo $item->numInteIgle ?>">
					</div>
					<div class="pure-control-group">
						<label for=colonia"">Colonia:</label>
	            		<input name="colonia" class="pure-input-1-2" type="text"  value="<?php echo $item->coloIgle ?>">
					</div>
					<div class="pure-control-group">
						<label for="codigo">C&oacute;digo postal:</label>
	            		<input name="codigo" class="pure-input-1-2" type="text"  value="<?php echo $item->codPostIgle ?>">
					</div>
					<div class="pure-control-group">
						<label for="ciudad">Ciudad:</label>
	            		<input name="ciudad" class="pure-input-1-2" type="text"  value="<?php echo $item->ciudadIgle ?>">
					</div>
					<div class="pure-control-group">
						<label for="edo">Estado:</label>
	            		<input name="edo" class="pure-input-1-2" type="text"  value="<?php echo $item->edoIgle ?>">
					</div>
				<legend>Contacto</legend>
					<div class="pure-control-group">
						<label for="telefono">Tel&eacute;fono(s):</label>
	            		<input name="telefono" class="pure-input-1-2" type="text"  value="<?php echo $item->telIgle ?>">
					</div>
					<div class="pure-control-group">
						<label for="correo">Correo electrónico:</label>
	            		<input name="correo" class="pure-input-1-2" type="text"  value="<?php echo $item->correEleIgle ?>">
					</div>
			       	<div class="pure-control-group">
						<label for="fb">Facebook (si tiene):</label>
	            		<input name="fb" class="pure-input-1-2" type="text"  value="<?php echo $item->fBIgle ?>">
					</div>
					<div class="pure-control-group">
						<label for="tw">Twitter (si tiene):</label>
	            		<input name="tw" class="pure-input-1-2" type="text"  value="<?php echo $item->tWIgle ?>">
					</div>
					<div class="pure-control-group">
						<label for="otrasred">Otras redes (si tiene):</label>
	            		<textarea name="otrasred" class="pure-input-1-2" type="text"><?php echo $item->otrasRedesIgle?></textarea>
					</div>
					<div class="pure-controls">
						<button type="submit" class="pure-button pure-button-primary">Actualizar</button>
					</div>
			</fieldset>
		</form>
	</div>
</div>