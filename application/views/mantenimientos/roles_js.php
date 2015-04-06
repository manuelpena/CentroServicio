<script>
$( document ).ready(function() {

$( "#menu_id" ).change(function() {
  
	var menu_id = $("#menu_id").val();
	
	var info ="id="+menu_id
	
 		$.ajax({
			url:'<?php echo base_url(); ?>'+'roles/listado_paginas/',
			dataType:'json',
			type: 'POST',
			data: info,
			success: function(respuesta){
			
		var select = $("#pagina_id");
		select.empty();
		for (var i = 0; i < respuesta.length; i++) {
		
		select.append($("<option />").val(respuesta[i].id).text(respuesta[i].descripcion));
		
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
  
});
mostrar_roles();
cargar_menus();

});


function mostrar_roles(){


		$.ajax({
			url:'<?php echo base_url(); ?>'+'roles/listado_roles/',
			dataType:'json',
			type: 'POST',
			success: function(respuesta){
			
		var table = $("#tabla_roles tbody");
		table.empty();
		for (var i = 0; i < respuesta.length; i++) {
		
		table.append("<tr><td>"+respuesta[i].id+"</td><td>"+respuesta[i].detalle+"</td><td><a href='#' onclick='buscar_rol("
		+respuesta[i].id+")'><i class='fa fa-edit'></i></a> <a href='#' onclick='eliminar_rol("
		+respuesta[i].id+")'><i class='fa fa-trash-o'></i></a></td>"
		);
		}
		
			},
			error: function(){	
				new PNotify({
					title: 'Atención',
					text: 'No hay roles cargados con los parametros ingresados',
					type: 'error',
				});
			}
			});
}

function cargar_menus(){


		$.ajax({
			url:'<?php echo base_url(); ?>'+'roles/listado_menus/',
			dataType:'json',
			type: 'POST',
			success: function(respuesta){
			
		var select = $("#menu_id");
		for (var i = 0; i < respuesta.length; i++) {
		
		select.append($("<option />").val(respuesta[i].id).text(respuesta[i].descripcion));
		
		}
		
			},
			error: function(){
				new PNotify({
					title: 'Atención',
					text: 'No hay roles cargados con los parametros ingresados',
					type: 'error',
				});
			}
			});
}


function buscar_rol(id){

	var info ="id="+id
	$("#rol_id").val(id);
	$("#rol").val('');
		$.ajax({
			url:'<?php echo base_url(); ?>'+'roles/buscar_rol/',
			dataType:'json',
			type: 'POST',
			data:info,
			success: function(respuesta){
		
		for (var i = 0; i < respuesta.length; i++) {
		
	
		
		var table = $("#tabla_paginas tbody");
		table.empty();
		for (var i = 0; i < respuesta.length; i++) {
	$("#rol").val(respuesta[i].detalle);	
		table.append("<tr><td>"+respuesta[i].id+"</td><td>"+respuesta[i].menu+"</td><td>"+respuesta[i].pagina+"</td><td><a href='#' onclick='eliminar_pagina("
		+respuesta[i].id+")'><i class='fa fa-trash-o'></i></a></td>"
		);
		}
		}
		
			},
			error: function(){
		var table = $("#tabla_paginas tbody");
		table.empty();				
				new PNotify({
					title: 'Atención',
					text: 'No existen paginas con los parametros ingresados',
					type: 'error',
				});
			}
			});
}

function guardar_pagina(accion){
	
	var menu_id = $("#menu_id").val();
	var pagina_id = $("#pagina_id").val();
	var rol_id = $("#rol_id").val();
	
	if(menu_id==0){return;};
	
	var info ="id="+rol_id+"&menu_id="+menu_id+"&pagina_id="+pagina_id

	
	console.log(info);
	
		$.ajax({
			url:'<?php echo base_url(); ?>'+'roles/guardar_pagina/',
			dataType:'json',
			type: 'POST',
			data:info,
			success: function(respuesta){
			buscar_rol(rol_id);
			new PNotify({
					title: 'Mensaje',
					text: 'Se guardó la información correctamente',
					type: 'success',
				});

			},
			error: function(){
				new PNotify({
					title: 'Atención',
					text: 'Pagina ya existe en el rol seleccionado',
					type: 'error',
				});
			}
			});
}

function guardar_rol(accion){
	
	var rol = $("#rol").val();
	var rol_id = $("#rol_id").val();
	
	if(accion==1){
	var info ="id="+0+"&descripcion="+rol
	}else{
	var info ="id="+rol_id+"&descripcion="+rol
	}
	
	

	
	console.log(info);
	
		$.ajax({
			url:'<?php echo base_url(); ?>'+'roles/guardar_rol/',
			dataType:'json',
			type: 'POST',
			data:info,
			success: function(respuesta){

			mostrar_roles();
		var table = $("#tabla_paginas tbody");
		table.empty();					
			new PNotify({
					title: 'Mensaje',
					text: 'Se guardó la información correctamente',
					type: 'success',
				});

			},
			error: function(data){
			console.log(data)
				new PNotify({
					title: 'Atención',
					text: 'Ya existe la descripcion de Rol',
					type: 'error',
				});
			}
			});
}

function eliminar_pagina(id){

	var rol_id = $("#rol_id").val();

	var info ="pagina_id="+id+"&rol_id="+rol_id
	
	console.log(info)
		$.ajax({
			url:'<?php echo base_url(); ?>'+'roles/eliminar_pagina/',
			dataType:'json',
			type: 'POST',
			data:info,
			success: function(respuesta){

		
		buscar_rol(rol_id);
			new PNotify({
					title: 'Mensaje',
					text: 'Se guardó la información correctamente',
					type: 'success',
				});

		
			},
			error: function(){
				new PNotify({
					title: 'Atención',
					text: 'No existen roles con los parametros ingresados',
					type: 'error',
				});
			}
			});
}

function eliminar_rol(id){


	var info ="id="+id
	
	console.log(info)
		$.ajax({
			url:'<?php echo base_url(); ?>'+'roles/eliminar_rol/',
			dataType:'json',
			type: 'POST',
			data:info,
			success: function(respuesta){
				
			mostrar_roles();
			buscar_rol(0);
			new PNotify({
					title: 'Mensaje',
					text: 'Se guardó la información correctamente',
					type: 'success',
				});

		
			},
			error: function(){
				new PNotify({
					title: 'Atención',
					text: 'El rol que esta intentando eliminar ya esta siendo utilizado por un usuario',
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

