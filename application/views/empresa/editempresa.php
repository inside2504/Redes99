<div class="main">
	<div>
		<section class="header">
			<h1>Empresas</h1>
			<h2>Bienvenido al formulario para editar una empresa</h2>
		</section>
	</div>
	<div class="content">
		<form class="pure-form pure-form-aligned" enctype="multipart/form-data" method="POST" action="<?php echo base_url('index.php/empresa/actualizar');?>">
			<fieldset>
				<input name="id" class="pure-input-1-2" type="text" style="visibility:hidden" value="<?php echo $item->AidiEmpr ?>">
				<legend>Datos de la iglesia que lo recomienda</legend>
					<div class="pure-control-group">
						<label for="iglesia">Iglesia perteneciente:</label>
	            		<input name="iglesia" class="pure-input-1-2" type="text" value="<?php echo $item->IglePertEmpr ?>" required maxlength="50">
					</div>
					<div class="pure-control-group">
						<label for="pastor">Pastor que lo recomienda:</label>
	            		<input name="pastor" class="pure-input-1-2" type="text" value="<?php echo $item->PastRecEmpr ?>" required maxlength="50">
					</div>
				<legend>Datos de la empresa</legend>
					<div class="pure-control-group">
						<label for="empresa">Nombre de la empresa:</label>
	            		<input name="empresa" class="pure-input-1-2" type="text" value="<?php echo $item->NameEmpr ?>" required maxlength="50">
					</div>
					<div class="pure-control-group">
						<label for="giro">Giro empresarial:</label>
	            		<input name="giro" class="pure-input-1-2" type="text" value="<?php echo $item->GiroEmpres ?>" required maxlength="20">
					</div>
					<div class="pure-control-group">
						<label for="descrip">Descripci&oacute;n:</label>
			       		<textarea name="descripcion" type="text" cols="45" rows="3" required maxlength="100"?><?php echo $item->DescrEmpr?></textarea>
			       	</div>
				<legend>Direcci&oacute;n</legend>
					<div class="pure-control-group">
						<label for="calle">Calle:</label>
	            		<input name="calle" class="pure-input-1-2" type="text" value="<?php echo $item->CalleEmpr ?>" required maxlength="40">
					</div>
					<div class="pure-control-group">
						<label for="numexterior">N&uacute;mero exterior:</label>
	            		<input name="numexterior" class="pure-input-1-2" type="text" value="<?php echo $item->NumExtEmpr ?>" required maxlength="4">
					</div>
					<div class="pure-control-group">
						<label for="numinterior">N&uacute;mero interior (si tiene):</label>
	            		<input name="numinterior" class="pure-input-1-2" type="text" value="<?php echo $item->NumIntEmpr ?>" maxlength="4">
					</div>
					<div class="pure-control-group">
						<label for="colonia">Colonia:</label>
	            		<input name="colonia" class="pure-input-1-2" type="text" value="<?php echo $item->ColEmpr ?>" required maxlength="20">
					</div>
					<div class="pure-control-group">
						<label for="codigo">C&oacute;digo postal:</label>
	            		<input name="codigo" class="pure-input-1-2" type="text" value="<?php echo $item->CodPostEmpr ?>" required maxlength="5">
					</div>
					<div class="pure-control-group">
						<label for="ciudad">Ciudad:</label>
	            		<input name="ciudad" class="pure-input-1-2" type="text" value="<?php echo $item->CiudadEmpr ?>" required maxlength="20">
					</div>
					<div class="pure-control-group">
						<label for="edo">Estado:</label>
	            		<input name="edo" class="pure-input-1-2" type="text" value="<?php echo $item->EdoEmpr ?>" required maxlength="20">
					</div>
				<legend>Contacto</legend>
					<div class="pure-control-group">
						<label for="telefono">Tel&eacute;fono(s):</label>
	            		<input name="telefono" class="pure-input-1-2" type="text" value="<?php echo $item->TelefEmpr ?>" required maxlength="12">
					</div>
					<div class="pure-control-group">
						<label for="correo">Correo electrónico:</label>
	            		<input name="correo" class="pure-input-1-2" type="text" value="<?php echo $item->CorreElectEmpr ?>" required maxlength="25">
					</div>
					<div class="pure-control-group">
						<label for="descripserv">Descripci&oacute;n de servicios:</label>
			       		<textarea name="descripserv" type="text" cols="45" rows="3" required maxlength="100"><?php echo $item->DescServEmpr?></textarea>
			       	</div>
			       	<div class="pure-control-group">
						<label for="fb">Facebook (si tiene):</label>
	            		<input name="fb" class="pure-input-1-2" type="text" value="<?php echo $item->FbEmpr ?>" maxlength="30">
					</div>
					<div class="pure-control-group">
						<label for="tw">Twitter (si tiene):</label>
	            		<input name="tw" class="pure-input-1-2" type="text" value="<?php echo $item->TwEmpr ?>" maxlength="30">
					</div>
					<div class="pure-control-group">
						<label for="eslogan">Eslogan:</label>
	            		<input name="eslogan" class="pure-input-1-2" type="text" value="<?php echo $item->EslogEmpr ?>" maxlength="100">
					</div>
				<legend>Datos del responsable de la empresa</legend>
					<div class="pure-control-group">
						<label for="nombre">Nombre(s):</label>
	            		<input name="nombre" class="pure-input-1-2" type="text" value="<?php echo $item->NombRespEmpr ?>" required maxlength="20">
					</div>
					<div class="pure-control-group">
						<label for="apepat">Apellido paterno:</label>
	            		<input name="apepat" class="pure-input-1-2" type="text" value="<?php echo $item->ApePatRespEmpr ?>" required maxlength="20">
					</div>
					<div class="pure-control-group">
						<label for="apemat">Apellido materno:</label>
	            		<input name="apemat" class="pure-input-1-2" type="text" value="<?php echo $item->ApeMatRespEmpr ?>" required maxlength="20">
					</div>
					<div class="pure-control-group">
						<label for="teleres">Tel&eacute;fono:</label>
	            		<input name="teleres" class="pure-input-1-2" type="text" value="<?php echo $item->TelefRespEmpr ?>" required maxlength="12">
					</div>
					<div class="pure-controls">
						<button type="submit" class="pure-button pure-button-primary">Actualizar</button>
					</div>
			</fieldset>
		</form>
	</div>
</div>