<div id="main">
        <div class="header">
            <h1>Servicios</h1>
            <h2>En este apartado podr&aacute;s administrar los servicios</h2>
        </div>

        <div class="content">
            <section>
                <h2>Instrucciones</h2>
                <p>Si desea <strong><em>registrar un nuevo servicio</em></strong> entonces haga clic en <strong><em>"Registrar un servicio"</em></strong> para entrar al formulario e <strong><em>ingresar los datos</em></strong>.</p>
                <p>Si desea <strong><em>editar los datos de un servicio</em></strong> entonces haga clic en <strong><em>"Editar"</em></strong> para entrar al formulario y <strong><em>modificar los datos deseados</em></strong>.</p>
                <p>Si desea <strong><em>eliminar un servicio</em></strong> registrado, entonces haga clic en <strong><em>"Eliminar"</em></strong> para <strong><em>eliminarlo del sistema</em></strong>.</p>
            </section>
            <section class="acciones">
                <p class="pure-u-1-3"><a href="<?php echo site_url('servicio/regservicio')?>">Registrar un servicio</a></p>
                <p class="pure-u-1-3"><a onclick="window.open(this.href); return false;" onkeypress="window.open(this.href); return false;" href="<?php echo site_url('serviciosview')?>">Ir al apartado de servicios</a></p>
            </section>
        </div>
        <div>
            <div class="content">
            <section>
                <div>
                    <table class="pure-table pure-table-bordered" cellpadding=0 cellspacing=10>
                        <thead>
                            <th>Nombre</th>
                            <th>Apellido</th>
                            <th></th>
                            <th>Servicio</th>
                            <th>Calle</th>
                            <th>N&uacute;mero</th>
                            <th>Colonia</th>
                            <th>Tel&eacute;fono</th>
                            <th></th>
                            <th></th>
                        </thead>
                        <tbody>
                            <?php
                                foreach ($this->my_model->get() as $row) {
                                    echo "<tr>
                                            <td>$row->NamePrestServ</td>
                                            <td>$row->ApePatPrestServ</td>
                                            <td>$row->ApeMatPrestServ</td>
                                            <td>$row->ServOfrecido</td>
                                            <td>$row->CalleServ</td>
                                            <td>$row->NumExtSer</td>
                                            <td>$row->ColServ</td>
                                            <td>$row->TelefServ</td>
                                            <td><a href='".site_url('servicio/editar/'.$row->AidiServi)."'>Editar</a></td> 
                                            <td><a href='".site_url('servicio/eliminar/'.$row->AidiServi)."'>Eliminar</a></td>
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
                <p class="pure-u-1-3"><a href="<?php echo site_url('servicio/regimg')?>">Registrar una foto</a></p>
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
                                                <td>$item->servicio_AidiServi</td>
                                                <td><img class='".'media-object'."' src='".base_url('')."".'assets/servicio/'."".$item->imgServ."'></td>
                                                <td><a href='".site_url('servicio/editarImg/'.$item->idimgServ)."'>Editar</a></td> 
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