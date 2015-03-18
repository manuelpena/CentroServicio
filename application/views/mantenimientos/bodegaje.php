			<section role="main" class="content-body">
                <header class="page-header">
                    <h2>Mantenimiento Bodegaje</h2>

                    <div class="right-wrapper pull-right">
                        <ol class="breadcrumbs">
                            <li>
                                <a href="index.html">
                                    <i class="fa fa-home"></i>
                                </a>
                            </li>
                            <li><span>Mantenimientos
							</span>
                            </li>
                            <li><span>Mantenimiento de Bodegaje</span>
                            </li>
                        </ol>

                        <a class="sidebar-right-toggle" data-open="sidebar-right"><i class="fa fa-chevron-left"></i></a>
                    </div>
                </header>

					<!-- start: page -->

                          <div class="col-md-9">
                    <section class="panel">
                        <header class="panel-heading">

                            <h2 class="panel-title">Datos de Bodegaje</h2>
                        </header>
                        <div class="panel-body">

                            <div class="row form-group">
                                <label class="col-md-2 control-label">Tipo de Solicitud</label>
                                <div class="col-sm-2">
                                    <select class="form-control"  id="tipo_solicitud" name="tipo_solicitud">
									<option value="1">Consejeras</option>
									<option value="2">Gerente</option>
									</select>	
									
                                </div> 	   
	
								<label class="col-md-1 control-label">Tipo Pedido</label>
								<div class="col-sm-2">
                                    <select class="form-control"  id="tipo_pedido" name="tipo_pedido">
									<option value="1">Normal</option>
									<option value="2">Tardío</option>
									</select>	
									
                                </div> 			
								<div class="col-sm-2">
<input type="text" class="form-control" id="bodegaje_id" style="display: none;">                                                     
					 <button type="button" class="mb-xs mt-xs mr-xs btn btn-primary" id="busqueda" onclick="mostrar_bodegaje();"><i class="fa fa-search"></i> </button>                           
                                </div> 

								</div>
								<div class="row form-group">
						   <label class="col-md-1 control-label">Dia</label>
								<div class="col-sm-2">
                                    <select class="form-control"  id="dia" name="dia">
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
									</select>	
									
                                </div> 
		   <label class="col-md-1 control-label">Cobro</label>
			<div class="col-sm-2">
                                    <input type="text" class="form-control" id="cobro">                                
			</div> 
								<div class="col-sm-3">
									<div class="btn-group">

												<button type="button" class="mb-xs mt-xs mr-xs btn btn-primary dropdown-toggle" data-toggle="dropdown">Accion <span class="caret"></span></button>
												<ul class="dropdown-menu" role="menu">
													<li><a onclick="guardar_bodegaje(1)">Nuevo</a></li>
													<li class="divider"></li>
													<li><a onclick="guardar_bodegaje(2)">Actualizar</a></li>
												</ul>
											</div>
									
                                </div> 			
								<div class="col-sm-2">
                                    <input type="text" class="form-control" id="agencia_id" style="display: none;">                                
                                </div> 

								</div>
								
								</div>
					</section>
					
					<section class="panel">
						<header class="panel-heading">
							<div class="panel-actions">
								<a href="#" class="fa fa-caret-down"></a>
								
							</div>

							<h2 class="panel-title">Listado de Bodegaje</h2>
						</header>
						<div class="panel-body">
						<div class="table-responsive">
							<table class="table mb-none"  id="tabla_bodegaje">
								<thead>
									<tr>
										<th>ID</th>
										<th>Tipo Pedido</th>
										<th>Tipo Solicitud</th>
										<th>Dia</th>
										<th>Cobro</th>
										<th>Accion</th>
									</tr>
								</thead>
								<tbody>

								</tbody>
								
							</table>
        </div> 
		</div>
</section>

				
				