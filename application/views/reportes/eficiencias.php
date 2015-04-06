<section role="main" class="content-body">
                <header class="page-header">
                    <h2>Reportes Eficiencias</h2>

                    <div class="right-wrapper pull-right">
                        <ol class="breadcrumbs">
                            <li>
                                <a href="index.html">
                                    <i class="fa fa-home"></i>
                                </a>
                            </li>
                            <li><span>Reportes
							</span>
                            </li>
                            <li><span>Reportes de Eficiencias</span>
                            </li>
                        </ol>

                        <a class="sidebar-right-toggle" data-open="sidebar-right"><i class="fa fa-chevron-left"></i></a>
                    </div>
                </header>

					<!-- start: page -->

                          <div class="col-md-12">
                    <section class="panel">
                        <header class="panel-heading">

                            <h2 class="panel-title">Filtros de Reporte</h2>
							<div class="panel-actions">
								<a href="#" class="fa fa-caret-down"></a>
								
							</div>							
                        </header>
                        <div class="panel-body">

                            <div class="row form-group">
                                <label class="col-md-1 control-label">Año</label>
                                <div class="col-sm-2">
                                    <input type="text" class="form-control" id="anio">                                
									</div> 
						   <label class="col-md-1 control-label">Campaña</label>
								<div class="col-sm-1">
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
									<option value="Acumulado">Acumulado</option>
									</select>	
									
                                </div> 			
                                <label class="col-md-1 control-label">Opcion</label>
                               
								<div class="col-sm-2">
                                    <select class="form-control"  id="opcion" name="opcion">
									<option value="">Seleccione Opcion</option>
									<option value="Pais">Pais</option>
									<option value="Zona">Zona</option>
									<option value="Division">Division</option>
									</select>	
									
                                </div> 	                            
								
						   <label class="col-md-1 control-label">Filtro</label>
								<div class="col-sm-2">
                                    <select class="form-control"  id="filtro" name="filtro">
									<option value="">Seleccione Filtro</option>
									</select>	
									
                                </div> 	 		

	 <button type="button" class="mb-xs mt-xs mr-xs btn btn-primary" id="busqueda" onclick="buscar_eficiencias();"><i class="fa fa-search"></i> </button>   
								</div>
								
								</div>
					</section>
					
					<section class="panel">
						<header class="panel-heading">
							<div class="panel-actions">
								<a href="#" class="fa fa-caret-down"></a>
								
							</div>
						</header>
						<div class="panel-body">
				 <div class="col-md-5">		
                    <table class="table table-hover mb-none" id="tabla_resultados">
                        <thead>
                            <tr>
								<th id="descripcion">Nombre</th>	                                
								<th>Campania</th>
                                <th>Facturados</th>								
                                <th>Devolucion</th>
                                <th>Entregados</th>
								<th>Eficiencia</th>
                            </tr>
                        </thead>
                        <tbody>

                        </tbody>

                    </table>
					
						</div> 
						
						<div class="col-md-5">		
<div id="container" style="min-width: 310px; height: 400px; margin: 0 auto"></div>
					
						</div>
						
						
						</div>
					</section>

				
				