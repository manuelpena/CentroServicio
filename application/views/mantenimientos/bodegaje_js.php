<script>
$( document ).ready(function() {

$( "#tipo_pedido" ).change(function() {
	$("#dia").val('');
	$("#cobro").val('');
	$("#bodegaje_id").val('');
});

$( "#tipo_solicitud" ).change(function() {
	$("#dia").val('');
	$("#cobro").val('');
	$("#bodegaje_id").val('');
});

});

function mostrar_bodegaje(){

	var tipo_solicitud = $("#tipo_solicitud").val();
	var tipo_pedido = $("#tipo_pedido").val();
	
	var info = "tipo_pedido="+tipo_pedido+"&tipo_solicitud="+tipo_solicitud
	
	console.log(info)
		$.ajax({
			url:'<?php echo base_url(); ?>'+'bodegaje/listado_bodegaje/',
			dataType:'json',
			type: 'POST',			
			data:info,
			success: function(respuesta){
		var table = $("#tabla_bodegaje tbody");
		table.empty();
		for (var i = 0; i < respuesta.length; i++) {
		
		table.append("<tr><td>"+respuesta[i].id+"</td><td>"+respuesta[i].tipo_pedido+"</td><td>"+respuesta[i].tipo_solicitud+"</td><td>"+respuesta[i].dia+"</td><td>"+respuesta[i].cobro+"</td><td><a href='#' onclick='buscar_bodegaje("
		+respuesta[i].id+")'><i class='fa fa-edit'></i></a> <a href='#' onclick='eliminar_bodegaje("
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

function buscar_bodegaje(id){

	var info ="id="+id
		$.ajax({
			url:'<?php echo base_url(); ?>'+'bodegaje/buscar_bodegaje/',
			dataType:'json',
			type: 'POST',
			data:info,
			success: function(respuesta){
		for (var i = 0; i < respuesta.length; i++) {

		$("#bodegaje_id").val(respuesta[i].id)		
		$("#dia").val(respuesta[i].dia)
		$("#cobro").val(respuesta[i].cobro)


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


function guardar_bodegaje(accion){
	

	var tipo_solicitud = $("#tipo_solicitud").val();
	var tipo_pedido = $("#tipo_pedido").val();
	var dia = $("#dia").val();
	var cobro = $("#cobro").val();
	var bodegaje_id = $("#bodegaje_id").val();
	
	if(accion==1){
	var info ="id="+0+"&tipo_solicitud="+tipo_solicitud+"&tipo_pedido="+tipo_pedido+"&cobro="+cobro+"&dia="+dia
	}else{
	var info ="id="+bodegaje_id+"&cobro="+cobro+"&tipo_solicitud="+0+"&tipo_pedido="+0+"&dia="+0
	}
	
	if(isNaN(cobro)==true){return;}
	console.log(info)
	
		$.ajax({
			url:'<?php echo base_url(); ?>'+'bodegaje/guardar_bodegaje/',
			dataType:'json',
			type: 'POST',
			data:info,
			success: function(respuesta){
		mostrar_bodegaje();
			new PNotify({
					title: 'Mensaje',
					text: 'Se guardó la información correctamente',
					type: 'success',
				});

			},
			error: function(error){
						console.log(error)
		mostrar_bodegaje();			
				new PNotify({
					title: 'Atención',
					text: 'Configuracion ya existe en base de datos',
					type: 'error',
				});
			}
			});
}
function eliminar_bodegaje(id){

	var info ="id="+id
		$.ajax({
			url:'<?php echo base_url(); ?>'+'bodegaje/eliminar_bodegaje/',
			dataType:'json',
			type: 'POST',
			data:info,
			success: function(respuesta){

		
		mostrar_bodegaje();
			new PNotify({
					title: 'Mensaje',
					text: 'Se guardó la información correctamente',
					type: 'success',
				});

		
			},
			error: function(){

				new PNotify({
					title: 'Atención',
					text: 'No existe configuracion con los parametros ingresados',
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
		</body>
</html>

