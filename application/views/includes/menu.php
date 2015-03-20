			<!-- end: header -->

			<div class="inner-wrapper">
				<!-- start: sidebar -->
				<aside id="sidebar-left" class="sidebar-left">
				
					<div class="sidebar-header">
						<div class="sidebar-title">
							Menu
						</div>
						<div class="sidebar-toggle hidden-xs" data-toggle-class="sidebar-left-collapsed" data-target="html" data-fire-event="sidebar-left-toggle">
							<i class="fa fa-bars" aria-label="Toggle sidebar"></i>
						</div>
					</div>

			
					<div class="nano">
						<div class="nano-content">
							<nav id="menu" class="nav-main" role="navigation">
								<ul class="nav nav-main">
					<li>
										<a href="<?php echo base_url(); ?>inicio/inicio">
											<i class="fa fa-home" aria-hidden="true"></i>
											<span>Inicio</span>
										</a>
									</li>
								
							<?php
						//Recorre el arreglo de modulos autorizados controllers/inventario



						  //Recorre el arreglo de menus autorizados controllers/inventario 
		
						 foreach($menus_autorizados as $fila_menu)
						  {		
							
							echo "<li class='nav-parent'>";
							echo "<a>";
							echo $fila_menu['clase'];
							echo "<span>".$fila_menu['menu']."</span>";
							echo "</a>";
							
							echo "<ul class='nav nav-children'>";

							foreach($paginas_autorizadas as $fila_pagina){
							if($fila_pagina['menu']==$fila_menu['menu']){
							echo "<li>";
							echo "<a href='".base_url().strtolower ($fila_pagina['menu'])."/".$fila_pagina['url']."'>";
							echo $fila_pagina['descripcion'];
							echo "</a>";
							echo "</li>";
							
							}		
							}							
							echo "</ul>";
							echo "</li>";
						  }
						
						  ?>  							

								</ul>
							</nav>
				
							<hr class="separator" />
				

						</div>
				
					</div>
				
				</aside>
				