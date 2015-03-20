			<section role="main" class="content-body">
					<header class="page-header">
						<h2>Cargas DRC</h2>
					
						<div class="right-wrapper pull-right">
							<ol class="breadcrumbs">
								<li>
									<a href="index.html">
										<i class="fa fa-home"></i>
									</a>
								</li>
								<li><span>Mantenimientos</span></li>
								<li><span>Cargas DRC</span></li>
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
     								
						<label class="col-md-1 control-label">Tipo</label>
                                <div class="col-sm-2">
                                    <select class="form-control mb-md" id="tipo_pedido" name="tipo_pedido">
									<option value="1">Normal</option>
									<option value="2">Tardio</option>
									</select>								
                                </div>								
                            </div>
							<div class="row form-group">	

						<label class="col-md-1 control-label">Fecha</label>							
	                                <div class="col-sm-2">
										<div class="input-group">
													<span class="input-group-addon">
														<i class="fa fa-calendar"></i>
													</span>
													<input type="text" data-plugin-datepicker class="form-control" id="fecha_ingreso" name="fecha_ingreso">
												</div>
							
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

                            <h2 class="panel-title">Informacion Cargada</h2>
                        </header>
                        <div class="panel-body">
<table class="table table-bordered table-striped mb-none" id="datatable-default">
								<thead>
									<tr>
													<th>Numero de Caja</th>
													<th>Campaña</th>
													<th>Zona</th>
													<th>Codigo</th>
													<th>Nombre Consejera</th>
													<th>Cajas</th>	
													<th>LOS</th>	
													<th>COD</th>	
									</tr>
								</thead>
								<tbody>
	                    <?php if ($addressbook == FALSE): ?>
                      
                    <?php else: ?>
                        <?php foreach ($addressbook as $row): ?>
                            <tr>
                                <td><?php echo $row['ncaja']; ?></td>
								<td><?php echo $row['campania']; ?></td>
								<td><?php echo $row['zona']; ?></td>
                                <td><?php echo $row['codigo']; ?></td>
                                <td><?php echo $row['nombres']; ?></td>
                                <td><?php echo $row['los']; ?></td>
								<td><?php echo $row['cajas']; ?></td>
								<td><?php echo $row['cod']; ?></td>
                            </tr>
                        <?php endforeach; ?>
                    <?php endif; ?>


								</tbody>
							</table>


					
                    </section>
                </div>

            
        </div>					
</section>
		


				
				