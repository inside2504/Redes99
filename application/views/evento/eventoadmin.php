<div id="main">
        <div class="header">
            <h1>Eventos</h1>
            <h2>En este apartado podr&aacute;s administrar los eventos.</h2>
        </div>

        <div class="content">
            <section>
                <h2>Instrucciones</h2>
                <p>Si desea <strong><em>registrar un evento</em></strong> entonces haga clic en <strong><em>"Registrar un evento"</em></strong> para entrar al formulario e <strong><em>ingresar los datos</em></strong>.</p>
                <p>Si desea <strong><em>editar los datos de un evento</em></strong> entonces haga clic en <strong><em>"Editar"</em></strong> para entrar al formulario y <strong><em>modificar los datos deseados</em></strong>.</p>
                <p>Si desea <strong><em>eliminar una evento</em></strong> registrado, entonces haga clic en <strong><em>"Eliminar"</em></strong> para <strong><em>eliminarlo del sistema</em></strong>.</p>
            </section>
             <section class="acciones">
                <p class="pure-u-1-3"><a href="<?php echo site_url('evento/regevento')?>">Registrar un evento</a></p>
                <p class="pure-u-1-3"><a onclick="window.open(this.href); return false;" onkeypress="window.open(this.href); return false;" href="<?php echo site_url('eventosview')?>">Ir al apartado de eventos</a></p>
            </section>
        </div>
        <div class="content">
            <section>
                <div>
                    <table class="pure-table pure-table-bordered" cellpadding=0 cellspacing=10>
                        <thead>
                            <th>Evento</th>
                            <th>Descripci&oacute;n</th>
                            <th></th>
                        </thead>
                        <tbody>
                            <?php
                                foreach ($this->my_model->get() as $row) {
                                    echo "<tr>
                                            <td>$row->title</td>
                                            <td>$row->body</td>
                                            <td><a href='".site_url('evento/eliminar/'.$row->id)."'>Eliminar</a></td>
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