		
		<script src="<?php echo base_url() ?>bower_components/jquery/jquery.min.js"></script>
	  	<script src="<?php echo base_url() ?>bower_components/moment/moment.js"></script>
        <script src="<?php echo base_url() ?>/bower_components/eonasdan-bootstrap-datetimepicker/bootstrap/bootstrap.min.js"></script>
	  	<script src="<?php echo base_url() ?>bower_components/eonasdan-bootstrap-datetimepicker/src/js/bootstrap-datetimepicker.js"></script>
	  	<link rel="stylesheet" type="text/css" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
	  	<link rel="stylesheet" href="<?php echo base_url() ?>bower_components/eonasdan-bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.min.css" />
	   <script src="<?php echo base_url() ?>bower_components/eonasdan-bootstrap-datetimepicker/src/js/locales/bootstrap-datetimepicker.es.js"></script>


<div class="main">
	<div>
		<section class="header">
			<h1>Eventos</h1>
			<h2>Bienvenido al formulario para registrar un evento</h2>
		</section>
	</div>
	<div class="container">
	    <div class="row"><br>
	    <?php echo form_open(base_url('evento/guardar')) ?>
	        <div class="col-sm-8 col-sm-offset-2" style="height:75px;">
	           <div class='col-md-6'>
	                <div class="form-group">
	                    <div class='input-group date' id='from'>
	                        <input type='text' name="from" class="form-control" readonly required/>
	                        <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span>
	                    </div>
	                </div>
	            </div>
	            <div class='col-md-6'>
	                <div class="form-group">
	                    <div class='input-group date' id='to'>
	                        <input type='text' name="to" class="form-control" readonly required/>
	                        <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span>
	                    </div>
	                </div>
	            </div>
	            <div class="form-group">
	                <label for="url" class="col-sm-12 control-label">Nombre del evento</label>
	                <div class="col-sm-12">
	                  <input type="text" name="title" class="form-control" id="title" placeholder="" required>
	                </div>
	            </div>
	            <div class="form-group">
	                <label for="body" class="col-sm-12 control-label">Ubicaci&oacute;n del evento</label>
	                <div class="col-sm-12">
	                  <textarea id="body" name="event" class="form-control" rows="3" required></textarea>
	                </div>
	            </div>
	            <br>
	            <div class="form-group">
	                <label class="col-sm-12 control-label">Tipo de evento</label>
	                <div class="col-sm-12">
	                    <select class="form-control" name="class" id="class" required>
	                        <option value="event-info">Reuni&oacute;n</option>
	                        <option value="event-success">Concierto</option>
	                        <option value="event-inverse">Reuni&oacute;n de j&oacute;venes</option>
	                        <option value="event-important">Aniversario</option>
	                        <option value="event-warning">Invitado</option>
	                        <option value="event-special">Otros</option>
	                    </select>
	                </div>
	            </div>
	            
	             <input style="margin-top: 10px" type="submit" class="pull-right btn btn-success" value="Guardar evento">
	            </div>
	        </div>
	    <?php echo form_close() ?>
	    </div>
	    <script type="text/javascript">
	        $(function () {
	            $('#from').datetimepicker({
	                language: 'es',
	                minDate: new Date()
	            });
	            $('#to').datetimepicker({
	                language: 'es',
	                minDate: new Date()
	            });
	            
	        });
	    </script>
	</div>
</div>