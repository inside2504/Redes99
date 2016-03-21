<div class="main">
	<div>
		<section class="header">
			<h1><?php echo lang('deactivate_heading');?></h1>
			<h2><?php echo sprintf(lang('deactivate_subheading'), $user->PrimerNameUsuario);?></h2>
		</section>
	</div>
	<div class="content">
		<form class="pure-form" method="POST">
			<fieldset>
				<?php echo form_open("auth/deactivate/".$user->id);?>
				<div>
					<p>
						<?php echo lang('deactivate_confirm_y_label', 'confirm');?>
					    <input type="radio" name="confirm" value="yes" checked="checked" />
					    <?php echo lang('deactivate_confirm_n_label', 'confirm');?>
					    <input type="radio" name="confirm" value="no" />

						<?php echo form_hidden($csrf); ?>
						<?php echo form_hidden(array('id'=>$user->AidiUsuario)); ?>
						<?php echo form_submit('submit', lang('deactivate_submit_btn'));?>
					</p>
				</div>
				<?php echo form_close();?>
			</fieldset>
		</form>
	</div>
</div>