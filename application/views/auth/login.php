<section id="title">
  <div class="container">
    <div class="center">
      <h2><?php echo lang('login_heading');?></h2>
      <h4><?php echo lang('login_subheading');?></h4>
    </div>
    <div class="row contact-wrap">
      <div id="infoMessage">
        <?php echo $message;?>
      </div>
      <div class="col-sm-3">
        <?php echo form_open("auth/login");?>
        <div>
          <h3><?php echo lang('login_identity_label', 'identity');?></h3>
          <p><?php echo form_input($identity);?></p>
        </div>
      </div>
      <div class="col-sm-3">
        <div>
          <h3><?php echo lang('login_password_label', 'password');?></h3>
          <p><?php echo form_input($password);?></p>
        </div>
      </div>
      <div class="col-sm-3">
        <div>
          <h3><?php echo lang('login_remember_label', 'remember');?></h3>
          <p class="lead"><?php echo form_checkbox('remember', '1', FALSE, 'id="remember"');?> Clic si desea mantener la sesi&oacute;n iniciada</p>
        </div>
      </div>
        <div class="col-sm-1">
          <h3><br></h3>
          <p><?php echo form_submit('submit', lang('login_submit_btn'));?></p>
        </div>
        <?php echo form_close();?>
      </div>
      <div class"row">
        <div class="col-sm-10 col-sm-offset-1">
          <p class="lead pull-right"><a href="forgot_password"><?php echo lang('login_forgot_password');?></a></p>
        </div>
    </div>
  </div>
</section>