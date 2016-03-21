	<!--Carrusel de imagenes-->
	<section id="main-slider">
			<!--Circulos blancos del carrusel-->
			<div id="carrusel" class="carousel slide" data-ride="carousel">
				<ol class="carousel-indicators">
	                <li data-target="#main-slider" data-slide-to="0" class="active"></li>
	                <li data-target="#main-slider" data-slide-to="1"></li>
	                <li data-target="#main-slider" data-slide-to="2"></li>
	                <li data-target="#main-slider" data-slide-to="3"></li>
	                <li data-target="#main-slider" data-slide-to="4"></li>
	                <li data-target="#main-slider" data-slide-to="5"></li>
	                <li data-target="#main-slider" data-slide-to="6"></li>
            	</ol>

            	<!--Imagenes del carrusel-->
				<div class="carousel-inner">
					<!--Elemento activo del carrusel-->
					<div class="item active" style="background-image: url(<?=base_url('')."assets/img/1carru.jpg"?>)">
						<div class="container">
                        	<div class="row slide-margin">
                            	<div class="col-sm-6">
                                	<div class="carousel-content">
										<h1 class="animation animated-item-1">&Uacute;nete a las redes</h1>
										<a class="btn-slide animation animated-item-3" href="<?php echo site_url('nosotrosview')?>" role="button">Conoce m&aacute;s</a>
									</div>
								</div>
							</div>
						</div>
					</div><!--Termina elemento del carrusel-->
					<div class="item" style="background-image: url(<?=base_url('')."assets/img/2carru.jpg"?>)">
						<div class="container">
                        	<div class="row slide-margin">
                            	<div class="col-sm-6">
                                	<div class="carousel-content">
										<h1 class="animation animated-item-1">Busca profesionales</h1>
										<a class="btn-slide animation animated-item-3" href="<?php echo site_url('serviciosview')?>" role="button">Da clic aqu&iacute;</a>
									</div>
								</div>
							</div>
						</div>
					</div><!--Termina elemento del carrusel-->
					<div class="item" style="background-image: url(<?=base_url('')."assets/img/3carru.jpg"?>)">
						<div class="container">
                        	<div class="row slide-margin">
                            	<div class="col-sm-6">
                                	<div class="carousel-content">
										<h1 class="animation animated-item-1">Empresas cristianas</h1>
										<a class="btn-slide animation animated-item-3" href="<?php echo site_url('empresasview')?>" role="button">M&aacute;s informaci&oacute;n</a>
									</div>
								</div>
							</div>
						</div>
					</div><!--Termina elemento del carrusel-->
					<div class="item" style="background-image: url(<?=base_url('')."assets/img/4carru.jpg"?>)">
						<div class="container">
                        	<div class="row slide-margin">
                            	<div class="col-sm-6">
                                	<div class="carousel-content">
										<h1 class="animation animated-item-1">Librer&iacute;a</h1>
										<a class="btn-slide animation animated-item-3" href="<?php echo site_url('tianguisview')?>" role="button">Ubica tu art&iacute;culo</a>
									</div>
								</div>
							</div>
						</div>
					</div><!--Termina elemento del carrusel-->
					<div class="item" style="background-image: url(<?=base_url('')."assets/img/5carru.jpg"?>)">
						<div class="container">
                        	<div class="row slide-margin">
                            	<div class="col-sm-6">
                                	<div class="carousel-content">
										<h1 class="animation animated-item-1">Iglesias cristianas</h1>
										<a class="btn-slide animation animated-item-3" href="<?php echo site_url('iglesiasview')?>" role="button">Conoce m&aacute;s iglesias</a>
									</div>
								</div>
							</div>
						</div>
					</div><!--Termina elemento del carrusel-->
					<div class="item" style="background-image: url(<?=base_url('')."assets/img/6carru.jpg"?>)">
						<div class="container">
                        	<div class="row slide-margin">
                            	<div class="col-sm-6">
                                	<div class="carousel-content">
										<h1 class="animation animated-item-1">Radio cristiana</h1>
										<a class="btn-slide animation animated-item-3" href="<?php echo site_url('radioview')?>" role="button">Escucha nuestra Radio</a>
									</div>
								</div>
							</div>
						</div>
					</div><!--Termina elemento del carrusel-->
					<div class="item" style="background-image: url(<?=base_url('')."assets/img/7carru.jpg"?>)">
						<div class="container">
                        	<div class="row slide-margin">
                            	<div class="col-sm-6">
                                	<div class="carousel-content">
										<h1 class="animation animated-item-1">Zona KIDS</h1>
										<a class="btn-slide animation animated-item-3" href="<?php echo site_url('kidsview')?>" role="button">¡Vamos a la Zona KIDS!</a>
									</div>
								</div>
							</div>
						</div>
					</div><!--Termina elemento del carrusel-->
				</div><!--Termina apartado de imagenes del carrusel-->
				<!--Botones estilo flecha para avanzar o retroceder en el carrusel-->
				<a class="prev hidden-xs" href="#main-slider" data-slide="prev">
            		<i class="fa fa-chevron-left"></i>
       			</a>
        		<a class="next hidden-xs" href="#main-slider" data-slide="next">
            		<i class="fa fa-chevron-right"></i>
        		</a><!--Termina botones estilo flecha del carrusel-->
        		</div><!--Terminan circulos blancos del carrusel-->
	</section><!--Termina carrusel del carrusel-->

	<section id="news-background">
		<div class="center">
	   		<h1>&Uacute;ltimas noticias Cristianas</h1>
	   		<p class="lead">Aviso, las siguientes noticias se actualizan a diario y son externas a Redes evang&eacute;licas</p>
	    </div>
		<div id="news">
		   	<h3>
		</div>
	</section>
	
	<section id="taxi">
		<div class="center">
	       	<h1>Taxi seguro</h1>
	    </div>
		<div class="center">
			<p class="lead">Taxi seguro es una modalidad ofrecida por Redes evang&eacute;licas para brindar seguridad en el traslado en taxi a
				las personas, <br>con la confianza de que el chofer es cristiano recomendado por su pastor.</p><br>
			<a class="btn-primary" href="<?php echo site_url('taxiview')?>">Pide tu Taxi</a>
		</div>
	</section>

        <script type="text/javascript">
            var feedcontainer=document.getElementById("news")
            var feedurl="http://www.noticiacristiana.com/feed"
            var feedlimit=5
            var rssoutput=""

            function rssfeedsetup(){
                var feedpointer=new google.feeds.Feed(feedurl) //Google Feed API method
                feedpointer.setNumEntries(feedlimit) //Google Feed API method
                feedpointer.load(displayfeed) //Google Feed API method
            }

            function displayfeed(result){
                if (!result.error){
	                var thefeeds=result.feed.entries
	                for (var i=0; i<thefeeds.length; i++)
	                rssoutput+="<p><a href='" + thefeeds[i].link + "'>" + thefeeds[i].title + "</a><br></p>"
	                feedcontainer.innerHTML=rssoutput
            	}
            else
                alert("Error fetching feeds!")
            }

            window.onload=function(){
                rssfeedsetup()
            }

        </script>
        

	<section id="feature">
		<!--
		<div class="container">
			<div class="center wow fadeInDown">
				<h2>Testimonios</h2>
				<p class="lead">Estos son algunos testimonios de personas que han sido ayudados gracias a Redes Evang&eacute;licas</p>
			</div>

			<div class="row">
                <div class="features">
					<div class="col-md-4 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <div class="feature-wrap">
							<img class="img-responsive" src="<?=base_url('')."assets/img/item1.jpg"?>" alt="">
							<h2>Dise&ntilde;ador web</h2>
							<h3>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer.</h3>
						</div>
					</div>
					<div class="col-md-4 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
						<div class="feature-wrap">
							<img class="img-responsive" src="<?=base_url('')."assets/img/item2.jpg"?>" alt="">
							<h2>Empresaria</h2>
							<h3>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer.</h3>
						</div>
					</div>
					<div class="col-md-4 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
						<div class="feature-wrap">
							<img class="img-responsive" src="<?=base_url('')."assets/img/item3.jpg"?>" alt="">
							<h2>M&eacute;dico</h2>
							<h3>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer.</h3>
						</div>
					</div>
				</div>
			</div>
			-->
	</section><!-- end of about section -->

	<div class="map-responsive">
     	<div id="mapa"></div>
    </div>

    <section id="feature">
    </section>

    <section class="contact-info">
			<div class="container">
				<div class="contact-heading">
						<h1>Cont&aacute;ctanos</h1>
						<h2>Informaci&oacute;n de contacto</h2>
				</div>
				<div class="row">
                    <ul class="col-sm-7">
						<h1 class="glyphicon glyphicon-globe"></h1></i><span> Direcci&oacute;n:</span> Jes&uacute;s Garc&iacute;a #12, Colonia Centro, Xalapa, Veracruz
					</ul>
                    <ul class="col-sm-5">
						<h1 class="glyphicon glyphicon-calendar"></h1></i><span> Lunes a Viernes:</span> 10:00 AM to 7:00 PM
					</ul>
				</div>
				<div class="row">
                    <ul class="col-sm-7">
						<h1 class="glyphicon glyphicon-earphone"></h1><span> Tel&eacute;fono:</span>
					</ul>
                    <ul class="col-sm-5">
						<h1 class="glyphicon glyphicon-envelope"></h1><span> Email: contacto@redesevangelicas.com</span>
					</ul>
				</div>
			</div>
	</section><!-- end of contact section -->