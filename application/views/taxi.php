<section id="title">
    <div class="center">
        <h2>Taxi</h2>
        <p class="lead">Bienvenido al apartado de Taxis. Aqu&iacute; encontrar&aacute;s el listado de los prestadores de servicio de transporte p&uacute;blico (Taxi) para que viajes m&aacute;s seguro.</p>
    </div>
</section>

<section>
<?php if ($this->my_model->get() !=0):?>
    <section>
        <div class="elementos">
            <div class="container">
               <div class="team">
                    <div class="row clearfix">
                        <?php foreach ($results as $row): ?>
                            <div class="col-md-3 col-sm-6">  
                                <div class="single-profile-bottom wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="600ms">
                                    <div class="media">
                                        <div class="pull-left">
                                            <img src="<?= base_url('').'assets/taxi/'.$this->my_model->getImg($row->AidiTaxi) ?>" class="media-object">
                                        </div>
                                    </div>
                                    <h4><?php echo $row->NombTaxista ?> <?php echo $row->ApePatTaxista ?> <?php echo $row->ApeMatTaxista ?></h4>
                                    <p class="lead">Recomendado por el Pastor <strong><em><?php echo $row->PastIgleTaxi ?></em></strong> de la iglesia <strong><em><?php echo $row->IglePerTaxi ?></em></strong></p>
                                    <p class="lead">N&uacute;mero econ&oacute;mico <strong><em><?php echo $row->NumEcoTaxi ?></em></strong></p>
                                    <p class="lead">Placa <strong><em><?php echo $row->PlacaNumTaxi ?></em></strong></p>
                                    <p class="lead">Horario <strong><em><?php echo $row->HorarioTaxi ?></em></strong></p>
                                    <p class="lead">Teléfono: <strong><em><?php echo $row->TelefTaxi ?></em></strong>.</p>
                                </div>
                            </div>
                        <?php endforeach;?>
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
<?php endif;?>
</section>