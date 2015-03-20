<section role="main" class="content-body">
                <header class="page-header">
                    <h2>Mantenimiento Adicionales</h2>

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
                            <li><span>Mantenimiento de Adicionales</span>
                            </li>
                        </ol>

                        <a class="sidebar-right-toggle" data-open="sidebar-right"><i class="fa fa-chevron-left"></i></a>
                    </div>
                </header>

					<!-- start: page -->

                          <div class="col-md-9">
                    <section class="panel">
                        <header class="panel-heading">

                            <h2 class="panel-title">Datos de Adicionales</h2>
                        </header>
                        <div class="panel-body">

                            <div class="row form-group">
                                <label class="col-md-2 control-label">Año</label>
                                <div class="col-sm-2">
                                    <input type="text" class="form-control" id="anio">                                
									</div> 
						   <label class="col-md-1 control-label">Campaña</label>
								<div class="col-sm-2">
                                    <select class="form-control"  id="campania" name="campania">
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
								<div class="col-sm-2">
<input type="text" class="form-control" id="adicional_id" style="display: none;">                                                     
					 <button type="button" class="mb-xs mt-xs mr-xs btn btn-primary" id="busqueda" onclick="mostrar_adicionales();"><i class="fa fa-search"></i> </button>                           
                                </div> 

								</div>
								<div class="row form-group">
                                <label class="col-md-2 control-label">Nombre del Adicional</label>
                                <div class="col-sm-4">
                                    <input type="text" class="form-control" id="adicional">                                
									</div> 
								<div class="col-sm-3">
									<div class="btn-group">

												<button type="button" class="mb-xs mt-xs mr-xs btn btn-primary dropdown-toggle" data-toggle="dropdown">Accion <span class="caret"></span></button>
												<ul class="dropdown-menu" role="menu">
													<li><a onclick="guardar_adicional(1)">Nuevo</a></li>
													<li class="divider"></li>
													<li><a onclick="guardar_adicional(2)">Actualizar</a></li>
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

							<h2 class="panel-title">Listado de Adicionales</h2>
						</header>
						<div class="panel-body">
						<div class="table-responsive">
							<table class="table mb-none"  id="tabla_adicionales">
								<thead>
									<tr>
										<th>ID</th>
										<th>Año</th>
										<th>Campaña</th>
										<th>Descripcion</th>
										<th>Accion</th>
									</tr>
								</thead>
								<tbody>

								</tbody>
								
							</table>
        </div> 
		</div>
</section>

				
				