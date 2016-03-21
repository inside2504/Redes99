<div class="main">
	<div>
		<section class="header">
			<h1><?php echo lang('reset_password_heading');?></h1>
		<section>
	</div>
		<div id="infoMessage"><?php echo $message;?></div>

		<?php echo form_open('auth/reset_password/' . $code);?>
		<section>
			<p>
				<label for="new_password"><?php echo sprintf(lang('reset_password_new_password_label'), $min_password_length);?></label> <br />
				<?php echo form_input($new_password);?>
			</p>
		</section>
		<section>
			<p>
				<?php echo lang('reset_password_new_password_confirm_label', 'new_password_confirm');?> <br />
				<?php echo form_input($new_password_confirm);?>
			</p>
		</section>
			<?php echo form_input($user_id);?>
			<?php echo form_hidden($csrf); ?>

			<p><?php echo form_submit('submit', lang('reset_password_submit_btn'));?></p>

		<?php echo form_close();?>
</div>