<script>
$( document ).ready(function() {
	$.ajax({
			url:'<?php echo base_url(); ?>'+'desmantelado/posibles_zonas/',
			dataType:'json',
			type: 'POST',
			success: function(respuesta){
		var table = $("#zonas_cargadas_tbl tbody");

		for (var i = 0; i < respuesta.length; i++) {
		
		table.append("<tr><td>"+respuesta[i].anio+"</td><td>"+respuesta[i].campania
		+"</td><td>"+respuesta[i].zona+"</td><td>"+respuesta[i].activos
		+"</td><td><a href='#' onclick='generar_desmantelado("+respuesta[i].anio+","+respuesta[i].campania+","+respuesta[i].zona+")'><i class='fa fa-dropbox'></i>desmantelar</a></td>"
		+"<td><a href='#' onclick='revertir_desmantelado("+respuesta[i].anio+","+respuesta[i].campania+","+respuesta[i].zona+")'><i class='fa fa-dropbox'></i>revertir</a></td></tr>"

		}
		
			},
			error: function(){
				new PNotify({
					title: 'Atención',
					text: 'No hay zonas cargadas con los parametros ingresados',
					type: 'error',
				});
			}
			});
	//funciones;

	
	

});

</script>














		<script src="<?php echo base_url(); ?>assets/javascripts/tables/examples.datatables.default.js"></script>
		<script src="<?php echo base_url(); ?>assets/javascripts/tables/examples.datatables.row.with.details.js"></script>
		<script src="<?php echo base_url(); ?>assets/javascripts/tables/examples.datatables.tabletools.js"></script>	

		
		<!-- Specific Page Vendor -->
		<script src="<?php echo base_url(); ?>assets/vendor/jquery-ui/js/jquery-ui-1.10.4.custom.js"></script>
		<script src="<?php echo base_url(); ?>assets/vendor/jquery-ui-touch-punch/jquery.ui.touch-punch.js"></script>
		</body>
</html>

