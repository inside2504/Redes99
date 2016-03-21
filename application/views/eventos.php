
	
	
	<script src="<?php echo base_url() ?>bower_components/jquery/jquery.min.js"></script>
	<link rel="stylesheet" href="<?php echo base_url() ?>bower_components/bootstrap-calendar/css/calendar.css">
	<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url() ?>bower_components/bootstrap-calendar/js/language/es-ES.js"></script>
<section>
	<div class="container">
		<div class="row">
			<div class="header">
				<div class="pull-right form-inline">
					<div class="btn-group">
						<button class="btn btn-info" data-calendar-nav="prev"><< Anterior</button>
						<button class="btn btn-success" data-calendar-nav="today">Hoy</button>
						<button class="btn btn-info" data-calendar-nav="next">Siguiente >></button>
					</div>
					<div class="btn-group">
						<button class="btn btn-danger" data-calendar-view="year">Año</button>
						<button class="btn btn-danger active" data-calendar-view="month">Mes</button>
						<button class="btn btn-danger" data-calendar-view="week">Semana</button>
						<button class="btn btn-danger" data-calendar-view="day">Día</button>
					</div>
				</div>
				<h2></h2>
			</div>		
		</div>
		<hr>
		<h2>*Para ver los eventos, haga clic en el d&iacute;a deseado del calendario. </h2>
		<h2>**Si desea ver la hora de los eventos de un d&iacute;a en espec&iacute;fico, de doble clic sobre el d&iacute;a deseado. </h2>
		<hr>
		<div class="row">
			<div id="calendar"></div>
		</div>

		<!--ventana modal para el calendario-->
		<div class="modal fade" id="events-modal">
		    <div class="modal-dialog">
			    <div class="modal-content">
			        <div class="modal-header">
				        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				        <h4 class="modal-title"></h4>
			        </div>
				    <div class="modal-body" style="height: 400px">
				        <p>One fine body&hellip;</p>
				    </div>
			        <div class="modal-footer">
				        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			        </div>
			    </div><!-- /.modal-content -->
		    </div><!-- /.modal-dialog -->
		</div><!-- /.modal -->
	</div>
    
    <script src="<?php echo base_url() ?>bower_components/underscore/underscore-min.js"></script>
    <script src="<?php echo base_url() ?>bower_components/bootstrap-calendar/js/calendar.js"></script>
    <script type="text/javascript">
	(function($){
		//creamos la fecha actual
		var date = new Date();
		var yyyy = date.getFullYear().toString();
		var mm = (date.getMonth()+1).toString().length == 1 ? "0"+(date.getMonth()+1).toString() : (date.getMonth()+1).toString();
		var dd  = (date.getDate()).toString().length == 1 ? "0"+(date.getDate()).toString() : (date.getDate()).toString();

		//establecemos los valores del calendario
		var options = {
			events_source: '<?php echo base_url() ?>eventosview/getAll',
			view: 'month',
			language: 'es-ES',
			tmpl_path: '<?php echo base_url() ?>bower_components/bootstrap-calendar/tmpls/',
			tmpl_cache: false,
			day: yyyy+"-"+mm+"-"+dd,
			time_start: '6:00',
			time_end: '23:00',
			time_split: '30',
			width: '100%',

			onAfterEventsLoad: function(events) 
			{
				if(!events) 
				{
					return;
				}
				var list = $('#eventlist');
				list.html('');

				$.each(events, function(key, val) 
				{
					$(document.createElement('li'))
						.html('<a href="' + val.url + '">' + val.title + '</a>')
						.appendTo(list);
				});
			},
			onAfterViewLoad: function(view) 
			{
				$('.header h2').text(this.getTitle());
				$('.btn-group button').removeClass('active');
				$('button[data-calendar-view="' + view + '"]').addClass('active');
			},
			classes: {
				months: {
					general: 'label'
				}
			}
		};

		var calendar = $('#calendar').calendar(options);

		$('.btn-group button[data-calendar-nav]').each(function() 
		{
			var $this = $(this);
			$this.click(function() 
			{
				calendar.navigate($this.data('calendar-nav'));
			});
		});

		$('.btn-group button[data-calendar-view]').each(function() 
		{
			var $this = $(this);
			$this.click(function() 
			{
				calendar.view($this.data('calendar-view'));
			});
		});

		$('#first_day').change(function()
		{
			var value = $(this).val();
			value = value.length ? parseInt(value) : null;
			calendar.setOptions({first_day: value});
			calendar.view();
		});

		$('#events-in-modal').change(function()
		{
			var val = $(this).is(':checked') ? $(this).val() : null;
			calendar.setOptions(
				{
					modal: val,
					modal_type:'iframe'
				}
			);
		});
	}(jQuery));
    </script>
</section>
