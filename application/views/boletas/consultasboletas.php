				<section role="main" class="content-body">
					<header class="page-header">
						<h2>Consultas de Boletas</h2>
					
						<div class="right-wrapper pull-right">
							<ol class="breadcrumbs">
								<li>
									<a href="index.html">
										<i class="fa fa-home"></i>
									</a>
								</li>
								<li><span>Boletas</span></li>
								<li><span>Consultas de Boletas</span></li>
							</ol>
					
							<a class="sidebar-right-toggle" data-open="sidebar-right"><i class="fa fa-chevron-left"></i></a>
						</div>
					</header>
                <div class="col-md-12">
                    <section class="panel">
                        <header class="panel-heading">

                            <h2 class="panel-title">Datos de Boletas</h2>
                        </header>
                        <div class="panel-body">

			 <?php echo $tabla_boletas ?>			

		
						</div>
					
                    </section>
                </div>
				</section>
<script>
function eliminar_boletas(id){

var info = "id="+id
			$.ajax({
                url: '<?php echo base_url(); ?>' + 'consultasboletas/eliminar_boletas/',
                type: 'POST',
                data: info,
                success: function(respuesta) {

                   location.reload();

                }
            });	
}
</script>