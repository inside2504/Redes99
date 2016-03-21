<section id="title">
        <div class="center">
            <h2>Servicios</h2>
            <p class="lead">Est&aacute;s viendo los datos del prestador de servicios que seleccionaste. </p>
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
				           			<img src="<?= base_url('').'assets/servicio/'.$this->my_model->getImg($item->AidiServi) ?>">
				           		</div>
				           </div>
				           <div class="col-xs-12 col-sm-7">
								<div class="col-xs-12 col-sm-12">
									<h2 class="tit-letters"><?php echo $item->NamePrestServ ?> <?php echo $item->ApePatPrestServ ?> <?php echo $item->ApeMatPrestServ ?></h2>
									<h2 class="sub-letters"><?php echo $item->EslogServ ?></h2>
									<p class="bod-letters"><?php echo $item->ServOfrecido ?></p>
									<p class="bod-letters"><?php echo $item->DescDetServ ?></p>
									<p class="bod-letters">Lo recomienda el Pastor <strong><?php echo $item->PastRec ?></strong> de la <strong>Iglesia <?php echo $item->IglePert ?></strong></strong></p>
									<p class="bod-letters">Direcci&oacute;n: <strong><?php echo $item->CalleServ ?></strong>, <strong>n&uacute;mero <?php echo $item->NumExtSer ?></strong>, interior <strong><?php echo $item->NumIntServ ?></strong>,
									colonia <strong><?php echo $item->ColServ ?></strong>, c&oacute;digo postal <strong><?php echo $item->CodPostServ ?></strong>, <strong><?php echo $item->CiudadServ ?></strong>, <strong><?php echo $item->EdoServ ?>.</strong></p>
									<p class="bod-letters">Tel&eacute;fono: <strong><?php echo $item->TelefServ ?></strong>, <strong><?php echo $item->telCelServ ?></strong>.</p>
									<p class="bod-letters">Correo electr&oacute;nico: <strong><?php echo $item->CorreElectServ ?></strong></p>
									<p class="bod-letters">P&aacute;gina de facebook: <a href=<?php echo $item->FbServ ?>><?php echo $item->FbServ ?></a></p>
									<p class="bod-letters">P&aacute;gina de twitter: <a href=<?php echo $item->TwServ ?>><?php echo $item->TwServ ?></a></p>
								</div>
							</div>
				       </div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>