<section id="title">
        <div class="center">
            <h2>Librer&iacute;a</h2>
            <p class="lead">Est&aacute;s viendo los datos del producto que seleccionaste. </p>
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
				           			<img src="<?= base_url('').'assets/tianguis/'.$this->my_model->getImg($item->idProd) ?>" class="img-dato">
				           		</div>
				           </div>
				           <div class="col-xs-12 col-sm-7">
								<div class="col-xs-12 col-sm-12">
									<h2 class="tit-letters"><?php echo $item->nombProd ?></h2>
									<h2 class="sub-letters"><?php echo $item->autoProd ?></h2>
									<p class="bod-letters"><?php echo $item->descrProd ?></p>
									<p class="bod-letters">El precio de este producto es de: <strong>$<?php echo $item->precProd ?> pesos.*</strong></p>
									<p class="bod-letters">Puedes encontrarlo en <strong>Librer&iacute;a <?php echo $item->nombLibProd ?>.</strong></p>
									<p class="bod-letters">Ubicada en <strong><?php echo $item->calleLibProd ?></strong>, n&uacute;mero: <strong><?php echo $item->numExtLibProd ?></strong> interior <strong><?php echo $item->numIntLibProd ?></strong>,
									colonia <strong><?php echo $item->coloLibProd ?></strong>, c&oacute;digo postal <strong><?php echo $item->codPostLibProd ?></strong>, <strong><?php echo $item->ciuLibrProd ?></strong>, <strong><?php echo $item->edoLibProd ?></strong></p>
									<p class="bod-letters">Tel&eacute;fono <strong><?php echo $item->telefLibProd ?></strong></p>
									<p class="bod-letters">Correo electr&oacute;nico: <strong><?php echo $item->correEleLibProd ?></strong></p>
									<p class="bod-letters">P&aacute;gina de facebook: <a href=<?php echo $item->fBLibProd ?>><?php echo $item->fBLibProd ?></a></p>
									<p class="bod-letters">P&aacute;gina de twitter: <a href=<?php echo $item->tWLibProd ?>><?php echo $item->tWLibProd ?></a></p>
								</div>
							</div>
				       </div>
					</div>
				</div>
			</div>
			<p class="lead pull-right"><strong>*Todos los precios se muestran en moneda nacional.</strong></p>
		</div>
	</div>
</section>