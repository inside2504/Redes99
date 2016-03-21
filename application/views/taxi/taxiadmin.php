<div id="main">
        <div class="header">
            <h1>Taxi</h1>
            <h2>En este apartado podr&aacute;s administrar los datos de los taxistas afiliados</h2>
        </div>

        <div class="content">
            <section>
                <h2>Instrucciones</h2>
                <p>Si desea <strong><em>registrar a un taxista</em></strong> entonces haga clic en <strong><em>"Registrar un taxista"</em></strong> para entrar al formulario e <strong><em>ingresar los datos</em></strong>.</p>
                <p>Si desea <strong><em>editar los datos de un taxista</em></strong> entonces haga clic en <strong><em>"Editar"</em></strong> para entrar al formulario y <strong><em>modificar los datos deseados</em></strong>.</p>
                <p>Si desea <strong><em>eliminar un taxista</em></strong> registrada, entonces haga clic en <strong><em>"Eliminar"</em></strong> para <strong><em>eliminarlo del sistema</em></strong>.</p>
            </section>
             <section class="acciones">
                <p class="pure-u-1-3"><a href="<?php echo site_url('taxi/regtaxi')?>">Registrar un taxista</a></p>
                <p class="pure-u-1-3"><a onclick="window.open(this.href); return false;" onkeypress="window.open(this.href); return false;" href="<?php echo site_url('taxiview')?>">Ir al apartado de Taxi</a></p>
            </section>
        </div>
        <div class="content">
            <section>
                <div>
                    <table class="pure-table pure-table-bordered" cellpadding=0 cellspacing=10>
                        <thead>
                            <th>N&uacute;mero</th>
                            <th>Nombre</th>
                            <th></th>
                            <th></th>
                            <th>Iglesia</th>
                            <th>Pastor</th>
                            <th>N&uacute;mero</th>
                            <th>Placa</th>
                            <th>Horario</th>
                            <th></th>
                            <th></th>
                        </thead>
                        <tbody>
                            <?php
                                foreach ($this->my_model->get() as $row) {
                                    echo "<tr>
                                            <td>$row->AidiTaxi</td>
                                            <td>$row->NombTaxista</td>
                                            <td>$row->ApePatTaxista</td>
                                            <td>$row->ApeMatTaxista</td>
                                            <td>$row->IglePerTaxi</td>
                                            <td>$row->PastIgleTaxi</td>
                                            <td>$row->NumEcoTaxi</td>
                                            <td>$row->PlacaNumTaxi</td>
                                            <td>$row->HorarioTaxi</td>
                                            <td><a href='".site_url('taxi/editar/'.$row->AidiTaxi)."'>Editar</a></td> 
                                            <td><a href='".site_url('taxi/eliminar/'.$row->AidiTaxi)."'>Eliminar</a></td>
                                        </tr>
                                    ";
                                }
                            ?>
                        </tbody>
                    </table>
                </div>
            </section>
        </div>
        <div class="content">
            <section class="acciones">
                <p class="pure-u-1-3"><a href="<?php echo site_url('taxi/regimg')?>">Registrar foto</a></p>
            </section>
        </div>
        <div class="content">
            <section>
                <div>
                    <table  class="pure-table pure-table-bordered" cellpadding=0 cellspacing=10>
                        <thead>
                            <th>N&uacute;mero</th>
                            <th>Imagen</th>
                            <th></th>
                        </thead>
                        <tbody>
                            <?php
                                    foreach ($this->my_model->get_imagen() as $item) {
                                        echo "<tr>
                                                <td>$item->taxi_AidiTaxi</td>
                                                <td><img class='".'media-object'."' src='".base_url('')."".'assets/taxi/'."".$item->fotoTaxi."'></td>
                                                <td><a href='".site_url('taxi/editarImg/'.$item->idfotoTaxi)."'>Editar</a></td> 
                                            </tr>
                                        ";
                                    }
                                ?>
                        </tbody>
                    </table>
                </div>
            </section>
        </div>
</div>