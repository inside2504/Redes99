<section id="title">
        <div class="center">
            <h2>Kids</h2>
            <p class="lead">Esta &aacute;rea est&aacute; pensada especialmente para los ni&ntilde;os. <br>Aqu&iacute; encontrar&aacute;s un canal cristiano para ni&ntilde;os, videos y m&uacute;sica pensada especialmente para nuestros ni&ntilde;os </p>
            <p class="lead">*AVISO: El canal no se encuentra disponible para ser reproducido en dispositivos m&oacute;viles (celulares) y tablets</p>
        </div>
</section>

<section id="blog" class="container">
	<div class="blog">
		<div class="row">
			<div class="col-md-12">
		            <div class="row">
		                <div class="col-xs-12 col-sm-6 text-center">
							<div class="col-xs-12 col-sm-12 blog-content">
								<div class="tit">
				                    <span id="publish_date"><h1>TV Cristiana</h1></span>
				                </div>
								<iframe class="LS-responsive" src="http://cdn.livestream.com/embed/avanzakids?layout=4&amp;height=340&amp;width=560&amp;autoplay=false" frameborder="0" scrolling="no"></iframe>
								<div>Watch <a href="http://original.livestream.com/?utm_source=lsplayer&amp;utm_medium=embed&amp;utm_campaign=footerlinks" title="live streaming video">live streaming video</a> from <a href="http://original.livestream.com/avanzakids?utm_source=lsplayer&amp;utm_medium=embed&amp;utm_campaign=footerlinks" title="Watch avanzakids at livestream.com">avanzakids</a> at livestream.com</div>
							</div>
						</div>
						<div class="col-xs-12 col-sm-6 text-center">
							<div class="col-xs-12 col-sm-12 blog-content">
								<div class="tit">
				                    <span id="publish_date"><h1>M&uacute;sica para ni&ntilde;os</h1></span>
				                </div>
								<iframe class="LS-responsive" src="https://www.youtube.com/embed/cq9QKQcso_c?list=PLED0F527CBE90F983" frameborder="0" allowfullscreen></iframe>
							</div>
						</div>
					</div>
			</div>
		</div>
	</div>
</section>

<section id="feature">
	<div class="container">
        <div class="blog">
        	<div class="center">
        		<h2>Blog<h2>
        		<p class="lead">En esta secci&oacute;n encontrar&aacute;s caricaturas cristianas de historias b&iacute;blicas en video.</p>
        	</div>
            <div class="row">
            	<?php  if ($this->my_model->get() !=0):?>
					<?php foreach ($results as $row): ?>
		                 <div class="col-md-12">
		                    <div class="blog-item">
		                        <div class="row">
		                            <div class="col-xs-12 col-sm-8 text-center">
		                                <div class="entry-meta">
		                                    <iframe class="YT-responsive" src="http://www.youtube.com/embed/<?php echo $row->LinkKids ?>" frameborder="0" allowfullscreen></iframe>
		                                </div>
		                            </div>
		                                
		                            <div class="col-xs-12 col-sm-4 blog-content">
		                                <div class="entry-meta">
		                                    <span id="publish_date"><h1><?php echo $row->TituloKids ?></h1></span>
		                                </div>
		                                
		                                <h4><?php echo $row->FechaCreacion ?></h4>
		                                <p class="lead"><?php echo $row->TextKids ?></p>
		                            </div>
		                        </div>    
                    		</div><!--/.blog-item-->
                		</div>
                	<?php endforeach;?>
				<?php endif;?>
            </div>
        </div>
        <div class="container">
	        <div class="pull-right">
	            <h2><?=$this->pagination->create_links(); ?></h2>
	        </div>
	    </div>
    </div>
</section>