<section role="main" class="content-body">
    <header class="page-header">
        <h2>Mantenimiento Usuarios</h2>

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
                <li><span>Mantenimiento de Usuarios</span>
                </li>
            </ol>

            <a class="sidebar-right-toggle" data-open="sidebar-right"><i class="fa fa-chevron-left"></i></a>
        </div>
    </header>

    <!-- start: page -->

    <div class="col-md-8">
        <section class="panel">
            <header class="panel-heading">

                <h2 class="panel-title">Datos de Usuario</h2>
            </header>
            <div class="panel-body">

                <div class="row form-group">
                    <label class="col-md-2 control-label">Usuario</label>
                    <div class="col-sm-2">
                        <input type="text" class="form-control" id="usuario">
                    </div>
                </div>
                <div class="row form-group">
                    <label class="col-md-2 control-label">Nombre</label>
                    <div class="col-sm-3">
                        <input type="text" class="form-control" id="descripcion_usuario" name="descripcion_usuario">

                    </div>
                <div class="col-sm-3">
                    <input type="text" class="form-control" id="usuario_id" style="display: none;">
                </div>

                </div>

              
                <div class="row form-group">
                    <label class="col-md-2 control-label">Contraseña</label>
                    <div class="col-sm-3">
                        <input type="password" class="form-control" id="contrasenia" name="contrasenia">
		

                    </div>        
					<div class="col-sm-1">
									<button type="button" class="mb-xs mt-xs mr-xs btn btn-primary" onclick="cambiar_contrasenia();"><i class="fa fa-refresh"></i> </button>

		

                    </div>
					
                </div>

                <div class="row form-group">
                    <label class="col-md-2 control-label">Rol</label>
                    <div class="col-sm-3">
                                 <select class="form-control input-sm mb-md"  id="rol" name="rol">
								 <option value="0">Selecionar Rol</option>
									</select>

                    </div>
                </div>

                <div class="row form-group">
                    <label class="col-md-2 control-label">Estado</label>
                    <div class="col-sm-3">
                                 <select class="form-control input-sm mb-md"  id="estado" name="estado">
								 <option value="1">Activo</option>
								 <option value="2">Inactivo</option>
									</select>
                    </div>
                
					
                    <div class="col-sm-3">
                        <div class="btn-group">

                            <button type="button" class="mb-xs mt-xs mr-xs btn btn-primary dropdown-toggle" data-toggle="dropdown">Accion <span class="caret"></span></button>
                            <ul class="dropdown-menu" role="menu">
                                <li><a onclick="guardar_usuario(1)">Nuevo</a></li>
                                <li class="divider"></li>
                                <li><a onclick="guardar_usuario(2)">Actualizar</a></li>
                            </ul>
                        </div>

                    </div>
</div>

            </div>
        </section>

        <section class="panel">
            <header class="panel-heading">
                <div class="panel-actions">
                    <a href="#" class="fa fa-caret-down"></a>

                </div>

                <h2 class="panel-title">Listado de Usuarios</h2>
            </header>
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table mb-none" id="tabla_usuarios">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nombre</th>
                                <th>Rol</th>								
                                <th>Estado</th>
                                <th>Accion</th>
                            </tr>
                        </thead>
                        <tbody>

                        </tbody>

                    </table>
                </div>
            </div>
        </section>