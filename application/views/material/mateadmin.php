<div id="main">
    <div class="header">
        <h1>Materiales</h1>
        <h2>En este apartado podr&aacute;s administrar los materiales</h2>
    </div>
    <div class="content">
        <section>
            <h2>Instrucciones</h2>
            <p>Si desea <strong><em>registrar un material</em></strong> entonces haga clic en <strong><em>"Registrar un material"</em></strong> para entrar al formulario e <strong><em>ingresar los datos</em></strong>.</p>
            <p>Si desea <strong><em>editar los datos de un material</em></strong> entonces haga clic en <strong><em>"Editar un material"</em></strong> para entrar al formulario y <strong><em>modificar los datos deseados</em></strong>.</p>
            <p>Si desea <strong><em>eliminar un material</em></strong> registrado, entonces haga clic en <strong><em>"Eliminar un material"</em></strong> para <strong><em>eliminarlo del sistema</em></strong>.</p>
        </section>
        <section class="acciones">
            <p class="pure-u-1-3"><a href="<?php echo site_url('material/regmaterial')?>">Registrar un material</a></p>
            <p class="pure-u-1-3"><a onclick="window.open(this.href); return false;" onkeypress="window.open(this.href); return false;" href="<?php echo site_url('materialesview')?>">Ir al apartado de materiales</a></p>
        </section>
    </div>
    <div class="content">
        <section>
            <div>
                <table class="pure-table pure-table-bordered" cellpadding=0 cellspacing=10>
                    <thead>
                        <th>N&uacute;mero</th>
                        <th>Categor&iacute;a</th>
                        <th>T&iacute;tulo</th>
                        <th>Autor</th>
                        <th></th>
                        <th></th>
                    </thead>
                    <tbody>
                        <?php
                            foreach ($this->my_model->get() as $row) {
                                echo "<tr>
                                        <td>$row->idMate</td>
                                        <td>$row->cateMate</td>
                                        <td>$row->nombMate</td>
                                        <td>$row->autMate</td>
                                        <td><a href='".site_url('material/editar/'.$row->idMate)."'>Editar</a></td> 
                                        <td><a href='".site_url('material/eliminar/'.$row->idMate)."'>Eliminar</a></td>
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
                <p class="pure-u-1-3"><a href="<?php echo site_url('material/regimg')?>">Registrar car&aacute;tula</a></p>
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
                                                <td>$item->material_idMate</td>
                                                <td><img class='".'media-object'."' src='".base_url('')."".'assets/material/'."".$item->imgMate."'></td>
                                                <td><a href='".site_url('material/editarImg/'.$item->idImgMate)."'>Editar</a></td> 
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