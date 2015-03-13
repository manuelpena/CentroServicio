		<script>
$( document ).ready(function() {

$( "#busqueda" ).click(function() {

  var anio = $('#anio').val();
  var campania = $('#campania').val();

  if(anio >0){
  var info = "anio="+anio+"&campania="+campania
	//Cuadro de Adicionales
		$.ajax({
			url:'<?php echo base_url(); ?>'+'cuadrepilotos/obtener_adicionales/',
			dataType:'json',
			type: 'POST',
			data:info,
			success: function(respuesta){		
			
		pilotos_ingresados();
		$('#cuadre_pilotos')[0].reset();
		var table = $("#tabla_adicionales tbody");
		table.empty();
		for (var i = 0; i < respuesta.length; i++) {
		table.append("<tr><td>"+respuesta[i].id+"</td><td>"+respuesta[i].descripcion
		+"</td>"+"<td><input class='form-control input-block' type='text'/></td>"
		);

		}
		
			},
			error: function(error){
		var table = $("#tabla_adicionales tbody");
		table.empty();
				new PNotify({
					title: 'Atención',
					text: 'No existe informacion con los parametros ingresados',
					type: 'error',
				});
			}
			});
			
  }
  
});

});

function pilotos_ingresados(){

  var anio = $('#anio').val();
  var campania = $('#campania').val();
  var zona = $('#zona').val();
  
  var info = "anio="+anio+"&campania="+campania+"&zona="+zona
	console.log(info)
	//Cuadro de Adicionales
		$.ajax({
			url:'<?php echo base_url(); ?>'+'cuadrepilotos/pilotos_ingresados/',
			dataType:'json',
			type: 'POST',
			data:info,
			success: function(respuesta){		

		var table = $("#tabla_pilotos tbody");
		table.empty();
		for (var i = 0; i < respuesta.length; i++) {
		console.log(respuesta[i].piloto)
		table.append("<tr><td>"+respuesta[i].piloto+"</td><td>"+respuesta[i].pedidos
		+"</td><td>"+respuesta[i].cajas+"</td><td>"+respuesta[i].cantidad+"</td><td>"+respuesta[i].agencia+"</td><td><a href='#' onclick='detalle_piloto("
		+respuesta[i].id+")'><i class='fa fa-search'></i></a> <a href='#' onclick='eliminar_detalle("
		+respuesta[i].id+")'><i class='fa fa-trash-o'></i></a></td>"
		);

		}
		
			},
			error: function(error){
		var table = $("#tabla_pilotos tbody");
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


function guardar_piloto(){

var anio =$("#anio").val();
var campania =$("#campania").val();
var zona =$("#zona").val();
var piloto =$("#piloto").val();
var agencia =$("#agencia").val();
var fecha =$("#fecha").val();
var pedidos =$("#pedidos").val();
var cajas =$("#cajas").val();
var entrada =$("#entrada").val();
var salida =$("#salida").val();
var observaciones =$("#observaciones").val();



var info ="anio="+anio+"&campania="+campania+"&zona="+zona+"&piloto="+piloto+"&agencia="+agencia+"&fecha="+fecha+"&pedidos="+pedidos+"&cajas="+cajas+"&entrada="+entrada+"&salida="+salida+"&observaciones="+observaciones
console.log(info)

		$.ajax({
			url:'<?php echo base_url(); ?>'+'cuadrepilotos/guardar_piloto/',
			type: 'POST',
			data:info,
			success: function(respuesta){		
			
			guardar_adicionales(respuesta)
		
			},
			error: function(error){

				new PNotify({
					title: 'Atención',
					text: 'Hubo un error al guardar la informacion',
					type: 'error',
				});
			}
			});
}

function guardar_adicionales(id){

        var table = document.getElementById('tabla_adicionales');

		
 for (var r = 1, n = table.rows.length; r < n; r++) {

            for (var c = 0, m = table.rows[r].cells.length; c < m; c++) {
			
                if(c==0){
				adicional = table.rows[r].cells[c].innerHTML;
				}else if(c==2){				
				cantidad = table.rows[r].cells[c].getElementsByTagName("input")[0].value;
				}

            }
			var info = "id="+id+"&adicional="+adicional+"&cantidad="+cantidad
	
	$.ajax({
			url:'<?php echo base_url(); ?>'+'cuadrepilotos/guardar_adicionales/',
			type: 'POST',
			data:info,
			success: function(respuesta){		
			
		$('#cuadre_pilotos')[0].reset();
		var table = $("#tabla_adicionales tbody");
		table.empty();
		 pilotos_ingresados();
			},
			error: function(error){

				new PNotify({
					title: 'Atención',
					text: 'Hubo un error al guardar la informacion',
					type: 'error',
				});
			}
			});
        }

}


function eliminar_detalle(id){
	
	var info = "id="+id
	
	$.ajax({
			url:'<?php echo base_url(); ?>'+'cuadrepilotos/eliminar_detalle/',
			type: 'POST',
			data:info,
			success: function(respuesta){					
				new PNotify({
					title: 'Mensaje',
					text: 'Detalle eliminado con exito',
					type: 'success',
				});		
				pilotos_ingresados()
			},
			error: function(error){

				new PNotify({
					title: 'Atención',
					text: 'Hubo un error al guardar la informacion',
					type: 'error',
				});
			}
			});
			
}

function detalle_piloto(id){

	var info = "id="+id

	$.ajax({
			url:'<?php echo base_url(); ?>'+'cuadrepilotos/detalle_piloto_cuadre/',
			dataType:'json',
			type: 'POST',
			data:info,
			success: function(respuesta){		
			for (var i = 0; i < respuesta.length; i++) {		
		$('#cuadre_pilotos')[0].reset();
		$("#piloto").val(respuesta[i].piloto);
		$("#agencia").val(respuesta[i].agencia_id);
		$("#fecha").val(respuesta[i].fecha_cuadre);
		$("#pedidos").val(respuesta[i].pedidos);
		$("#cajas").val(respuesta[i].cajas);
		$("#entrada").val(respuesta[i].entrada);
		$("#salida").val(respuesta[i].salida);
		$("#observaciones").val(respuesta[i].observaciones);
		
		}		
		},
			error: function(error){

				new PNotify({
					title: 'Atención',
					text: 'Hubo un error al obtener la informacion',
					type: 'error',
				});
			}
			});

	
	$.ajax({
			url:'<?php echo base_url(); ?>'+'cuadrepilotos/detalle_piloto_adicionales/',
			dataType:'json',
			type: 'POST',
			data:info,
			success: function(respuesta){		
			
			var table = $("#tabla_adicionales tbody");
			table.empty();
			for (var i = 0; i < respuesta.length; i++) {
			table.append("<tr><td>"+respuesta[i].id+"</td><td>"+respuesta[i].descripcion
			+"</td>"+"<td>"+respuesta[i].cantidad+"</td>"
			);

			}	
			},
			error: function(error){
			var table = $("#tabla_adicionales tbody");
			table.empty();
				new PNotify({
					title: 'Atención',
					text: 'Hubo un error al obtener la informacion',
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