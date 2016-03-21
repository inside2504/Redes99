<div class="main">
	<div>
		<section class="header">
			<h1><?php echo lang('index_heading');?></h1>
			<h2>Despu&eacute;s de las instrucciones, en la tabla, se muestran todos los usuarios dados de alta.</h2>
		</section>
	</div>
	<div class="content">
		<div id="infoMessage"><?php echo $message;?></div>
		<section>
			<h2>Instrucciones</h2>
			<p>Si desea <strong><em>registrar un nuevo usuario</em></strong> entonces haga clic en <strong><em>"Crear nuevo usuario"</em></strong> para entrar al formulario de <strong><em>registro de un nuevo usuario.</em></strong></p>
			<p>Si desea <strong><em>registrar un nuevo grupo</em></strong> entonces haga clic en <strong><em>"Crear nuevo grupo"</em></strong> para entrar al formulario de <strong><em>registro de un nuevo tipo de usuario</em></strong></p>
			<p>Si desea <strong><em>cambiar la contrase&ntilde;a</em></strong> de este usuario haga clic en <strong><em>"Cambiar contrase&ntilde;a"</em></strong> para entrar <strong><em>al formulario</em></strong> </p>
			<p>El <strong><em>enlace de "Grupos"</em></strong> sirve para editar la descripci&oacute;n de los grupos. Para modificar la descripci&oacute;n del grupo de clic en el <strong><em>nombre del grupo.</em></strong></p>
			<p>El <strong><em>"estado"</em></strong> hace referencia a lo siguiente: Si el usuario se encuentra <strong><em>"Activo"</em></strong> quiere decir que puede acceder al sistema, si se encuenta <strong><em>"Inactivo"</em></strong> quiere decir que no tiene permitido ingresar al sistema.</p>
			<p>La <strong><em>acci&oacute;n "Editar"</em></strong> sirve para entrar al <strong><em>formulario de edici&oacute;n de los datos del usuario.</em></strong> Si desea realizar alg&uacute;n cambio en los datos del usuario haga clic en <strong><em>"Editar"</em></strong>.</p>
		</section>
		<section class="acciones">
                <p class="pure-u-1-3"><?php echo anchor('auth/create_user', lang('index_create_user_link'))?></p>
                <p class="pure-u-1-3"><?php echo anchor('auth/create_group', lang('index_create_group_link'))?></p>
                <p class="pure-u-1-3"><?php echo anchor('auth/change_password', lang('contrasena'))?></p>
        </section>
    </div>
    <div class="content">
			<table class="pure-table pure-table-bordered" cellpadding=0 cellspacing=10>
				<thead>
					<tr>
						<th><?php echo lang('index_fname_th');?></th>
						<th><?php echo lang('index_lname_th');?></th>
						<th><?php echo lang('index_email_th');?></th>
						<th><?php echo lang('index_groups_th');?></th>
						<th><?php echo lang('index_status_th');?></th>
						<th><?php echo lang('index_action_th');?></th>
					</tr>
				</thead>
				<?php foreach ($users as $user):?>
					<tbody>
						<tr>
				            <td><?php echo htmlspecialchars($user->PrimerNameUsuario,ENT_QUOTES,'UTF-8');?></td>
				            <td><?php echo htmlspecialchars($user->ApelliUsuario,ENT_QUOTES,'UTF-8');?></td>
				            <td><?php echo htmlspecialchars($user->CorreUser,ENT_QUOTES,'UTF-8');?></td>
							<td>
								<?php foreach ($user->groups as $group):?>
									<?php echo anchor("auth/edit_group/".$group->AidiGrupo, htmlspecialchars($group->NeimGrupo,ENT_QUOTES,'UTF-8')) ;?><br />
				                <?php endforeach?>
							</td>
							<td><?php echo ($user->Activo) ? anchor("auth/deactivate/".$user->AidiUsuario, lang('index_active_link')) : anchor("auth/activate/". $user->AidiUsuario, lang('index_inactive_link'));?></td>
							<td><?php echo anchor("auth/edit_user/".$user->AidiUsuario, 'Editar') ;?></td>
						</tr>
					</tbody>
				<?php endforeach;?>
			</table>
	</div>
</div>