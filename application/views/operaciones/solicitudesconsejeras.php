            <section role="main" class="content-body">
                <header class="page-header">
                    <h2>Solicitudes Consejeras</h2>

                    <div class="right-wrapper pull-right">
                        <ol class="breadcrumbs">
                            <li>
                                <a href="index.html">
                                    <i class="fa fa-home"></i>
                                </a>
                            </li>
                            <li><span>Operaciones</span>
                            </li>
                            <li><span>Solicitudes Consejeras</span>
                            </li>
                        </ol>

                        <a class="sidebar-right-toggle" data-open="sidebar-right"><i class="fa fa-chevron-left"></i></a>
                    </div>
                </header>


             <div class="col-md-12">
                    <section class="panel">
                        <header class="panel-heading">

                            <h2 class="panel-title">Datos de Consejera</h2>
                        </header>
                        <div class="panel-body">
<form id="form_solicitudes">
                            <div class="row form-group">
                                <label class="col-md-1 control-label">Codigo</label>
                                <div class="col-sm-3">
                                    <input type="text" class="form-control" id="codigo" name="codigo">

                                </div>                   
								<label class="col-md-1 control-label">Solicitante</label>
                                <div class="col-sm-3">
                                    <input type="text" class="form-control" id="solicitante" name="solicitante">

                                </div> 	
								<label class="col-md-1 control-label">Documento</label>
                                <div class="col-sm-2">
                                    <input type="text" class="form-control" id="documento" name="documento">

                                </div>      

                            </div>
                            <div class="row form-group">
                                <label class="col-md-1 control-label">Nombres</label>
                                <div class="col-sm-3">
                                    <input type="text" class="form-control" id="nombres" name="nombres" disabled>

                                </div>

                                <label class="col-md-1 control-label">Zona</label>
                                <div class="col-sm-1">
                                    <input type="text" class="form-control" id="zona" name="zona" disabled>

                                </div>
                                <label class="col-md-1 control-label">Sector</label>
                                <div class="col-sm-1">
                                 <input type="text" class="form-control" id="sector" name="sector" disabled>

                                </div>                                <label class="col-md-1 control-label">Campaña</label>
                                <div class="col-sm-1">
                                 <input type="text" class="form-control" id="campania" name="campania" disabled>

                                </div>
                            </div>                    
							<div class="row form-group">
                                <label class="col-md-1 control-label">Direccion</label>
                                <div class="col-sm-4">
                   <textarea class="form-control" rows="2" id="direccion" name="direccion" disabled></textarea>


                                </div>

                            </div>
		                     <div class="row form-group">		
<label class="col-md-2 control-label"><h4>Datos del Pedido</h4></label>        
                        <div class="col-sm-1">
                                    <input type="text" class="form-control" id="pedido_id" name="pedido_id">

                                </div>
 </div>
                           <div class="row form-group">
                                <label class="col-md-1 control-label">Cajas</label>
                                <div class="col-sm-1">
                                    <input type="text" class="form-control" id="cajas" name="cajas" disabled>

                                </div>

                                <label class="col-md-1 control-label">Observaciones</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="comentarios" name="comentarios" disabled>

                                </div>

                            </div>
							<div class="row form-group">
                                <label class="col-md-1 control-label">COD</label>
                                <div class="col-sm-1">
                                    <input type="text" class="form-control" id="cod" name="cod" disabled>

                                </div>

                                <label class="col-md-1 control-label">POD</label>
                                <div class="col-sm-2">
                                    <input type="text" class="form-control" id="pod" name="pod" disabled>

                                </div>
                                <label class="col-md-1 control-label">Autorizacion</label>
                                <div class="col-sm-1">
                                    <input type="text" class="form-control" id="autorizacion" name="autorizacion" >

                                </div>

                      		
                                <label class="col-md-1 control-label">A pagar</label>
                                <div class="col-sm-1">
                                    <input type="text" class="form-control" id="total_pagar" name="total_pagar" disabled>

                                </div> </div>								
 <div class="row form-group">		
                     <label class="col-md-1 control-label">Bodegaje</label>
                                <div class="col-sm-1">
                                    <input type="text" class="form-control" id="bodegaje" name="bodegaje" disabled>

                                </div> 
<a class="mb-xs mt-xs mr-xs modal-with-zoom-anim btn btn-default" href="#modalSM" id="BotonModal" hidden="hidden" style=" visibility: hidden;" ></a> 
                                <label class="col-md-1 control-label">Exonerar Bodegaje</label>
                                <div class="col-sm-1">
								<div class="checkbox-custom checkbox-primary">
															<input type="checkbox"  id="checkboxExample"></input>
															<label for="checkboxExample2"></label>
														</div>



                                </div>      
								<div class="col-sm-2">
									<button type="button" class="mb-xs mt-xs mr-xs btn btn-primary btn-lg btn-block" id="despachar">Despachar</button>


                                </div>
      </div>
	  </form>
		                     <div class="row form-group">		
<label class="col-md-6 control-label"><h4>Historial de Solicitudes <? echo date('Y-m-d')?></h4></label>
 </div>		  
           
<?php echo $this->table->generate(); ?>


				<div id="modalSM" class="modal-block modal-block-sm mfp-hide">
										<section class="panel">
											<header class="panel-heading">
												<h2 class="panel-title">Accion requiere privilegios de Supervisor</h2>
											</header>
											<div class="panel-body">
							<div class="row form-group">
                                <label class="col-md-3 control-label">Usuario</label>
                                <div class="col-sm-4">
                                    <input type="text" class="form-control" id="inputDefault">


                                </div>

                            </div>							<div class="row form-group">
                                <label class="col-md-3 control-label">Contraseña</label>
                                <div class="col-sm-4">
              <input type="password" class="form-control" id="inputDefault">


                                </div>

                            </div>
											</div>
											<footer class="panel-footer">
												<div class="row">
													<div class="col-md-12 text-right">
														<button class="btn btn-primary modal-confirm">Confirmar</button>
														<button class="btn btn-default modal-dismiss">Cancelar</button>
													</div>
												</div>
											</footer>
										</section>
									</div>


		   </div>
					
                    </section>
                </div>

            </section>
			
			      </div>