			<section role="main" class="content-body">
					<header class="page-header">
						<h2>Cargas Eficiencias</h2>
					
						<div class="right-wrapper pull-right">
							<ol class="breadcrumbs">
								<li>
									<a href="index.html">
										<i class="fa fa-home"></i>
									</a>
								</li>
								<li><span>Pilotos</span></li>
								<li><span>Cargas Eficiencias</span></li>
							</ol>
					
							<a class="sidebar-right-toggle" data-open="sidebar-right"><i class="fa fa-chevron-left"></i></a>
						</div>
					</header>

					<!-- start: page -->

                <div class="col-md-12">
                    <section class="panel">
                        <header class="panel-heading">

                            <h2 class="panel-title">Cargas archivo CSV</h2>
                        </header>
                        <div class="panel-body">
						  <form method="post" action="<?php echo base_url() ?>csv_eficiencias/importcsv" enctype="multipart/form-data">
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
                            </div>
								<div class="row form-group">
								
					<?php if (isset($error)): ?>
                <div class="alert alert-error"><?php echo $error; ?></div>
            <?php endif; ?>
            <?php if ($this->session->flashdata('success') == TRUE): ?>
                <div class="alert alert-success"><?php echo $this->session->flashdata('success'); ?></div>
            <?php endif; ?>
              
				
                    <input type="file" name="userfile" class="file" >
                    <input type="submit" name="submit" value="Cargar" class="btn btn-primary">
               
								</div> 						
 </form> 
		
						</div>
					
                    </section>
                </div>
                <div class="col-md-12">
                    <section class="panel">
                        <header class="panel-heading">

                            <h2 class="panel-title">Zonas Cargadas</h2>
                        </header>
                        <div class="panel-body">
                            <div class="row form-group">
                                <label class="col-md-1 control-label">Año</label>
                                <div class="col-sm-2">
                                    <input type="text" class="form-control" id="cargada_anio" name="cargada_anio">

                                </div>      
                           <label class="col-md-1 control-label">Campaña</label>
                                <div class="col-sm-1">
                                    <select class="form-control mb-md"  id="cargada_campania" name="cargada_campania">
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
                                </div>		<div class="col-sm-1">
<button type="button" class="mb-xs mt-xs mr-xs btn btn-primary" id="busqueda" onclick="zonas_cargadas();"><i class="fa fa-search"></i> </button>  								
                            </div>    
							
							</div>
				<div class="col-sm-6">			
<div class="table-responsive">
										<table class="table table-hover mb-none" id="zonas_cargadas">
											<thead>
												<tr>
													<th>Año</th>
													<th>Campaña</th>
													<th>Zona</th>
													<th>Pedidos</th>
													<th>Eliminar</th>
												</tr>
											</thead>
											<tbody>

											</tbody>
										</table>
									</div>		
									</div>	

							</div>	
				 
                    </section>
           

            
        </div>					
</section>
		



				
				