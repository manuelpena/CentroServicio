			<section role="main" class="content-body">
					<header class="page-header">
						<h2>Generacion de Desmantelado</h2>
					
						<div class="right-wrapper pull-right">
							<ol class="breadcrumbs">
								<li>
									<a href="index.html">
										<i class="fa fa-home"></i>
									</a>
								</li>
								<li><span>Mantenimientos</span></li>
								<li><span>Generacion de Desmantelado</span></li>
							</ol>
					
							<a class="sidebar-right-toggle" data-open="sidebar-right"><i class="fa fa-chevron-left"></i></a>
						</div>
					</header>

					<!-- start: page -->

                <div class="col-md-12">
                    <section class="panel">
                        <header class="panel-heading">

                            <h2 class="panel-title">Generacion de Desmantelado</h2>
                        </header>
                        <div class="panel-body">
						  <form method="post" action="<?php echo base_url() ?>csv/importcsv" enctype="multipart/form-data">
                            <div class="row form-group">
                                <label class="col-md-1 control-label">Año</label>
                                <div class="col-sm-2">
                                    <input type="text" class="form-control" id="anio" name="anio">

                                </div>      
                           <label class="col-md-1 control-label">Campaña</label>
                                <div class="col-sm-1">
                                    <select class="form-control mb-md"  id="campania" name="campania">
									<option value="1">1</option>
									<option value="2">2</option>
									<option value="3">3</option>
									<option value="4">4</option>
									<option value="5">5</option>
									<option value="6">6</option>
									<option value="7">7</option>
									<option value="8">8</option>
									<option value="9">9</option>
									<option value="10">10</option>
									<option value="11">11</option>
									<option value="12">12</option>
									<option value="13">13</option>
									<option value="14">14</option>
									<option value="15">15</option>
									<option value="16">16</option>
									<option value="17">17</option>
									<option value="18">18</option>
									<option value="19">19</option>
									</select>								
                                </div>
								<label>
	                           <div class="col-sm-2">
                    <input  value="Buscar" class="btn btn-primary" onclick="buscar_zonas()">
               
								</div> 								
                            </div>
         				
 </form>
 	
						<label class="col-md-3 control-label"><h4>Generacion de Desmantelado</h4></label>   <hr class="separator" /><br>
						<div class="col-md-5">

								<div class="table-responsive">
										<table class="table mb-none" id="zonas_cargadas_tbl">
											<thead>
												<tr>
													<th>Año</th>
													<th>Campaña</th>
													<th>Zona</th>
													<th>Pedidos Activos</th>
													<th>Desmantelar</th>
													<th>Revertir</th>
												</tr>
											</thead>
											<tbody>

											</tbody>
										</table>
									</div>	</div>	
						</div>
					
                    </section>
                </div>	
</section>
		
		<script>
		function generar_desmantelado(dato_anio, dato_campania, dato_zona){
	
		var anio = dato_anio;
		var campania = dato_campania;
		var zona =dato_zona;
		
		var info = "anio="+anio+"&campania="+campania+"&zona="+zona
		console.log(info)

			$.ajax({
			url:'<?php echo base_url(); ?>'+'desmantelado/generar_desmantelado/',
			type: 'POST',
			data:info,
			success: function(respuesta){
			console.log(respuesta)
				new PNotify({
					title: 'Mensaje',
					text: 'Desmantelado generado con Exito\ se modificaron '+respuesta+' registros',
					type: 'success',
				});
				 buscar_zonas();
			},
			
			error: function(){
				new PNotify({
					title: 'Atención',
					text: 'Pedidos ya fueron desmantelado',
					type: 'error',
				});
			}
			});
			
		}	

function buscar_zonas(dato_anio, dato_campania, dato_zona){

		var anio = $('#anio').val();
		var campania = $('#campania').val();
		var zona =$('#zona').val();
		var info = "anio="+anio+"&campania="+campania
		

		$.ajax({
			url:'<?php echo base_url(); ?>'+'desmantelado/zonas_cargadas/',
			dataType:'json',
			type: 'POST',
		data:info,
			success: function(respuesta){
		var table = $("#zonas_cargadas_tbl tbody");
		table.empty();
		for (var i = 0; i < respuesta.length; i++) {
		table.append("<tr><td>"+respuesta[i].anio+"</td><td>"+respuesta[i].campania
		+"</td><td>"+respuesta[i].zona+"</td><td>"+respuesta[i].activos
		+"</td><td><a href='#' onclick='generar_desmantelado("+respuesta[i].anio+","+respuesta[i].campania+","+respuesta[i].zona+")'><i class='fa fa-dropbox'></i>desmantelar</a></td>"
		+"<td><a href='#' onclick='revertir_desmantelado("+respuesta[i].anio+","+respuesta[i].campania+","+respuesta[i].zona+")'><i class='fa fa-dropbox'></i>revertir</a></td></tr>"
		);

		}
		
			},
			error: function(){
				new PNotify({
					title: 'Atención',
					text: 'No hay zonas cargadas con los parametros ingresados',
					type: 'error',
				});
			}
			});

}	

function revertir_desmantelado(dato_anio, dato_campania, dato_zona){

		var anio = dato_anio;
		var campania = dato_campania;
		var zona =dato_zona;
		
		var info = "anio="+anio+"&campania="+campania+"&zona="+zona
		console.log(info)
		$.ajax({
			url:'<?php echo base_url(); ?>'+'desmantelado/revertir_desmantelado/',
			dataType:'json',
			type: 'POST',
			data:info,
			success: function(respuesta){
			console.log(respuesta)
				new PNotify({
					title: 'Mensaje',
					text: 'Desmantelado revertido con Exito\ se modificaron '+respuesta+' registros',
					type: 'success',
				});
				 buscar_zonas();			
		
			},
			error: function(){
				new PNotify({
					title: 'Atención',
					text: 'No hay zonas cargadas con los parametros ingresados',
					type: 'error',
				});
			}
			});

}		
		</script>


				
				