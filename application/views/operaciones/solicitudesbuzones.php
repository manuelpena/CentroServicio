            <section role="main" class="content-body">
                <header class="page-header">
                    <h2>Solicitudes Buzones y Gerentes</h2>

                    <div class="right-wrapper pull-right">
                        <ol class="breadcrumbs">
                            <li>
                                <a href="index.html">
                                    <i class="fa fa-home"></i>
                                </a>
                            </li>
                            <li><span>Operaciones</span>
                            </li>
                            <li><span>Solicitudes Buzones y Gerentes</span>
                            </li>
                        </ol>

                        <a class="sidebar-right-toggle" data-open="sidebar-right"><i class="fa fa-chevron-left"></i></a>
                    </div>
                </header>


                <div class="col-md-12">
                    <section class="panel">
                        <header class="panel-heading">

                            <h2 class="panel-title">Solicitudes</h2>
                        </header>
                        <div class="panel-body">

						
						
<table class="table table-bordered table-striped mb-none" id="datatable-editable">
								<thead>
									<tr>
										<th>Codigo</th>
										<th>Nombre</th>
										<th>Zona</th>
										<th>Pedido</th>
										<th>Solicitante </th>
										<th>COD</th>
										<th>Autorizacion</th>
										<th>Observacion</th>
										<th>Envio</th>
										<th>Accion</th>
									</tr>
								</thead>
								<tbody>
								
								</tbody>
							</table>
							
							<div class="row">
								<div class="col-sm-6">
									<div class="mb-md">
										<button id="addToTable" class="btn btn-primary">Agregar Registro <i class="fa fa-plus"></i></button>
									</div>
								</div>
								<div class="col-sm-6">
									<div class="mb-md">
										<button id="addToTable" class="btn btn-success" onclick="guardar_solicitudes();">Guardar Todo<i class="fa fa-plus"></i></button>
									</div>
								</div>
							</div>
		
						</div>
					
                    </section>
                </div>
                <div class="col-md-12">
                    <section class="panel">
                        <header class="panel-heading">

                            <h2 class="panel-title">Solicitudes Buzones y Gerentes</h2>
                        </header>
                        <div class="panel-body">
 <?php echo $tabla_buzones ?>
 
 </div>
					
                    </section>
                </div>

            </section>
        </div>
<script>
		function busqueda_consejera(consejera){

		var codigo = consejera.value
			$.ajax({
			url:'<?php echo base_url(); ?>'+'solicitudesconsejeras/datos_consejera/'+codigo,
			dataType:'json',
			type: 'POST',
			data:codigo,
			success: function(respuesta){

		for (var i = 0; i < respuesta.length; i++) {
		
		$('#consejera_nombre').val(respuesta[i].nombres)
		$('#consejera_zona').val(respuesta[i].zona)
		$('#consejera_cod').val(respuesta[i].cod)
		$('#pedido_id').val(respuesta[i].pedido_id)
		
		}
		
		$('#nombres').focus();
		
			},
			error: function(){
				new PNotify({
					title: 'Atención',
					text: 'Codigo de consejera no existe, \o tiene ya solicitud!',
					type: 'error',
				});
			}
			});
		}
		
		function guardar_solicitudes(){
		
		var datos = new Array();
        var rows = $("#datatable-editable").dataTable().fnGetNodes();
		
		
        for(var i=0;i<rows.length;i++){
		var pedido_id  = $(rows[i]).find("td:eq(3)").html();
		var solicitante = $(rows[i]).find("td:eq(4)").html();
		var autorizacion = $(rows[i]).find("td:eq(7)").html();
		var observacion = $(rows[i]).find("td:eq(8)").html();
		var buzon = $(rows[i]).find("td:eq(8)").html();
		
		//validacion de tipo de solicitud
		if(buzon=='Gerente'){
		var tipo_solicitud = 2;
		var buzon = 0;
		}else{
		var tipo_solicitud = 3;
		}
		
		console.log("pedido_id="+pedido_id+"&solicitante="+solicitante+"&autorizacion="+autorizacion+"&buzon="+buzon+"&tipo_solicitud="+tipo_solicitud)
		$.ajax({
			url:'<?php echo base_url(); ?>'+'solicitudesbuzones/guardar_solicitud_buzones/',
			type: 'POST',
			data:"pedido_id="+pedido_id+"&solicitante="+solicitante+"&autorizacion="+autorizacion+"&buzon="+buzon+"&tipo_solicitud="+tipo_solicitud,
			success: function(respuesta){

				console.log(respuesta)
		
			}
		});	
		location.reload();
}
	        }

		function listado_buzones(){
		var	select_buzones="";		

		
			$.ajax({
			url:'<?php echo base_url(); ?>'+'solicitudesbuzones/listado_buzones/',
			type: 'POST',
			dataType:'json',
			    async:false,
			success: function(respuesta){

		
			select_buzones +='<select id="buzones">';
				select_buzones +='<option>Gerente</option>';
		for (var i = 0; i < respuesta.length; i++) {
		
		select_buzones +='<option>'+respuesta[i].descripcion+'</option>';
		
		}
				select_buzones +='</select>';

			}
		});	
		return select_buzones;
		
		}
		
</script>				