<section id="title">
        <div class="center">
            <h2>Iglesias</h2>
            <p class="lead">Est&aacute;s viendo los datos de la iglesia que seleccionaste. </p>
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
				           			<img src="<?= base_url('').'assets/iglesias/'.$this->my_model->getImg($item->idIgle) ?>">
				           		</div>
				           </div>
				           <div class="col-xs-12 col-sm-7">
								<div class="col-xs-12 col-sm-12">
									<h2 class="tit-letters"><?php echo $item->nomIgle ?></h2>
									<h2 class="sub-letters">Pastor <?php echo $item->pasIgle ?></h2>
									<p class="bod-letters"><?php echo $item->eslogIgle ?></p>
									<p class="bod-letters"><?php echo $item->descIgle ?></p>
									<p class="bod-letters">Direcci&oacute;n: <strong><?php echo $item->calleIgle ?></strong>, n&uacute;mero <strong><?php echo $item->numExtIgle ?></strong>, interior <strong><?php echo $item->numInteIgle ?></strong>,
									colonia <strong><?php echo $item->coloIgle ?></strong>, c&oacute;digo postal <strong><?php echo $item->codPostIgle ?></strong>, <strong><?php echo $item->ciudadIgle ?></strong>, <strong><?php echo $item->edoIgle ?>.</strong></p>
									<p class="bod-letters">Tel&eacute;fono: <strong><?php echo $item->telIgle ?></strong>.</p>
									<p class="bod-letters">Correo electr&oacute;nico: <strong><?php echo $item->correEleIgle ?></strong></p>
									<p class="bod-letters">P&aacute;gina de facebook: <a href=<?php echo $item->fBIgle ?>><?php echo $item->fBIgle ?></a></p>
									<p class="bod-letters">P&aacute;gina de twitter: <a href=<?php echo $item->tWIgle ?>><?php echo $item->tWIgle ?></a></p>
									<div class="map-responsive">
										<h2 class="h2">Ubicaci&oacute;n en el mapa</h2>
						     			<iframe class="encap" src=<?php echo $item->mapaIgle ?> allowfullscreen><?php echo $item->mapaIgle ?></iframe>
						    		</div>
									<!--<p class="bod-letters">Otras redes: <a href=<?php echo $item->mapaIgle ?>><?php echo $item->mapaIgle ?></a></p>
								-->
								</div>
							</div>
				       </div>
					</div>
				</div>
			</div>
			
		</div>
	</div>
</section>