			<section role="main" class="content-body">
					<header class="page-header">
						<h2>Configuracion de Dias Laborales</h2>
					
						<div class="right-wrapper pull-right">
							<ol class="breadcrumbs">
								<li>
									<a href="index.html">
										<i class="fa fa-home"></i>
									</a>
								</li>
								<li><span>Mantenimientos</span></li>
								<li><span>Dias Laborales</span></li>
							</ol>
					
							<a class="sidebar-right-toggle" data-open="sidebar-right"><i class="fa fa-chevron-left"></i></a>
						</div>
					</header>

					<!-- start: page -->

                <div class="col-md-12">
                    <section class="panel">
                        <div class="panel-body">
							<div class="row">
								<div class="col-md-9">
									<div id="calendar"></div>
								</div>
								<div class="col-md-3">
									<p class="h4 text-light">Dia Laboral</p>

									<hr />

									<div id='external-events'>
										<div class="external-event label label-primary" data-event-class="fc-event-primary">Dia Laboral</div>
										<hr />
									<!--	<div>
											<div class="checkbox-custom checkbox-default ib">
												<input id="RemoveAfterDrop" type="checkbox"/>
												<label for="RemoveAfterDrop">remove after drop</label>
											</div>
										</div>-->
									</div>
								</div>
							</div>
						</div>
					
                    </section>
                </div>
				
</section>
		

<script>
			function mostrar_dias(){
		
				   $.ajax({
				type : "POST",
				url:'<?php echo base_url(); ?>'+'diaslaborales/dias_laborales/',
				dataType : "json",
				success : function (response) {
				for(var i = 0; i < response.length; i++){ 
				var json = '{"title": "Dia Laboral","start":"'+response[i].fecha+'"}'

				obj = JSON.parse(json);

				$('#calendar').fullCalendar('renderEvent', obj, true);

				}

				}

				});
			}
			
	function remover_dia(fecha){
	


	   $.ajax({
            type: "POST",
			url:'<?php echo base_url(); ?>'+'diaslaborales/remover_fecha/',
            data: "fecha="+fecha,
            success: function (html) {

            }
        });
	}
	
		function guardar_dia(fecha){

	   $.ajax({
            type: "POST",
			url:'<?php echo base_url(); ?>'+'diaslaborales/guardar_fecha/',
            data: "fecha="+fecha,
            success: function (html) {
   
            }
        });
			}	
						
</script>
				
				