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
			<h2>Bienvenido al formulario para editar evento</h2>
		</section>
	</div>
	<div class="container">
	    <div class="row"><br>

	    <?php echo form_open(base_url('evento/editar')) ?>
	    <input name="id" class="pure-input-1-2" type="text" style="visibility:hidden" value="<?php echo $item->id ?>">
	        <div class="col-sm-8 col-sm-offset-2" style="height:75px;">
	           <div class='col-md-6'>
	                <div class="form-group">
	                    <div class='input-group date' id='from'>
	                        <input type='text' name="from" class="form-control" readonly />
	                        <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span>
	                    </div>
	                </div>
	            </div>
	            <div class='col-md-6'>
	                <div class="form-group">
	                    <div class='input-group date' id='to'>
	                        <input type='text' name="to" class="form-control" readonly />
	                        <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span>
	                    </div>
	                </div>
	            </div>
	            <div class="form-group">
		            <label for="url" class="col-sm-12 control-label">Enlace al evento</label>
	                <div class="col-sm-12">
	                  <input type="url" name="url" class="form-control" id="url" value="<?php echo $item->url ?>">
	                </div>
	            </div>
	            <div class="form-group">
	                <label for="url" class="col-sm-12 control-label" >Nombre del evento</label>
	                <div class="col-sm-12">
	                  <input type="text" name="tittle" class="form-control" id="tittle" value="<?php echo $item->title ?>">
	                </div>
	            </div>
	            <div class="form-group">
	                <label for="body" class="col-sm-12 control-label" >Descripci&oacute;n del evento</label>
	                <div class="col-sm-12">
	                  <textarea id="body" name="event" class="form-control" rows="3"><?php echo $item->body ?></textarea>
	                </div>
	            </div>
	            <div class="form-group">
	                <label class="col-sm-12 control-label">Tipo de evento</label>
	                <div class="col-sm-12">
	                    <select class="form-control" name="class">
	                    	<option value="<?php echo $item->class ?>"><?php echo $item->class ?></option>
	                        <option value="Culto">Culto</option>
	                        <option value="Concierto">Concierto</option>
	                        <option value="Reunión de jóvenes">Reuni&oacute;n de j&oacute;venes</option>
	                        <option value="Aniversario">Aniversario</option>
	                        <option value="Invitado">Invitado</option>
	                        <option value="Otros">Otros</option>
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