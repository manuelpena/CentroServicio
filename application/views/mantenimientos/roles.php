			<section role="main" class="content-body">
                <header class="page-header">
                    <h2>Mantenimiento Roles</h2>

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
                            <li><span>Mantenimiento de Roles</span>
                            </li>
                        </ol>

                        <a class="sidebar-right-toggle" data-open="sidebar-right"><i class="fa fa-chevron-left"></i></a>
                    </div>
                </header>

					<!-- start: page -->

                          <div class="col-md-5">

					
					<section class="panel">
						<header class="panel-heading">
							<div class="panel-actions">
								<a href="#" class="fa fa-caret-down"></a>
								
							</div>

							<h2 class="panel-title">Creacion de Rol</h2>
						</header>
						<div class="panel-body">
						<div class="table-responsive">
							<table class="table mb-none"  id="tabla_roles">
							
       <div class="row form-group">
                                <label class="col-md-1 control-label">Rol</label>
                                <div class="col-sm-3">
           <input type="text" class="form-control" id="rol">                                				
									</div> 	
								<div class="col-sm-3">
									<div class="btn-group">

												<button type="button" class="mb-xs mt-xs mr-xs btn btn-primary dropdown-toggle" data-toggle="dropdown">Accion <span class="caret"></span></button>
												<ul class="dropdown-menu" role="menu">
													<li><a onclick="guardar_rol(1)">Nuevo</a></li>
													<li class="divider"></li>
													<li><a onclick="guardar_rol(2)">Actualizar</a></li>
												</ul>
											</div>
									
                                </div> 	
								
								</div>	
								
								
							</table>
        </div> 
		</div>
</section>					<section class="panel">
						<header class="panel-heading">
							<div class="panel-actions">
								<a href="#" class="fa fa-caret-down"></a>
								
							</div>

							<h2 class="panel-title">Listado de Roles</h2>
						</header>
						<div class="panel-body">
						<div class="table-responsive">
							<table class="table mb-none"  id="tabla_roles">
								<thead>
									<tr>
										<th>ID</th>
										<th>Rol</th>
										<th>Accion</th>
									</tr>
								</thead>
								<tbody>

								</tbody>
								
							</table>
        </div> 
		</div>
</section>

				</div>
				
                          <div class="col-md-7">

					
					<section class="panel">
						<header class="panel-heading">
							<div class="panel-actions">
								<a href="#" class="fa fa-caret-down"></a>
								
							</div>

							<h2 class="panel-title">Edicion de Roles</h2>
						</header>
						<div class="panel-body">
       <div class="row form-group">
                                <label class="col-md-1 control-label">Menu</label>
                                <div class="col-sm-3">
                                 <select class="form-control input-sm mb-md"  id="menu_id" name="menu_id">
								 <option value="0">Selecionar Menu</option>
									</select>	             								
									</div> 
						   <label class="col-md-1 control-label">Pagina</label>
								<div class="col-sm-4">
                                 <select class="form-control input-sm mb-md"  id="pagina_id" name="pagina_id">
								 <option value="0">Selecionar Pagina</option>
									</select>	
									
                                </div> 			
								<div class="col-sm-1">
<input type="text" class="form-control" id="rol_id" style="display: none;">                                                     
					 <button type="button" class="mb-xs mt-xs mr-xs btn btn-primary" id="busqueda" onclick="guardar_pagina();">Agregar</button>                           
                                </div> 

								</div>						
						
						<div class="table-responsive">
							<table class="table mb-none"  id="tabla_paginas">
								<thead>
									<tr>
										<th>ID</th>
										<th>Menu</th>
										<th>Pagina</th>
										<th>Accion</th>
									</tr>
								</thead>
								<tbody>

								</tbody>
								
							</table>
        </div> 
		</div>
</section>

				</div>
				