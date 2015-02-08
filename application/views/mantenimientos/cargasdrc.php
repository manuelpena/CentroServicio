				<section role="main" class="content-body">
					<header class="page-header">
						<h2>Blank Page</h2>
					
						<div class="right-wrapper pull-right">
							<ol class="breadcrumbs">
								<li>
									<a href="index.html">
										<i class="fa fa-home"></i>
									</a>
								</li>
								<li><span>Pages</span></li>
								<li><span>Blank Page</span></li>
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
								<label class="col-md-1 control-label">Zona</label>
                                <div class="col-sm-2">
                                    <select class="form-control mb-md" id="zona" name="zona">
									<option value="201">201</option>
									<option value="202">202</option>
									<option value="203">203</option>
									<option value="204">204</option>
									<option value="205">205</option>
									<option value="206">206</option>
									<option value="207">207</option>
									<option value="208">208</option>
									<option value="209">209</option>
									<option value="210">210</option>
									<option value="211">211</option>
									<option value="212">212</option>
									<option value="213">213</option>
									<option value="214">214</option>
									<option value="215">215</option>
									<option value="216">216</option>
									<option value="217">217</option>
									<option value="218">218</option>
									<option value="219">219</option>
									<option value="220">220</option>
									<option value="221">221</option>
									<option value="222">222</option>
									<option value="223">223</option>
									<option value="224">224</option>
									<option value="225">225</option>
									<option value="226">226</option>
									<option value="227">227</option>
									<option value="228">228</option>
									<option value="229">229</option>
									<option value="230">230</option>
									<option value="231">231</option>
									<option value="232">232</option>
									<option value="233">233</option>
									<option value="234">234</option>
									<option value="235">235</option>
									<option value="236">236</option>
									<option value="237">237</option>
									<option value="238">238</option>
									<option value="239">239</option>
									<option value="240">240</option>
									<option value="241">241</option>
									</select>								
                                </div>
     								
						<label class="col-md-1 control-label">Tipo</label>
                                <div class="col-sm-2">
                                    <select class="form-control mb-md" id="tipo_pedido" name="tipo_pedido">
									<option value="Normal">Normal</option>
									<option value="Tardio">Tardio</option>
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

                            <h2 class="panel-title">Solicitudes Buzones y Gerentes</h2>
                        </header>
                        <div class="panel-body">

									<div class="table-responsive">
										<table class="table mb-none">
											<thead>
												<tr>
													<th>Caja</th>
													<th>Zona</th>
													<th>Codigo</th>
													<th>Nombre Consejera</th>
													<th>Estado</th>
													<th>Accion</th>
													
												</tr>
											</thead>
											<tbody>
											
                    <?php if ($addressbook == FALSE): ?>
                        <tr><td colspan="4">There are currently No Addresses</td></tr>
                    <?php else: ?>
                        <?php foreach ($addressbook as $row): ?>
                            <tr>
                                <td><?php echo $row['campania']; ?></td>
                                <td><?php echo $row['lastname']; ?></td>
                                <td><?php echo $row['phone']; ?></td>
                                <td><?php echo $row['email']; ?></td>
                            </tr>
                        <?php endforeach; ?>
                    <?php endif; ?>

											</tbody>
										</table>
									</div>
					
                    </section>
                </div>

            </section>
        </div>					
					
					<!-- end: page -->
				</section>
