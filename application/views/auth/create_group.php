<div class="main">
	<div>
		<section class="header">
			<h1><?php echo lang('create_group_heading');?></h1>
			<h2><?php echo lang('create_group_subheading');?></h2>
		</section>
	</div>
	<div class="content">
		<form class="pure-form pure-form-aligned" method="POST">
			<div id="infoMessage"><?php echo $message;?></div>

			<?php echo form_open("auth/create_group");?>
				<div class="pure-control-group">
			            <?php echo lang('create_group_name_label', 'group_name');?>
			            <?php echo form_input($group_name);?>
			    </div>
			    <div class="pure-control-group">
			            <?php echo lang('create_group_desc_label', 'description');?>
			            <?php echo form_input($description);?>
			    </div>
			    <div>
			      	<?php echo form_submit('submit', lang('create_group_submit_btn'));?>
			    </div>

			<?php echo form_close();?>
		</div>
	</div>
</div>