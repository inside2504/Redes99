<section id="title">
        <div class="center">
            <h2>Empresas</h2>
            <p class="lead">Est&aacute;s viendo los datos de la empresa que seleccionaste. </p>
        </div>
</section>

<section id="about-us">
	<div class="container">
		<div class="blog">
			<div class="row">
				<div class="blog-item">
					<div class="col-md-12">
				        <div class="row">
				           <div class="col-xs-12 col-sm-5 text-center">
				           		<div class="col-xs-12 col-sm-12">
				           			<img class="img-dato" src="<?= base_url('').'assets/empresa/'.$this->my_model->getLogo($item->AidiEmpr) ?>">
				           		</div>
				           </div>
				           <div class="col-xs-12 col-sm-7">
								<div class="col-xs-12 col-sm-12">
									<h2 class="tit-letters"><?php echo $item->NameEmpr ?></h2>
									<h2 class="sub-letters">Director de la empresa:<br> <?php echo $item->NombRespEmpr ?> <?php echo $item->ApePatRespEmpr ?> <?php echo $item->ApeMatRespEmpr ?></h2>
									<p class="bod-letters">Eslogan: <strong><?php echo $item->EslogEmpr ?></strong></p>
									<p class="bod-letters">Giro empresarial: <strong><?php echo $item->GiroEmpres ?></strong></p>
									<p class="bod-letters">Descripci&oacute;n <strong><?php echo $item->DescrEmpr ?></strong></p>
									<p class="bod-letters">Lo recomienda el Pastor <strong><?php echo $item->PastRecEmpr ?></strong> de la <strong>Iglesia <?php echo $item->IglePertEmpr ?></strong></strong></p>
									<p class="bod-letters">Direcci&oacute;n: <strong><?php echo $item->CalleEmpr ?></strong>, n&uacute;mero <strong><?php echo $item->NumExtEmpr ?></strong>, interior <strong><?php echo $item->NumIntEmpr ?></strong>,
									colonia <strong><?php echo $item->ColEmpr ?></strong>, c&oacute;digo postal <strong><?php echo $item->CodPostEmpr ?></strong>, <strong><?php echo $item->CiudadEmpr ?></strong>, <strong><?php echo $item->EdoEmpr ?>.</strong></p>
									<p class="bod-letters">Tel&eacute;fono: <strong><?php echo $item->TelefEmpr ?></strong>.</p>
									<p class="bod-letters">Correo electr&oacute;nico: <strong><?php echo $item->CorreElectEmpr ?></strong></p>
									<p class="bod-letters">P&aacute;gina de facebook: <a href=<?php echo $item->FbEmpr ?>><?php echo $item->FbEmpr ?></a></p>
									<p class="bod-letters">P&aacute;gina de twitter: <a href=<?php echo $item->TwEmpr ?>><?php echo $item->TwEmpr ?></a></p>
								</div>
							</div>
				       </div>
				       <div class="row">
				           <div class="col-xs-12 col-sm-5 text-center">
				           		<div class="col-xs-12 col-sm-12">
				           			<img class="img-dato" src="<?= base_url('').'assets/empresa/'.$this->my_model->getImg($item->AidiEmpr) ?>">
				           		</div>
				           </div>
				           <div class="col-xs-12 col-sm-7">
								<div class="col-xs-12 col-sm-12">
									<h2 class="sub-letters"><?php echo $item->NombRespEmpr ?> <?php echo $item->ApePatRespEmpr ?> <?php echo $item->ApeMatRespEmpr ?></h2>
									<p class="bod-letters">Tel&eacute;fono: <strong><?php echo $item->TelefEmpr ?></strong>.</p>
								</div>
							</div>
				       </div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
					