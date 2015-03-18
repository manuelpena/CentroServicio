<script>
$( document ).ready(function() {



});

function mostrar_adicionales(){

var anio = $("#anio").val();
var campania = $("#campania").val();

var info = "anio="+anio+"&campania="+campania

		$.ajax({
			url:'<?php echo base_url(); ?>'+'adicionales/listado_adicionales/',
			dataType:'json',
			type: 'POST',
			data:info,
			success: function(respuesta){
		var table = $("#tabla_adicionales tbody");
		table.empty();
		for (var i = 0; i < respuesta.length; i++) {
		
		table.append("<tr><td>"+respuesta[i].id+"</td><td>"+respuesta[i].anio+"</td><td>"+respuesta[i].campania+"</td><td>"+respuesta[i].descripcion+"</td><td><a href='#' onclick='buscar_adicional("
		+respuesta[i].id+")'><i class='fa fa-edit'></i></a> <a href='#' onclick='eliminar_adicional("
		+respuesta[i].id+")'><i class='fa fa-trash-o'></i></a></td>"
		);
		}
		
			},
			error: function(){
				new PNotify({
					title: 'Atención',
					text: 'No hay adicionales cargados con los parametros ingresados',
					type: 'error',
				});
			}
			});
}


function buscar_adicional(id){

	var info ="id="+id
		$.ajax({
			url:'<?php echo base_url(); ?>'+'adicionales/buscar_adicional/',
			dataType:'json',
			type: 'POST',
			data:info,
			success: function(respuesta){
		for (var i = 0; i < respuesta.length; i++) {
		
		$("#adicional").val(respuesta[i].descripcion)
		$("#adicional_id").val(respuesta[i].id)

		}
		
			},
			error: function(){
				new PNotify({
					title: 'Atención',
					text: 'No existen adicionales con los parametros ingresados',
					type: 'error',
				});
			}
			});
}

function guardar_adicional(accion){
	
	var descripcion = $("#adicional").val();
	var adicional_id = $("#adicional_id").val();
	var anio = $("#anio").val();
	var campania = $("#campania").val();

	if(accion==1){
	var info ="id="+0+"&descripcion="+descripcion+"&anio="+anio+"&campania="+campania
	}else{
	var info ="id="+adicional_id+"&descripcion="+descripcion+"&anio="+anio+"&campania="+campania
	}
	console.log(info)
		$.ajax({
			url:'<?php echo base_url(); ?>'+'adicionales/guardar_adicional/',
			dataType:'json',
			type: 'POST',
			data:info,
			success: function(respuesta){
		mostrar_adicionales();
			new PNotify({
					title: 'Mensaje',
					text: 'Se guardó la información correctamente',
					type: 'success',
				});

			},
			error: function(){
				new PNotify({
					title: 'Atención',
					text: 'Adicional ya existe en base de datos',
					type: 'error',
				});
			}
			});
}

function eliminar_adicional(id){

	var info ="id="+id
		$.ajax({
			url:'<?php echo base_url(); ?>'+'adicionales/eliminar_adicional/',
			dataType:'json',
			type: 'POST',
			data:info,
			success: function(respuesta){

		
		mostrar_adicionales();
			new PNotify({
					title: 'Mensaje',
					text: 'Se guardó la información correctamente',
					type: 'success',
				});

		
			},
			error: function(){
				new PNotify({
					title: 'Atención',
					text: 'No existen adicionales con los parametros ingresados',
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

