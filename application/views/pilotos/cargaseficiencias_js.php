		<script>
$( document ).ready(function() {



});
function zonas_cargadas(){

  var anio = $('#cargada_anio').val();
  var campania = $('#cargada_campania').val();
  
  var info = "anio="+anio+"&campania="+campania

	//Cuadro de Adicionales
		$.ajax({
			url:'<?php echo base_url(); ?>'+'cargaseficiencias/zonas_cargadas/',
			dataType:'json',
			type: 'POST',
			data:info,
			success: function(respuesta){		

		var table = $("#zonas_cargadas tbody");
		table.empty();
		for (var i = 0; i < respuesta.length; i++) {
		table.append("<tr><td>"+respuesta[i].anio+"</td><td>"+respuesta[i].campania
		+"</td><td>"+respuesta[i].zona+"</td><td>"+respuesta[i].cantidad+"</td><td><a href='#' onclick='eliminar_zona("
		+respuesta[i].anio+","+respuesta[i].campania+","+respuesta[i].zona+")'><i class='fa fa-trash-o'></i></a></td>"
		);

		}
		
			},
			error: function(error){
		var table = $("#zonas_cargadas tbody");
		table.empty();			
			 console.log(error);
				new PNotify({
					title: 'Atención',
					text: 'No existe informacion con los parametros ingresados',
					type: 'error',
				});
			}
			});
	
}

	function eliminar_zona(anio, campania, zona){
	
	console.log(anio+" "+campania+" "+zona)
	
	var info = "anio="+anio+"&campania="+campania+"&zona="+zona
	
	$.ajax({
			url:'<?php echo base_url(); ?>'+'cargaseficiencias/eliminar_zona/',
			dataType:'json',
			type: 'POST',
			data:info,
			success: function(respuesta){		

		zonas_cargadas();

		
		
			},
			error: function(error){
	
			 console.log(error);
				new PNotify({
					title: 'Atención',
					text: 'No existe informacion con los parametros ingresados',
					type: 'error',
				});
			}
			});
	}

		</script>
		

		<!-- Examples -->
		<script src="<?php echo base_url(); ?>assets/javascripts/ui-elements/examples.notifications.js"></script>		

		</body>
</html>