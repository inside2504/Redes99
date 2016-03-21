<div class="main">
	<div>
		<section class="header">
			<h1><?php echo lang('edit_group_heading');?></h1>
			<h2><?php echo lang('edit_group_subheading');?></h2>
		</section>
	</div>
	<div class="content">
		<form class="pure-form pure-form-aligned" method="POST">
			<fieldset>
				<div id="infoMessage"><?php echo $message;?></div>

				<?php echo form_open(current_url());?>
					<div class="pure-control-group">
				        <?php echo lang('edit_group_name_label', 'name');?>
				        <?php echo form_input($group_name);?>
				    </div>
					<div class="pure-control-group">
				            <?php echo lang('edit_group_desc_label', 'description');?>
				            <?php echo form_input($group_description);?>
					</div>
					<div class="pure-controls">
				      <?php echo form_submit('submit', lang('edit_group_submit_btn'));?>
				    </div>
				<?php echo form_close();?>
			</fieldset>
		</form>
	</div>
</div>