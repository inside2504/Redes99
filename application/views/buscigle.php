<section id="title">
    <div class="center">
        <h2>Iglesias</h2>
        <p class="lead">Bienvenido al apartado de iglesias, aqu&iacute; podr&aacute;s encontrar el cat&aacute;logo de las iglesias que se encuentran afiliadas a Redes evang&eacute;licas.<br>
        Tambi&eacute;n encontrar&aacute;s los datos por si est&aacute;s buscando d&oacute;nde congregarte.</p>
    </div>
    <section class="container">
        <div class="pull-right">
            <form action="<?php echo base_url('/iglesiasview/buscar');?>" method="GET" >
                <fieldset>
                    <h3>Filtrar por Iglesia
                            <select type="text" autocomplete="off" name="buscar">
                                <?php foreach ($this->my_model->get() as $total): ?>
                                <option value="<?php echo $total->nomIgle ?>"><?php echo $total->nomIgle ?></option>
                                <?php endforeach;?>
                            </select>
                         <button class="btn-primary" type="submit" value="Buscar">Buscar</button>
                     </h3>
                </fielfset>
            </form>
        </div>
    </section>
</section>


<section>
    <?php foreach ($item as $row): ?>
        <section>
            <section class="elementos">
                <div class="row clearfix">
                    <div class="col-md-10 col-sm-6 col-md-offset-1"> 
                        <div class="single-profile-bottom wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="600ms">
                            <div class="media">
                                <div class="pull-left">
                                    <img class="media-object" src="<?=base_url('')."assets/iglesias/"."$row->logo"?>" alt="">
                                </div>
                                <div class="media-body">
                                    <h4><?php echo $row->nomIgle ?></h4>
                                    <h5>Pastor <strong><em><?php echo $row->pasIgle ?></em></strong></h5>
                                    <h5><strong><em><?php echo $row->eslogIgle ?></em></strong></h5>
                                    <ul class="social_icons">
                                        <li><a href="<?php echo $row->fBIgle;?>" onclick="window.open(this.href); return false;" onkeypress="window.open(this.href); return false"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="<?php echo $row->tWIgle;?>" onclick="window.open(this.href); return false;" onkeypress="window.open(this.href); return false"><i class="fa fa-twitter"></i></a></li> 
                                        <li><a href="#" onclick="window.open(this.href); return false;" onkeypress="window.open(this.href); return false"><i class="fa fa-google-plus"></i></a></li>
                                    </ul>
                                </div>
                            </div><!--/.media -->
                        <p class="lead"><?php echo $row->descIgle ?></p>
                        <p class="lead">Direcci&oacute;n: <strong><em><?php echo $row->calleIgle ?></em></strong> n&uacute;mero exterior <strong><em><?php echo $row->numExtIgle ?></em></strong>, n&uacute;mero interior <strong><em><?php echo $row->numInteIgle ?></em></strong>, c&oacute;digo postal: <strong><em><?php echo $row->codPostIgle ?></em></strong>, <strong><em><?php echo $row->ciudadIgle ?></em></strong>, <strong><em><?php echo $row->edoIgle ?></em></strong>.</p>
                        <p class="lead">Teléfonos: <strong><em><?php echo $row->telIgle ?></em></strong>.</p>
                        <p class="lead">Correo electrónico: <strong><em><?php echo $row->correEleIgle ?></em></strong></p>
                        <a href=<?php echo site_url("iglesiasview/datos/".$row->idIgle) ?> class="btn-primary">M&aacute;s informaci&oacute;n</a>
                        </div>
                    </div>
                </div>
            </section>
        </section>
    <?php endforeach;?>
    <div class="container">
        <div class="pull-right">
            <h2><?=$this->pagination->create_links(); ?></h2>
        </div>
    </div>
    
</section>