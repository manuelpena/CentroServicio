            <section role="main" class="content-body">
                <header class="page-header">
                    <h2>Pedidos Pendientes</h2>

                    <div class="right-wrapper pull-right">
                        <ol class="breadcrumbs">
                            <li>
                                <a href="index.html">
                                    <i class="fa fa-home"></i>
                                </a>
                            </li>
                            <li><span>Operaciones</span>
                            </li>
                            <li><span>Pedidos a Pendientes</span>
                            </li>
                        </ol>

                        <a class="sidebar-right-toggle" data-open="sidebar-right"><i class="fa fa-chevron-left"></i></a>
                    </div>
                </header>


             <div class="col-md-12">
                    <section class="panel">
                        <header class="panel-heading">

                            <h2 class="panel-title">Solicitudes Consejera / Gerente de Zona</h2>
									<div class="panel-actions">
										<a href="#" class="fa fa-caret-down"></a>
									</div>							
                        </header>
                        <div class="panel-body">
           
 <?php echo $tabla_consejeras ?>



		   </div>
					
                    </section>
                </div>

				<div class="col-md-12">
                    <section class="panel">
                        <header class="panel-heading">

                            <h2 class="panel-title">Solicitudes Buzones</h2>
									<div class="panel-actions">
										<a href="#" class="fa fa-caret-down"></a>
									</div>							
                        </header>
                        <div class="panel-body">
           
 <?php echo $tabla_buzones ?>



		   </div>
					
                    </section>
                </div>

				<div class="col-md-12">
                    <section class="panel">
                        <header class="panel-heading">
                            <h2 class="panel-title">Solicitudes Despachadas</h2>
									<div class="panel-actions">
										<a href="#" class="fa fa-caret-down"></a>
									</div>
							
                        </header>
                        <div class="panel-body">
           
 <?php echo $tabla_despachadas ?>



		   </div>
					
                    </section>
                </div>

            </section>
			
			      </div>