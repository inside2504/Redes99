<div class="contenido">
	<div>
		<section class="borde">
			<h2><?php echo lang('forgot_password_heading');?></h2>
			<h3><?php echo sprintf(lang('forgot_password_subheading'), $identity_label);?></h3>
		</section>
	</div>
		<div id="infoMessage"><?php echo $message;?></div>

		<?php echo form_open("auth/forgot_password");?>
		<section>
		    <p>
		   		<label for="identity"><?php echo (($type=='CorreUser') ? sprintf(lang('forgot_password_email_label'), $identity_label) : sprintf(lang('forgot_password_identity_label'), $identity_label));?></label> <br />
		      	<?php echo form_input($identity);?>
		    </p>
		</section>
		    <p><?php echo form_submit('submit', lang('forgot_password_submit_btn'));?></p>

		<?php echo form_close();?>
</div>