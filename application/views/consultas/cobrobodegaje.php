<section role="main" class="content-body">
                <header class="page-header">
                    <h2>Cobro de Bodegaje</h2>

                    <div class="right-wrapper pull-right">
                        <ol class="breadcrumbs">
                            <li>
                                <a href="index.html">
                                    <i class="fa fa-home"></i>
                                </a>
                            </li>
                            <li><span>Consultas
							</span>
                            </li>
                            <li><span>Consulta de Bodegaje</span>
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
                                <label class="col-md-1 control-label">Desde</label>
                                <div class="col-sm-2">
                                    <input type="text" data-plugin-datepicker class="form-control" id="desde">                                
									</div> 
						   <label class="col-md-1 control-label">Hasta</label>
                                <div class="col-sm-2">
                                    <input type="text" data-plugin-datepicker class="form-control" id="hasta">                                
									</div> 
	 <button type="button" class="mb-xs mt-xs mr-xs btn btn-primary" id="busqueda" onclick="buscar_bodegaje();"><i class="fa fa-search"></i> </button>   
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
								<th>ID</th>	                                
								<th>Usuario</th>
                                <th>Exonerados</th>								
                                <th>Consejeras</th> 							
								<th>Gerentes</th>	                             
								<th>Total</th>
								<th>Detalle</th>
                            </tr>
                        </thead>
                        <tbody>

                        </tbody>

                    </table>
					
						</div> 
						
						<div class="col-md-7">		
<div id="container" style="min-width: 310px; height: 400px; margin: 0 auto"></div>
					
						</div>
										 <div class="col-md-5">		
                    <table class="table table-hover mb-none" id="tabla_detalle">
                        <thead>
                            <tr>
								<th>Fecha</th>
                                <th>Codigo</th>								
                                <th>Nombre</th> 							
								<th>Cobro</th>	                             

                            </tr>
                        </thead>
                        <tbody>

                        </tbody>

                    </table>
					
						</div> 
						
						</div>
					</section>

				
				