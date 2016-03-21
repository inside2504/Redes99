<div class="main">
  <div>
    <section class="header">
      <h1><?php echo lang('create_user_heading');?></h1>
      <h2><?php echo lang('create_user_subheading');?></h2>
    </section>
  </div>
  <div class="content">
  <div id="infoMessage"><?php echo $message;?></div>
    <form class="pure-form pure-form-stacked" method="POST">
      <fieldset>
      <?php echo form_open("auth/create_user");?>
      <div class="pure-g">
        <div class="pure-u-1 pure-u-md-1-3">
                <?php echo lang('create_user_fname_label', 'PrimerNameUsuario');?>
                <?php echo form_input($PrimerNameUsuario);?>
        </div>
        <div class="pure-u-1 pure-u-md-1-3">
                <?php echo lang('create_user_lname_label', 'ApelliUsuario');?>
                <?php echo form_input($ApelliUsuario);?>
        </div>

          <?php
          if($identity_column!=='CorreUser') {
              echo '<p>';
              echo lang('create_user_identity_label', 'identity');
              echo '<br />';
              echo form_error('identity');
              echo form_input($identity);
              echo '</p>';
          }
          ?>
        <div class="pure-u-1 pure-u-md-1-3">
          <?php echo lang('create_user_email_label', 'CorreUser');?>
          <?php echo form_input($CorreUser);?>
        </div>
        <div class="pure-u-1 pure-u-md-1-3">
          <?php echo lang('create_user_phone_label', 'TelefUsuario');?>
          <?php echo form_input($TelefUsuario);?>
        </div>
        <div class="pure-u-1 pure-u-md-1-3">
          <?php echo lang('create_user_password_label', 'ContraUsuario');?>
          <?php echo form_input($ContraUsuario);?>
        </div>
        <div class="pure-u-1 pure-u-md-1-3">
          <?php echo lang('create_user_password_confirm_label', 'password_confirm');?>
          <?php echo form_input($password_confirm);?>
        </div>
      </div>
          <p><?php echo form_submit('submit', lang('create_user_submit_btn'));?></p>

      <?php echo form_close();?>
      </fieldset>
    </form>
  </div>
</div>