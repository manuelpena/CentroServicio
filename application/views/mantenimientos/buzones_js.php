<script>
$( document ).ready(function() {

$( "#zona" ).change(function() {
	$("#buzon").val('');
});


});

function mostrar_buzones(){

	var zona = $("#zona").val();
	var info ="zona="+zona
	console.log(info)
		$.ajax({
			url:'<?php echo base_url(); ?>'+'buzones/listado_buzones/',
			dataType:'json',
			type: 'POST',			
			data:info,
			success: function(respuesta){
		var table = $("#tabla_buzones tbody");
		table.empty();
		for (var i = 0; i < respuesta.length; i++) {
		
		table.append("<tr><td>"+respuesta[i].id+"</td><td>"+respuesta[i].zona+"</td><td>"+respuesta[i].descripcion+"</td><td><a href='#' onclick='buscar_buzon("
		+respuesta[i].id+")'><i class='fa fa-edit'></i></a> <a href='#' onclick='eliminar_buzon("
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
		var table = $("#tabla_buzones tbody");
		table.empty();
			}
			});
}

function buscar_buzon(id){

	var info ="id="+id
		$.ajax({
			url:'<?php echo base_url(); ?>'+'buzones/buscar_buzon/',
			dataType:'json',
			type: 'POST',
			data:info,
			success: function(respuesta){
		for (var i = 0; i < respuesta.length; i++) {
		
		$("#buzon").val(respuesta[i].descripcion)
		$("#buzon_id").val(respuesta[i].id)

		}
		
			},
			error: function(){
				new PNotify({
					title: 'Atención',
					text: 'No existen buzones con los parametros ingresados',
					type: 'error',
				});
			}
			});
}


function guardar_buzon(accion){
	
	var descripcion = $("#buzon").val();
	var zona = $("#zona").val();
	var buzon_id = $("#buzon_id").val();
	if(accion==1){
	var info ="id="+0+"&descripcion="+descripcion+"&zona="+zona
	}else{
	var info ="id="+buzon_id+"&descripcion="+descripcion
	}
	console.log(info)
		$.ajax({
			url:'<?php echo base_url(); ?>'+'buzones/guardar_buzon/',
			dataType:'json',
			type: 'POST',
			data:info,
			success: function(respuesta){
		mostrar_buzones();
			new PNotify({
					title: 'Mensaje',
					text: 'Se guardó la información correctamente',
					type: 'success',
				});

			},
			error: function(){
				new PNotify({
					title: 'Atención',
					text: 'Buzon ya existe en base de datos',
					type: 'error',
				});
			}
			});
}
function eliminar_buzon(id){

	var info ="id="+id
		$.ajax({
			url:'<?php echo base_url(); ?>'+'buzones/eliminar_buzon/',
			dataType:'json',
			type: 'POST',
			data:info,
			success: function(respuesta){

		
		mostrar_buzones();
			new PNotify({
					title: 'Mensaje',
					text: 'Se guardó la información correctamente',
					type: 'success',
				});

		
			},
			error: function(){
				new PNotify({
					title: 'Atención',
					text: 'No existen buzones con los parametros ingresados',
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

