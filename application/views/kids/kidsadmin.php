<div id="main">
    <div class="header">
        <h1>KIDS</h1>
        <h2>En este apartado podr&aacute;s administrar las entradas de Kids.</h2>
    </div>
    <div class="content">
        <section>
            <h2>Instrucciones</h2>
            <p>Si desea <strong><em>registrar una nueva entrada al blog</em></strong> entonces haga clic en <strong><em>"Registrar una entrada"</em></strong> para entrar al formulario e <strong><em>ingresar los datos</em></strong>.</p>
            <p>Si desea <strong><em>editar una entrada del blog</em></strong> entonces haga clic en <strong><em>"Editar"</em></strong> en la entrada deseada para entrar al formulario y <strong><em>modificar los datos deseados</em></strong>.</p>
            <p>Si desea <strong><em>eliminar una entrada</em></strong> registrada, entonces haga clic en <strong><em>"Eliminar"</em></strong> para <strong><em>eliminarlo del sistema</em></strong>.</p>
        </section>
        <section class="acciones">
            <p class="pure-u-1-3"><a href="<?php echo site_url('kids/regkids')?>">Registrar una entrada</a></p>
            <p class="pure-u-1-3"><a onclick="window.open(this.href); return false;" onkeypress="window.open(this.href); return false;" href="<?php echo site_url('kidsview')?>">Ir al apartado de Kids</a></p>
        </section>
    </div>
    <div class="content">
        <section>
            <div>
                <table class="pure-table pure-table-bordered" cellpadding=0 cellspacing=10>
                    <thead>
                        <th>T&iacute;tulo</th>
                        <th>Creaci&oacute;n</th>
                        <th></th>
                        <th></th>
                    </thead>
                    <tbody>
                        <?php
                            foreach ($this->my_model->get() as $row) {
                                echo "<tr>
                                        <td>$row->TituloKids</td>
                                        <td>$row->FechaCreacion</td>
                                        <td><a href='".site_url('kids/editar/'.$row->AidiKids)."'>Editar</a></td> 
                                        <td><a href='".site_url('kids/eliminar/'.$row->AidiKids)."'>Eliminar</a></td>
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