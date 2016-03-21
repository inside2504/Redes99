<section id="title">
	<div class="center">
        <h2>Librer&iacute;a</h2>
        <p class="lead">Bienvenido al apartado de empresas, aqu&iacute; podr&aacute;s encontrar el cat&aacute;logo de las empresas que se encuentran afiliadas a Redes evang&eacute;licas.</p>
    </div>
    <section class="container">
        <div class="pull-right">
            <form action="<?php echo base_url('/tianguisview/buscar');?>" method="GET" >
                <fieldset>
                    <h3>Filtrar por nombre
                        <input type="text" name="buscar" placeholder="Ingresa una palabra"/>
                        <button class="btn-primary" type="submit" value="Buscar">Buscar</button>
                     </h3>
                </fielfset>
            </form>
        </div>
    </section>
</section>

<section id="about-us">
    <div class="team">
        <div class="container">
	        <div class="team">
				<div class="row clearfix">
		        	<?php  if ($this->my_model->get() !=0):?>
    					<?php foreach ($results as $row): ?>
							<div class="col-md-3 col-sm-6">	
								<div class="single-profile-top wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
									<div class="media">
										<div class="pull-left">
											<img src="<?= base_url('').'assets/tianguis/'.$this->my_model->getImg($row->idProd) ?>" class="libreria">
										</div>
										
									</div><!--/.media -->
									<h4><?php echo $row->nombProd ?></h4>
									<h5><?php echo $row->autoProd ?></h5>
									<a href=<?php echo site_url("tianguisview/datos/".$row->idProd) ?> class="btn-primary">Ver m&aacute;s</a>
								</div>
							</div><!--/.col-lg-4 -->
						<?php endforeach;?>
					<?php endif;?>
				</div>
			</div>
		</div>
	</div>
	<div class="container">
        <div class="pull-right">
            <h2><?=$this->pagination->create_links(); ?></h2>
        </div>
    </div>
</section>