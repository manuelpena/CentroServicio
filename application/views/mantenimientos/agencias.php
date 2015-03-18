			<section role="main" class="content-body">
                <header class="page-header">
                    <h2>Mantenimiento Agencias</h2>

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
                            <li><span>Mantenimiento de Agencias</span>
                            </li>
                        </ol>

                        <a class="sidebar-right-toggle" data-open="sidebar-right"><i class="fa fa-chevron-left"></i></a>
                    </div>
                </header>

					<!-- start: page -->

                          <div class="col-md-6">
                    <section class="panel">
                        <header class="panel-heading">

                            <h2 class="panel-title">Datos de Agencia</h2>
                        </header>
                        <div class="panel-body">

                            <div class="row form-group">
                                <label class="col-md-2 control-label">Nombre de Agencia</label>
                                <div class="col-sm-4">
                                    <input type="text" class="form-control" id="agencia">                                
									</div> 
								<div class="col-sm-3">
									<div class="btn-group">

												<button type="button" class="mb-xs mt-xs mr-xs btn btn-primary dropdown-toggle" data-toggle="dropdown">Accion <span class="caret"></span></button>
												<ul class="dropdown-menu" role="menu">
													<li><a onclick="guardar_agencia(1)">Nuevo</a></li>
													<li class="divider"></li>
													<li><a onclick="guardar_agencia(2)">Actualizar</a></li>
												</ul>
											</div>
									
                                </div> 			
								<div class="col-sm-2">
                                    <input type="text" class="form-control" id="agencia_id" style="display: none;">                                
                                </div> 

								</div></div>
					</section>
					
					<section class="panel">
						<header class="panel-heading">
							<div class="panel-actions">
								<a href="#" class="fa fa-caret-down"></a>
								
							</div>

							<h2 class="panel-title">Listado de Bancos</h2>
						</header>
						<div class="panel-body">
						<div class="table-responsive">
							<table class="table mb-none"  id="tabla_agencias">
								<thead>
									<tr>
										<th>ID</th>
										<th>Agencia</th>
										<th>Accion</th>
									</tr>
								</thead>
								<tbody>

								</tbody>
								
							</table>
        </div> 
		</div>
</section>

				
				