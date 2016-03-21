<div id="main">
        <div class="header">
            <h1>Radio</h1>
            <h2>En este apartado podr&aacute;s administrar la radio</h2>
        </div>

        <div class="content">
            <section>
                <h2>Instrucciones</h2>
                <p>Si desea <strong><em>registrar una iglesia</em></strong> entonces haga clic en <strong><em>"Registrar una iglesia"</em></strong> para entrar al formulario e <strong><em>ingresar los datos</em></strong>.</p>
                <p>Si desea <strong><em>editar los datos de una iglesia</em></strong> entonces haga clic en <strong><em>"Editar"</em></strong> para entrar al formulario y <strong><em>modificar los datos deseados</em></strong>.</p>
                <p>Si desea <strong><em>eliminar una iglesia</em></strong> registrada, entonces haga clic en <strong><em>"Eliminar"</em></strong> para <strong><em>eliminarla del sistema</em></strong>.</p>
            </section>
             <section class="acciones">
                <p class="pure-u-1-3"><a href="<?php echo site_url('iglesia/regiglesia')?>">Registrar</a></p>
                <p class="pure-u-1-3"><a onclick="window.open(this.href); return false;" onkeypress="window.open(this.href); return false;" href="<?php echo site_url('iglesiasview')?>">Ir al apartado de </a></p>
            </section>
        </div>
        <div class="content">
            <section>
                <div>
                    <table class="pure-table pure-table-bordered" cellpadding=0 cellspacing=10>
                        <thead>
                            <th>Iglesia</th>
                            <th>Pastor</th>
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
                            
                        </tbody>
                    </table>
                </div>
            </section>
        </div>
</div>