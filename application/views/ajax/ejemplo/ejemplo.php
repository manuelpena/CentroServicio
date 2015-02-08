<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/tabla_empleados_ejemplo.css" />
	<script src="http://www.position-relative.net/creation/formValidator/js/languages/jquery.validationEngine-es.js" type="text/javascript" charset="utf-8">
	</script>
	<script src="http://www.position-relative.net/creation/formValidator/js/jquery.validationEngine.js" type="text/javascript" charset="utf-8">
	</script>
		<link rel="stylesheet" href="http://www.position-relative.net/creation/formValidator/css/validationEngine.jquery.css" type="text/css"/>
<script>
$( document ).ready(function() {
mostrar_empleados()
jQuery("#FormEmpleado").validationEngine();
});

function mostrar_empleados(){
   $("#tabla_empleados > tbody").empty();
			$.ajax({
			url:'<?php echo base_url(); ?>'+'ajax/mostrar_empleados',
			dataType:'json',
			type: 'POST',
			data:'mostrar_empleado',
			success: function(msj){		
			  var tr;
			for (var i = 0; i < msj.length; i++) {
			tr = $('<tr/>');
			tr.append('<td class="text-left">' + msj[i].id_empleado + '</td>');
			tr.append('<td class="text-left">' + msj[i].nombres + '</td>');
			tr.append('<td class="text-left">' + msj[i].apellidos + '</td>');
			tr.append('<td class="text-left">' + msj[i].salario + '</td>');
			tr.append('<td class="text-left"><a class="icon-edit" style=" cursor: pointer;"><a onclick="mostrar_empleado('+msj[i].id_empleado+')">Editar</a></td></a>');
			$('#tabla_empleados').append(tr);
			}
				//$('#tabla_usuarios').html(msj);
			}
			});


}

		function mostrar_empleado(id){

			$.ajax({
			url:'<?php echo base_url(); ?>'+'ajax/mostrar_empleados_id/'+id,
			dataType:'json',
			type: 'POST',
			data:id,
			success: function(msj){		
		for (var i = 0; i < msj.length; i++) {
		$('#id_empleado').val(msj[i].id_empleado)
		$('#nombres').val(msj[i].nombres)
		$('#apellidos').val(msj[i].apellidos)
		$('#salario').val(msj[i].salario)
		}
		$('#nombres').focus()
			}
			});

		}	

		function modificar_empleado(){

			$.ajax({
			url:'<?php echo base_url(); ?>'+'ajax/modificar_empleado/',
			type: 'POST',
			data:$('#FormEmpleado').serialize(),
			success: function(msj){	
			if(msj =='Modificado con Exito'){
			$('#mensaje_exito').show()
			$('#mensaje_exito').html(msj)
			$('#mensaje_error').hide()
			$('#FormEmpleado')[0].reset();
						mostrar_empleados();
			}else {
			$('#mensaje_error').show()
			$('#mensaje_error').html(msj)
			$('#mensaje_exito').hide()			}
			
			}

			});

		}
		
		function nuevo_empelado(){
if(jQuery('#FormEmpleado').validationEngine('validate')){
			$.ajax({
			url:'<?php echo base_url(); ?>'+'ajax/guardar_empleado/',
			type: 'POST',
			data:$('#FormEmpleado').serialize(),
			success: function(msj){		
			if(msj =='Guardado con Exito'){
			$('#mensaje_exito').show()
			$('#mensaje_exito').html(msj)
			$('#mensaje_error').hide()
			$('#FormEmpleado')[0].reset();
						mostrar_empleados();
			}else {
			$('#mensaje_error').show()
			$('#mensaje_error').html(msj)
			$('#mensaje_exito').hide()			}
			
			}
			});
}
		}		
		
		function eliminar_empleado(){
		var id = $('#id_empleado').val();
		var info = "id="+id;	
			$.ajax({
			url:'<?php echo base_url(); ?>'+'ajax/eliminar_empleado/',
			type: 'POST',
			data:info,
			success: function(msj){		
			if(msj =='Eliminado con Exito'){
			$('#mensaje_exito').show()
			$('#mensaje_exito').html(msj)
			$('#mensaje_error').hide()
			$('#FormEmpleado')[0].reset();
						mostrar_empleados();
			}else {
			$('#mensaje_error').show()
			$('#mensaje_error').html(msj)
			$('#mensaje_exito').hide()			}
			
			}
			});

		}		
</script>
<section id="content">
        <div class="container">
                <!--/ .page-header-->
                <div class="eight columns row">
				<h6 class="section-title">Datos del Empleado</h6>
				<form id="FormEmpleado">				
							<table>
							<tr>
							<td>ID</td>
							<td><input type="text" id="id_empleado" name="id_empleado"  " ></td>
							</tr>			
							<tr>
							<td>Nombres</td>
							<td><input type="text" id="nombres" name="nombres" class="validate[required]"></td>
							</tr>
							<tr>
							<td>Apellidos</td>
							<td><input type="text" id="apellidos" name="apellidos"></td>
							</tr>
							<tr><td>Salario</td>
							<td><input type="text" id="salario" name="salario" class="validate[required,custom[integer],max[5000]]"></td>
							</tr>
							<tr>				
							<td>
							<a class="button small turquoise" href="#" onclick="nuevo_empelado()">Nuevo</a>
							</td>
							<td><a class="button small green" href="#" onclick="modificar_empleado()">Modificar</a></td>							
							</tr>
							<tr>
							<td colspan="2"><a class="button small red" href="#" onclick="eliminar_empleado()">Eliminar</a></td>
							</tr>
							</table>
				<form>	
				<div class="one-third column">
<p id="mensaje_error" class="error" style="display:none"></p>			
<p id="mensaje_exito" class="success" style="display:none"></p>			
<div>
                </div>
                <div class="clear">
                </div>
                <div class="eight columns row">
                        <div class="table-title">
                                <h3>
                                        Tabla Empleado
                                </h3>
                        </div>
                        <table id="tabla_empleados">
                                <thead>
                                        <tr>
                                                <th class="text-left">
                                                        ID
                                                </th>
                                                <th class="text-left">
                                                        Nombres
                                                </th>
                                                <th class="text-left">
                                                        Apellidos
                                                </th>
                                                <th class="text-left">
                                                        Salario
                                                </th>
                                                <th class="text-left">
                                                     Opciones
                                                </th>												
                                        </tr>
                                </thead>
                                <tbody class="table-hover">

                                </tbody>
                        </table>
                </div>
                <!--/ .columns -->
        </div>
        <!--/ .container-->
</section>
<!--/ #content-->