<div id="main">
        <div class="header">
            <h1>Libreria</h1>
            <h2>En este apartado podr&aacute;s administrar los articulos del tianguis</h2>
            <span><?php echo validation_errors(); ?></span>
        </div>
        <div class="content">
            <section>
                <h2>Instrucciones</h2>
                <p>Si desea <strong><em>registrar un producto</em></strong> entonces haga clic en <strong><em>"Registrar un producto"</em></strong> para entrar al formulario e <strong><em>ingresar los datos</em></strong>.</p>
                <p>Si desea <strong><em>editar los datos de un producto</em></strong> entonces haga clic en <strong><em>"Editar un producto"</em></strong> para entrar al formulario y <strong><em>modificar los datos deseados</em></strong>.</p>
                <p>Si desea <strong><em>eliminar un producto</em></strong> registrada, entonces haga clic en <strong><em>"Eliminar un producto"</em></strong> para <strong><em>eliminarlo del sistema</em></strong>.</p>
            </section>
            <section class="acciones">
                <p class="pure-u-1-3"><a href="<?php echo site_url('tianguis/regproducto')?>">Registrar un producto</a></p>
                <p class="pure-u-1-3"><a onclick="window.open(this.href); return false;" onkeypress="window.open(this.href); return false;" href="<?php echo site_url('tianguisview')?>">Ir al apartado de Librer&iacute;a</a></p>
            </section>
        </div>
        <div class="content">
            <section>
                <div>
                    <table class="pure-table pure-table-bordered" cellpadding=0 cellspacing=10>
                        <thead>
                            <th>N&uacute;mero</th>
                            <th>Producto</th>
                            <th>Autor</th>
                            <th>Precio</th>
                            <th>Librer&iacute;a</th>
                            <th>Calle</th>
                            <th>N&uacute;mero</th>
                            <th>Ciudad</th>
                            <th>Tel&eacute;fono</th>
                            <th></th>
                            <th></th>
                        </thead>
                        <tbody>
                            <?php
                                foreach ($this->my_model->get() as $row) {
                                    echo "<tr>
                                            <td>$row->idProd</td>
                                            <td>$row->nombProd</td>
                                            <td>$row->autoProd</td>
                                            <td>$row->precProd</td>
                                            <td>$row->nombLibProd</td>
                                            <td>$row->calleLibProd</td>
                                            <td>$row->numExtLibProd</td>
                                            <td>$row->ciuLibrProd</td>
                                            <td>$row->telefLibProd</td>
                                            <td><a href='".site_url('tianguis/editar/'.$row->idProd)."'>Editar</a></td> 
                                            <td><a href='".site_url('tianguis/eliminar/'.$row->idProd)."'>Eliminar</a></td>
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
                <p class="pure-u-1-3"><a href="<?php echo site_url('tianguis/regimg')?>">Registrar car&aacute;tula</a></p>
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
                                                <td>$item->producto_idProd</td>
                                                <td><img class='".'media-object'."' src='".base_url('')."".'assets/tianguis/'."".$item->imgProd."'></td>
                                                <td><a href='".site_url('tianguis/editarImg/'.$item->idImgProd)."'>Editar</a></td> 
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