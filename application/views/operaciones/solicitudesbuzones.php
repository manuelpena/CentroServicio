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
										<th>Buzon</th>
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
		
			}
			});
		}
		
		function guardar_solicitudes(){
		
		var datos = new Array();
        var rows = $("#datatable-editable").dataTable().fnGetNodes();
		
		
        for(var i=0;i<rows.length;i++)
        {            // Get HTML of 3rd column (for example)
		var pedido_id  = $(rows[i]).find("td:eq(3)").html();
		var solicitante = $(rows[i]).find("td:eq(4)").html();
		var autorizacion = $(rows[i]).find("td:eq(7)").html();
		var observacion = $(rows[i]).find("td:eq(8)").html();
		var buzon = $(rows[i]).find("td:eq(9)").html();
		var tipo_solicitud = 1

		
		$.ajax({
			url:'<?php echo base_url(); ?>'+'solicitudesbuzones/guardar_solicitud_buzones/',
			type: 'POST',
			data:"pedido_id="+pedido_id+"&solicitante="+solicitante+"&autorizacion="+autorizacion+"&buzon="+buzon,
			success: function(respuesta){

				console.log(respuesta)
		
			}
		});		

	        }
		
		}
</script>				