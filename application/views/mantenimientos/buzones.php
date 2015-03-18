			<section role="main" class="content-body">
                <header class="page-header">
                    <h2>Mantenimiento Buzones</h2>

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
                            <li><span>Mantenimiento de Buzones</span>
                            </li>
                        </ol>

                        <a class="sidebar-right-toggle" data-open="sidebar-right"><i class="fa fa-chevron-left"></i></a>
                    </div>
                </header>

					<!-- start: page -->

                          <div class="col-md-7">
                    <section class="panel">
                        <header class="panel-heading">

                            <h2 class="panel-title">Datos de Buzones</h2>
                        </header>
                        <div class="panel-body">

                            <div class="row form-group">
                                <label class="col-md-2 control-label">Zona</label>
                                <div class="col-sm-2">
									<select class="form-control" id="zona" name="zona">
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
								<div class="col-sm-2">
<input type="text" class="form-control" id="buzon_id" style="display: none;">                                                     
					 <button type="button" class="mb-xs mt-xs mr-xs btn btn-primary" id="busqueda" onclick="mostrar_buzones();"><i class="fa fa-search"></i> </button>                           
                                </div> 

								</div>
								<div class="row form-group">
                                <label class="col-md-2 control-label">Nombre del Buzon</label>
                                <div class="col-sm-4">
                                    <input type="text" class="form-control" id="buzon">                                
									</div> 
								<div class="col-sm-3">
									<div class="btn-group">

												<button type="button" class="mb-xs mt-xs mr-xs btn btn-primary dropdown-toggle" data-toggle="dropdown">Accion <span class="caret"></span></button>
												<ul class="dropdown-menu" role="menu">
													<li><a onclick="guardar_buzon(1)">Nuevo</a></li>
													<li class="divider"></li>
													<li><a onclick="guardar_buzon(2)">Actualizar</a></li>
												</ul>
											</div>
									
                                </div> 			
								<div class="col-sm-2">
                                    <input type="text" class="form-control" id="buzon_id" style="display: none;">                                
                                </div> 

								</div>
								
								</div>
					</section>
					
					<section class="panel">
						<header class="panel-heading">
							<div class="panel-actions">
								<a href="#" class="fa fa-caret-down"></a>
								
							</div>

							<h2 class="panel-title">Listado de Buzones</h2>
						</header>
						<div class="panel-body">
						<div class="table-responsive">
							<table class="table mb-none"  id="tabla_buzones">
								<thead>
									<tr>
										<th>ID</th>
										<th>Zona</th>
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

				
				