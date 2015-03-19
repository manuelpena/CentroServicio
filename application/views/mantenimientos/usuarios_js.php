<script>
$( document ).ready(function() {

mostrar_usuarios();
cargar_roles();

});

function mostrar_usuarios(){


		$.ajax({
			url:'<?php echo base_url(); ?>'+'usuarios/listado_usuarios/',
			dataType:'json',
			type: 'POST',
			success: function(respuesta){
		var table = $("#tabla_usuarios tbody");
		table.empty();
		for (var i = 0; i < respuesta.length; i++) {
		
		table.append("<tr><td>"+respuesta[i].id+"</td><td>"+respuesta[i].descripcion+"</td><td>"+respuesta[i].detalle+"</td><td>"+respuesta[i].estado+"</td><td><a href='#' onclick='buscar_usuario("
		+respuesta[i].id+")'><i class='fa fa-edit'></i></a></td>"
		);
		}
		
			},
			error: function(error){
			console.log(error)
				new PNotify({
					title: 'Atención',
					text: 'No hay usuarios cargados con los parametros ingresados',
					type: 'error',
				});
			}
			});
}


function cargar_roles(){

		$.ajax({
			url:'<?php echo base_url(); ?>'+'usuarios/listado_roles/',
			dataType:'json',
			type: 'POST',
			success: function(respuesta){
		var select = $("#rol");
		select.empty();
		for (var i = 0; i < respuesta.length; i++) {
		
		select.append($("<option />").val(respuesta[i].id).text(respuesta[i].detalle));
		
		}			
			},
			error: function(){
				new PNotify({
					title: 'Atención',
					text: 'No hay usuarios cargados con los parametros ingresados',
					type: 'error',
				});
			}
			});
}


function buscar_usuario(id){

	var info ="id="+id
		$.ajax({
			url:'<?php echo base_url(); ?>'+'usuarios/buscar_usuario/',
			dataType:'json',
			type: 'POST',
			data:info,
			success: function(respuesta){
		for (var i = 0; i < respuesta.length; i++) {
		$("#usuario_id").val(respuesta[i].id)
		$("#usuario").val(respuesta[i].usuario)		
		$("#descripcion_usuario").val(respuesta[i].descripcion)
		$("#contrasenia").val(respuesta[i].password)
		$("#estado").val(respuesta[i].estado)
		$("#rol").val(respuesta[i].rol_id)
		

		}
		
			},
			error: function(){
				new PNotify({
					title: 'Atención',
					text: 'No existen usuarios con los parametros ingresados',
					type: 'error',
				});
			}
			});
}

function guardar_usuario(accion){
	
	var id = $("#usuario_id").val();
	var usuario = $("#usuario").val();
	var descripcion_usuario = $("#descripcion_usuario").val();
	var contrasenia = $("#contrasenia").val();
	var estado = $("#estado").val();
	var rol = $("#rol").val();

	if(accion==1){
	var info ="id="+0+"&usuario="+usuario+"&descripcion_usuario="+descripcion_usuario+"&rol="+rol+"&estado="+estado+"&contrasenia="+contrasenia
	}else{
	var info ="id="+id+"&usuario="+usuario+"&descripcion_usuario="+descripcion_usuario+"&rol="+rol+"&estado="+estado
	}
	console.log(info)
		$.ajax({
			url:'<?php echo base_url(); ?>'+'usuarios/guardar_usuario/',
			dataType:'json',
			type: 'POST',
			data:info,
			success: function(respuesta){

		mostrar_usuarios();
		buscar_usuario(id);
			new PNotify({
					title: 'Mensaje',
					text: 'Se guardó la información correctamente',
					type: 'success',
				});

			},
			error: function(respuesta){
						console.log(respuesta)
				new PNotify({
					title: 'Atención',
					text: 'Usuario ya existe en base de datos',
					type: 'error',
				});
			}
			});
}

function cambiar_contrasenia(){
	var contrasenia = $("#contrasenia").val();
	var id = $("#usuario_id").val();
	
	var info ="id="+id+"&contrasenia="+contrasenia
	console.log(info)
		$.ajax({
			url:'<?php echo base_url(); ?>'+'usuarios/cambiar_contrasenia/',
			dataType:'json',
			type: 'POST',
			data:info,
			success: function(respuesta){

			new PNotify({
					title: 'Mensaje',
					text: 'Se guardó la información correctamente',
					type: 'success',
				});

		
			},
			error: function(error){
			console.log(error)
				new PNotify({
					title: 'Atención',
					text: 'No usuarios adicionales con los parametros ingresados',
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

