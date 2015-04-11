			<section role="main" class="content-body">
					<header class="page-header">
						<h2>Cargas Tigo Money</h2>
					
						<div class="right-wrapper pull-right">
							<ol class="breadcrumbs">
								<li>
									<a href="index.html">
										<i class="fa fa-home"></i>
									</a>
								</li>
								<li><span>Boletas</span></li>
								<li><span>Cargas Tigo Money</span></li>
							</ol>
					
							<a class="sidebar-right-toggle" data-open="sidebar-right"><i class="fa fa-chevron-left"></i></a>
						</div>
					</header>

					<!-- start: page -->

                <div class="col-md-12">
                    <section class="panel">
                        <header class="panel-heading">

                            <h2 class="panel-title">Cargas Tigo Money</h2>
                        </header>
                        <div class="panel-body">
						  <form method="post" action="<?php echo base_url() ?>csv_tigo_money/importcsv" enctype="multipart/form-data">
                            <div class="row form-group">
					
                            </div>
								<div class="row form-group">
								
					<?php if (isset($error)): ?>
                <div class="alert alert-error"><?php echo $error; ?></div>
            <?php endif; ?>
            <?php if ($this->session->flashdata('success') == TRUE): ?>
                <div class="alert alert-success"><?php echo $this->session->flashdata('success'); ?></div>
            <?php endif; ?>
              
				
                                                 <div class="col-sm-2">
            						<input type="file" name="userfile" class="file" >
                    <input type="submit" name="submit" value="Cargar" class="btn btn-primary">
               
                                </div> 
		
								</div> 						
 </form> 
						</div>
		
			
                    </section>
                </div>
                <div class="col-md-12">
                    <section class="panel">
                        <header class="panel-heading">

                            <h2 class="panel-title">Boletas Cargadas</h2>
                        </header>
                        <div class="panel-body">
							 <?php echo $tabla_boletas ?>	

						</div>
		
			
                    </section>
                </div>
				
</section>
		



				
				