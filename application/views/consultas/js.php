		<script>
		$(function() {
		
	
	$('#codigo').change(function(){
	var codigo = $( this ).val();		
	
	
		$('#form_consejera')[0].reset();	
		$('#form_pedido')[0].reset();
		$("#historial_consejera > tbody").html("");
			$.ajax({
			url:'<?php echo base_url(); ?>'+'solicitudesconsejeras/datos_consejera_consulta/'+codigo,
			dataType:'json',
			type: 'POST',
			data:codigo,
			success: function(respuesta){

		for (var i = 0; i < respuesta.length; i++) {		
		$('#pedido_id').val(respuesta[i].pedido_id)
		$('#codigo').val(respuesta[i].codigo)
		$('#nombres').val(respuesta[i].nombres)
		$('#zona').val(respuesta[i].zona)
		$('#sector').val(respuesta[i].sector)
		$('#campania').val(respuesta[i].campania)
		$('#direccion').val(respuesta[i].direccion)
		generar_historial(respuesta[i].codigo)
		}
		$('#codigo').focus();
		
			},
			error: function(){
				new PNotify({
					title: 'Atención',
					text: 'No existen consejeras con los parametros ingresados',
					type: 'error',
				});
			}
			});

          });
		  });
		

		</script>
		
		<script src="<?php echo base_url(); ?>assets/javascripts/tables/examples.datatables.default.js"></script>
		<script src="<?php echo base_url(); ?>assets/javascripts/ui-elements/examples.modals.js"></script>
		<!-- Examples -->
		<script src="<?php echo base_url(); ?>assets/javascripts/ui-elements/examples.notifications.js"></script>		
		<script src="<?php echo base_url(); ?>assets/javascripts/tables/examples.datatables.editable.js"></script>	

		</body>
</html>