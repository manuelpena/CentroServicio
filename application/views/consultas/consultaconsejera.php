            <section role="main" class="content-body">
                <header class="page-header">
                    <h2>Consultas Consejeras</h2>

                    <div class="right-wrapper pull-right">
                        <ol class="breadcrumbs">
                            <li>
                                <a href="index.html">
                                    <i class="fa fa-home"></i>
                                </a>
                            </li>
                            <li><span>Operaciones</span>
                            </li>
                            <li><span>Consultas Consejeras</span>
                            </li>
                        </ol>

                        <a class="sidebar-right-toggle" data-open="sidebar-right"><i class="fa fa-chevron-left"></i></a>
                    </div>
                </header>


             <div class="col-md-12">
                    <section class="panel">
                        <header class="panel-heading">

                            <h2 class="panel-title">Datos de Consejera</h2>
                        </header>
                        <div class="panel-body">
<form id="form_solicitudes">
                            <div class="row form-group">
                                <label class="col-md-1 control-label">Codigo</label>
                                <div class="col-sm-3">
                                    <input type="text" class="form-control" id="codigo" name="codigo">

                                </div>     

                            </div>
                            <div class="row form-group">
                                <label class="col-md-1 control-label">Nombres</label>
                                <div class="col-sm-3">
                                    <input type="text" class="form-control" id="nombres" name="nombres" disabled>

                                </div>

                                <label class="col-md-1 control-label">Zona</label>
                                <div class="col-sm-1">
                                    <input type="text" class="form-control" id="zona" name="zona" disabled>

                                </div>
                                <label class="col-md-1 control-label">Sector</label>
                                <div class="col-sm-1">
                                 <input type="text" class="form-control" id="sector" name="sector" disabled>

                                </div>                                <label class="col-md-1 control-label">Campaña</label>
                                <div class="col-sm-1">
                                 <input type="text" class="form-control" id="campania" name="campania" disabled>

                                </div>
                            </div>                    
							<div class="row form-group">
                                <label class="col-md-1 control-label">Direccion</label>
                                <div class="col-sm-4">
                   <textarea class="form-control" rows="2" id="direccion" name="direccion" disabled></textarea>


                                </div>

                            </div>
		                     <div class="row form-group">		
<label class="col-md-4 control-label"><h4>Datos del Pedido <b>C01/2015</b></h4></label>        
                        <div class="col-sm-1">


                                </div>
 </div>
                           <div class="row form-group">
                                <label class="col-md-1 control-label">Cajas</label>
                                <div class="col-sm-1">
                                    <input type="text" class="form-control" id="cajas" name="cajas" disabled>

                                </div>

                                <label class="col-md-1 control-label">Observaciones</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="comentarios" name="comentarios" disabled>

                                </div>

                            </div>
							<div class="row form-group">
                                <label class="col-md-1 control-label">COD</label>
                                <div class="col-sm-1">
                                    <input type="text" class="form-control" id="cod" name="cod" disabled>

                                </div>

                                <label class="col-md-1 control-label">POD</label>
                                <div class="col-sm-2">
                                    <input type="text" class="form-control" id="pod" name="pod" disabled>

                                </div>
                                <label class="col-md-1 control-label">Autorizacion</label>
                                <div class="col-sm-1">
                                    <input type="text" class="form-control" id="autorizacion" name="autorizacion" disabled>

                                </div>

                      		
                                <label class="col-md-1 control-label">A pagar</label>
                                <div class="col-sm-1">
                                    <input type="text" class="form-control" id="total_pagar" name="total_pagar" disabled>

                                </div> </div>								
 <div class="row form-group">		
                     <label class="col-md-1 control-label">Cobro</label>
                                <div class="col-sm-1">
                                    <input type="text" class="form-control" id="bodegaje" name="bodegaje" disabled>

                                </div> 
<a class="mb-xs mt-xs mr-xs modal-with-zoom-anim btn btn-default" href="#modalSM" id="BotonModal" hidden="hidden" style=" visibility: hidden;" ></a> 
                                <label class="col-md-1 control-label">Bodegaje Exonerado</label>
                                <div class="col-sm-1">
								<div class="checkbox-custom checkbox-primary">
  <input type="text" class="form-control" id="bodegaje" name="bodegaje" disabled value="Si">
														</div>



                                </div>                                   <label class="col-md-1 control-label">Solicitado por</label>
                                <div class="col-sm-2">
                                    <input type="text" class="form-control" id="total_pagar" name="total_pagar" disabled>

                                </div>                         <label class="col-md-1 control-label">Documento</label>
                                <div class="col-sm-2">
                                    <input type="text" class="form-control" id="total_pagar" name="total_pagar" disabled>

                                </div>   
      </div>
	  </form>
	  			
						<label class="col-md-2 control-label"><h4>Historial de Pedidos</h4></label>    
		<hr class="separator" />
						
  <div class="col-md-8">						
<div class="table-responsive">
										<table class="table mb-none" id="historial_consejera">
											<thead>
												<tr>
													<th>Año</th>
													<th>Campaña</th>
													<th>Fecha de Ingreso</th>
													<th>Despachado</th>
													<th>Desmantelado</th>
													<th>Ver</th>
												</tr>
											</thead>
											<tbody>
											</tbody>
										</table>
									</div></div>
	  
		   </div>
					
                    </section>
                </div>

            </section>
			
			<script>
function generar_historial(consejera){

		var codigo = consejera
		
		var info ="codigo="+codigo;
	console.log(info)
		$.ajax({
			url:'<?php echo base_url(); ?>'+'consultaconsejera/historial_consejera/',
			dataType:'json',
			type: 'POST',
		data:info,
			success: function(respuesta){
		var table = $("#historial_consejera tbody");
		table.empty();
		for (var i = 0; i < respuesta.length; i++) {
		table.append("<tr><td>"+respuesta[i].anio+"</td><td>"+respuesta[i].campania
		+"</td><td>"+respuesta[i].fecha_ingreso+"</td>"+"<td>"+respuesta[i].despachado+"</td><td>"+respuesta[i].desmantelado+"</td><td><a href='#' onclick='ver_pedido("
		+respuesta[i].id+")'><i class='fa fa-search'></i></a></td>"
		);

		}
		
			},
			error: function(){
				new PNotify({
					title: 'Atención',
					text: 'No existen consejeras con los parametros ingresados',
					type: 'error',
				});
			}
			});

}				
	function ver_pedido (id){
	
	var info="pedido_id="+id
	
	$.ajax({
			url:'<?php echo base_url(); ?>'+'consultaconsejera/consulta_pedido/',
			dataType:'json',
			type: 'POST',
		data:info,
			success: function(respuesta){

		
			},
			error: function(){
				new PNotify({
					title: 'Atención',
					text: 'No existen consejeras con los parametros ingresados',
					type: 'error',
				});
			}
			});
	
	}		
			</script>
			