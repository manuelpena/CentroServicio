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

                            <h2 class="panel-title">Generacion de Desmantelado</h2>
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
     								
							
                            </div>
								<div class="row form-group">
                                    <div class="col-sm-4">
                    <input  value="Generar" class="btn btn-primary" onclick="generar_desmantelado()">
               
								</div> 		</div> 						
 </form> 
		
						</div>
					
                    </section>
                </div>	
</section>
		
		<script>
		function generar_desmantelado(){
	
		var anio = $('#anio').val();
		var campania = $('#campania').val();
		var zona =$('#zona').val();
		
		var info = "anio="+anio+"&campania="+campania+"&zona="+zona
		console.log(info)

			$.ajax({
			url:'<?php echo base_url(); ?>'+'desmantelado/generar_desmantelado/',
			type: 'POST',
			data:info,
			success: function(respuesta){

				new PNotify({
					title: 'Mensaje',
					text: 'Desmantelado generado con Exito',
					type: 'success',
				});
			},
			
			error: function(){
				new PNotify({
					title: 'Atención',
					text: 'Codigo de consejera no existe, \o tiene ya solicitud!',
					type: 'error',
				});
			}
			});
			
		}		
		</script>


				
				