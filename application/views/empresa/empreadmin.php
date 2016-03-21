<div id="main">
        <div class="header">
            <h1>Empresas</h1>
            <h2>En este apartado podr&aacute;s administrar las empresas</h2>
        </div>
        <div class="content">
            <section>
                <h2>Instrucciones</h2>
                <p>Si desea <strong><em>registrar una empresa</em></strong> entonces haga clic en <strong><em>"Registrar una empresa"</em></strong> para entrar al formulario e <strong><em>ingresar los datos</em></strong>.</p>
                <p>Si desea <strong><em>editar los datos de una empresa</em></strong> entonces haga clic en <strong><em>"Editar una empresa"</em></strong> para entrar al formulario y <strong><em>modificar los datos deseados</em></strong>.</p>
                <p>Si desea <strong><em>eliminar una empresa</em></strong> registrada, entonces haga clic en <strong><em>"Eliminar una empresa"</em></strong> para <strong><em>eliminarla del sistema</em></strong>.</p>
            </section>
            <section class="acciones">
                <p class="pure-u-1-3"><a href="<?php echo site_url('empresa/regempresa')?>">Registrar una empresa</a></p>
                <p class="pure-u-1-3"><a onclick="window.open(this.href); return false;" onkeypress="window.open(this.href); return false;" href="<?php echo site_url('empresasview')?>">Ir al apartado de empresas</a></p>
            </section>
        </div>
        <div class="content">
            <section>
                <div>
                    <table class="pure-table pure-table-bordered" cellpadding=0 cellspacing=10>
                        <thead>
                            <th>N&uacute;mero</th>
                            <th>Empresa</th>
                            <th>Iglesia</th>
                            <th>Calle</th>
                            <th>N&uacute;mero</th>
                            <th>Colonia</th>
                            <th>Ciudad</th>
                            <th>Estado</th>
                            <th>Tel&eacute;fono</th>
                            <th></th>
                            <th></th>
                        </thead>
                        <tbody>
                            <?php
                                foreach ($this->my_model->get() as $row) {
                                    echo "<tr>
                                            <td>$row->AidiEmpr</td>
                                            <td>$row->NameEmpr</td>
                                            <td>$row->IglePertEmpr</td>
                                            <td>$row->CalleEmpr</td>
                                            <td>$row->NumExtEmpr</td>
                                            <td>$row->ColEmpr</td>
                                            <td>$row->CiudadEmpr</td>
                                            <td>$row->EdoEmpr</td>
                                            <td>$row->TelefEmpr</td>
                                            <td><a href='".site_url('empresa/editar/'.$row->AidiEmpr)."'>Editar</a></td> 
                                            <td><a href='".site_url('empresa/eliminar/'.$row->AidiEmpr)."'>Eliminar</a></td>
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
                <p class="pure-u-1-3"><a href="<?php echo site_url('empresa/reglogo')?>">Registrar un logo</a></p>
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
                                    foreach ($this->my_model->get_logo() as $col) {
                                        echo "<tr>
                                                <td>$col->empresa_AidiEmpr</td>
                                                <td><img class='".'media-object'."' src='".base_url('')."".'assets/empresa/'."".$col->logoEmpr."'></td>
                                                <td><a href='".site_url('empresa/editarLogo/'.$col->idLogoEmpr)."'>Editar</a></td> 
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
                <p class="pure-u-1-3"><a href="<?php echo site_url('empresa/regimg')?>">Registrar una foto</a></p>
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
                                                <td>$item->empresa_AidiEmpr</td>
                                                <td><img class='".'media-object'."' src='".base_url('')."".'assets/empresa/'."".$item->fotoResp."'></td>
                                                <td><a href='".site_url('empresa/editarImg/'.$item->idFotoResp)."'>Editar</a></td> 
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