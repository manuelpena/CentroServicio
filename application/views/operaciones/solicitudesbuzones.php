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
										<th>Bodegaje</th>
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
 <?php echo $datatable_buzones ?>
 
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
		calculo_bodegaje(2,respuesta[i].pedido_id)
		listado_buzones(respuesta[i].zona)
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
		var cobro = $(rows[i]).find("td:eq(9)").html();
		var buzon = 0;
		}else{
		var tipo_solicitud = 3;
		var cobro = 0;
		}
		
		console.log("pedido_id="+pedido_id+"&solicitante="+solicitante+"&autorizacion="+autorizacion+"&buzon="+buzon+"&tipo_solicitud="+tipo_solicitud+"&cobro="+cobro)
		$.ajax({
			url:'<?php echo base_url(); ?>'+'solicitudesbuzones/guardar_solicitud_buzones/',
			type: 'POST',
			data:"pedido_id="+pedido_id+"&solicitante="+solicitante+"&autorizacion="+autorizacion+"&buzon="+buzon+"&tipo_solicitud="+tipo_solicitud+"&cobro="+cobro,
			success: function(respuesta){

				console.log(respuesta)
		
			}
		});	
		location.reload();
}
	        }

		function listado_buzones(zona){
		
	
		var info ="zona="+zona
		info
			$.ajax({
			url:'<?php echo base_url(); ?>'+'solicitudesbuzones/listado_buzones/',
			type: 'POST',
			dataType:'json',
			data:info,
			async:false,
			success: function(respuesta){

		var select = $("#buzones");
		for (var i = 0; i < respuesta.length; i++) {
		
		select.append($("<option />").val(respuesta[i].descripcion).text(respuesta[i].descripcion));
		}

			}
		});	
		
		}
		
		
		function calculo_bodegaje(tipo_solicitud,pedido_id){
		
       	var info = "tipo_solicitud="+tipo_solicitud+"&pedido_id="+pedido_id

	
		$.ajax({
			url:'<?php echo base_url(); ?>'+'solicitudesconsejeras/calculo_bodegaje/',
			type: 'POST',
			dataType: 'json',
			data:info,
			success: function(respuesta){

		for (var i = 0; i < respuesta.length; i++) {
		$('#bodegaje').val(respuesta[i].Cobro)
		}
			}
			});
	
		}
		
</script>				