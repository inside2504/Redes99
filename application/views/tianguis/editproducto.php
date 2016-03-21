<div class="main">
	<div>
		<section class="header">
			<h1>Tianguis</h1>
			<h2>Bienvenido al formulario para registrar un producto a ofertar en el tianguis</h2>
		</section>
	</div>
	<div class="content">
		<form class="pure-form pure-form-aligned" enctype="multipart/form-data" method="POST" action="<?php echo base_url('index.php/tianguis/actualizar');?>">
			<fieldset>
				<input name="id" class="pure-input-1-2" type="text" style="visibility:hidden" value="<?php echo $item->idProd ?>">
				<legend>Datos del producto</legend>
					<div class="pure-control-group">
						<label for="nombreprod">Nombre del producto:</label>
	            		<input name="nombreprod" class="pure-input-1-2" type="text" value="<?php echo $item->nombProd ?>" required maxlength="40">
					</div>
					<div class="pure-control-group">
						<label for="autorprod">Autor:</label>
	            		<input name="autorprod" class="pure-input-1-2" type="text" value="<?php echo $item->autoProd ?>" required maxlength="50">
					</div>
					<div class="pure-control-group">
						<label for="descripprod">Descripci&oacute;n:</label>
			       		<textarea name="descripcionprod" type="text" cols="45" rows="3" required maxlength="200"><?php echo $item->descrProd?></textarea>
			       	</div>
			       	<div class="pure-control-group">
						<label for="precioprod">Precio:</label>
			       		<input name="precioprod" class="pure-input-1-2" type="text" value="<?php echo $item->precProd ?>" required maxlength="11">
			       	</div>
				<legend>Localizaci&oacute;n del producto</legend>
					<div class="pure-control-group">
						<label for="nombrelib">Nombre de la Librer&iacute;a:</label>
	            		<input name="nombrelib" class="pure-input-1-2" type="text" value="<?php echo $item->nombLibProd ?>" required maxlength="50">
					</div>
					<div class="pure-control-group">
						<label for="calle">Calle:</label>
	            		<input name="calle" class="pure-input-1-2" type="text" value="<?php echo $item->calleLibProd ?>" required maxlength="40">
					</div>
					<div class="pure-control-group">
						<label for="numexterior">N&uacute;mero exterior:</label>
	            		<input name="numexterior" class="pure-input-1-2" type="text" value="<?php echo $item->numExtLibProd ?>" required maxlength="5">
					</div>
					<div class="pure-control-group">
						<label for="numinterior">N&uacute;mero interior (si existe):</label>
	            		<input name="numinterior" class="pure-input-1-2" type="text" value="<?php echo $item->numIntLibProd ?>" maxlength="5">
					</div>
					<div class="pure-control-group">
						<label for=colonia"">Colonia:</label>
	            		<input name="colonia" class="pure-input-1-2" type="text" value="<?php echo $item->coloLibProd ?>" required maxlength="35">
					</div>
					<div class="pure-control-group">
						<label for="codigo">C&oacute;digo postal:</label>
	            		<input name="codigo" class="pure-input-1-2" type="text" value="<?php echo $item->codPostLibProd ?>" required maxlength="5">
					</div>
					<div class="pure-control-group">
						<label for="ciudad">Ciudad:</label>
	            		<input name="ciudad" class="pure-input-1-2" type="text" value="<?php echo $item->ciuLibrProd ?>" required maxlength="40">
					</div>
					<div class="pure-control-group">
						<label for="edo">Estado:</label>
	            		<input name="edo" class="pure-input-1-2" type="text" value="<?php echo $item->edoLibProd ?>" required maxlength="40">
					</div>
				<legend>Contacto con la librer&iacute;a</legend>
					<div class="pure-control-group">
						<label for="telefono">Tel&eacute;fonos:</label>
	            		<input name="telefono" class="pure-input-1-2" type="text" value="<?php echo $item->telefLibProd ?>" required maxlength="12">
					</div>
					<div class="pure-control-group">
						<label for="correo">Correo electrónico:</label>
	            		<input name="correo" class="pure-input-1-2" type="text" value="<?php echo $item->correEleLibProd ?>" required maxlength="50">
					</div>
			       	<div class="pure-control-group">
						<label for="fb">Facebook (si tiene):</label>
	            		<input name="fb" class="pure-input-1-2" type="text" value="<?php echo $item->fBLibProd ?>" maxlength="50">
					</div>
					<div class="pure-control-group">
						<label for="tw">Twitter (si tiene):</label>
	            		<input name="tw" class="pure-input-1-2" type="text" value="<?php echo $item->tWLibProd ?>" maxlength="50">
					</div>
					<div class="pure-controls">
						<button type="submit" class="pure-button pure-button-primary">Actualizar</button>
					</div>
			</fieldset>
		</form>
	</div>
</div>