<script>
$( document ).ready(function() {

mostrar_agencias();

});

function mostrar_agencias(){
		$.ajax({
			url:'<?php echo base_url(); ?>'+'agencias/listado_agencias/',
			dataType:'json',
			type: 'POST',
			success: function(respuesta){
		var table = $("#tabla_agencias tbody");
		table.empty();
		for (var i = 0; i < respuesta.length; i++) {
		
		table.append("<tr><td>"+respuesta[i].id+"</td><td>"+respuesta[i].descripcion+"</td><td><a href='#' onclick='buscar_agencia("
		+respuesta[i].id+")'><i class='fa fa-edit'></i></a> <a href='#' onclick='eliminar_agencia("
		+respuesta[i].id+")'><i class='fa fa-trash-o'></i></a></td>"
		);
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
}

function buscar_agencia(id){

	var info ="id="+id
		$.ajax({
			url:'<?php echo base_url(); ?>'+'agencias/buscar_agencia/',
			dataType:'json',
			type: 'POST',
			data:info,
			success: function(respuesta){
		for (var i = 0; i < respuesta.length; i++) {
		
		$("#agencia").val(respuesta[i].descripcion)
		$("#agencia_id").val(respuesta[i].id)

		}
		
			},
			error: function(){
				new PNotify({
					title: 'Atención',
					text: 'No existen agencias con los parametros ingresados',
					type: 'error',
				});
			}
			});
}


function guardar_agencia(accion){
	
	var descripcion = $("#agencia").val();
	var agencia_id = $("#agencia_id").val();
	if(accion==1){
	var info ="id="+0+"&descripcion="+descripcion
	}else{
	var info ="id="+agencia_id+"&descripcion="+descripcion
	}
	console.log(info)
		$.ajax({
			url:'<?php echo base_url(); ?>'+'agencias/guardar_agencia/',
			dataType:'json',
			type: 'POST',
			data:info,
			success: function(respuesta){
		mostrar_agencias();
			new PNotify({
					title: 'Mensaje',
					text: 'Se guardó la información correctamente',
					type: 'success',
				});

			},
			error: function(){
				new PNotify({
					title: 'Atención',
					text: 'Agencia ya existe en base de datos',
					type: 'error',
				});
			}
			});
}
function eliminar_agencia(id){

	var info ="id="+id
		$.ajax({
			url:'<?php echo base_url(); ?>'+'agencias/eliminar_agencia/',
			dataType:'json',
			type: 'POST',
			data:info,
			success: function(respuesta){

		
		mostrar_agencias();
			new PNotify({
					title: 'Mensaje',
					text: 'Se guardó la información correctamente',
					type: 'success',
				});

		
			},
			error: function(){
				new PNotify({
					title: 'Atención',
					text: 'No existen agencias con los parametros ingresados',
					type: 'error',
				});
			}
			});
}
</script>














		<script src="<?php echo base_url(); ?>assets/javascripts/tables/examples.datatables.default.js"></script>
		<script src="<?php echo base_url(); ?>assets/javascripts/tables/examples.datatables.row.with.details.js"></script>
		<script src="<?php echo base_url(); ?>assets/javascripts/tables/examples.datatables.tabletools.js"></script>	

		
		<!-- Specific Page Vendor -->
		<script src="<?php echo base_url(); ?>assets/vendor/jquery-ui/js/jquery-ui-1.10.4.custom.js"></script>
		<script src="<?php echo base_url(); ?>assets/vendor/jquery-ui-touch-punch/jquery.ui.touch-punch.js"></script>
		<script src="<?php echo base_url(); ?>assets/vendor/fullcalendar/lib/moment.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/vendor/fullcalendar/fullcalendar.js"></script>
		<script src="<?php echo base_url(); ?>assets/vendor/fullcalendar/lang-all.js"></script>
		<!-- Examples -->
		<script src="<?php echo base_url(); ?>assets/javascripts/pages/examples.calendar.js"></script>
		</body>
</html>

