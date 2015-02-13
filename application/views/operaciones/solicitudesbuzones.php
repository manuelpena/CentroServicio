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
										<button id="addToTable" class="btn btn-success">Guardar Todo<i class="fa fa-plus"></i></button>
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

									<div class="table-responsive">
										<table class="table mb-none">
											<thead>
												<tr>
													<th>Caja</th>
													<th>Zona</th>
													<th>Codigo</th>
													<th>Nombre Consejera</th>
													<th>Estado</th>
													<th>Accion</th>
													
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>12</td>
													<td>224</td>
													<td>2321</td>
													<td>Juana Ernestina Gonzalez</td>
													<td>Pendiente</td>
													<td><a href="" class="delete-row"><i class="fa fa-trash-o"></i></a>

</td>
												</tr>	
												<tr>
													<td>12</td>
													<td>224</td>
													<td>2321</td>
													<td>Juana Ernestina Gonzalez</td>
													<td>Pendiente</td>
													<td><a href="" class="delete-row"><i class="fa fa-trash-o"></i></a>
</td>
												</tr>

											</tbody>
										</table>
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
		
		}
		$('#nombres').focus();
		
			}
			});
		}
</script>				