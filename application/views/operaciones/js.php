		<script>
		$(function() {


	$('#solicitudes_tbl').dataTable({
			bProcessing: true,
			bJQueryUI: true,
			sAjaxSource: '<?php echo base_url(); ?>'+'solicitudesconsejeras/datatable',           
            bServerSide: true,
			fnServerData: function (sSource, aoData, fnCallback) {
                $.ajax
                ({
                    'dataType': 'json',
                    'type': 'POST',
                    'url': sSource,
                    'data': aoData,
                    'success': fnCallback
                });
            }
		});


		$('#solicitudes_buzones_tbl').dataTable({
			bProcessing: true,
			bJQueryUI: true,
			sAjaxSource: '<?php echo base_url(); ?>'+'pedidospendientes/datatable_buzones',           
            bServerSide: true,
			fnServerData: function (sSource, aoData, fnCallback) {
                $.ajax
                ({
                    'dataType': 'json',
                    'type': 'POST',
                    'url': sSource,
                    'data': aoData,
                    'success': fnCallback
                });
            }
		});

		$('#solicitudes_consejeras_tbl').dataTable({
			bProcessing: true,
			bJQueryUI: true,
			sAjaxSource: '<?php echo base_url(); ?>'+'pedidospendientes/datatable_consejeras',           
            bServerSide: true,
			fnServerData: function (sSource, aoData, fnCallback) {
                $.ajax
                ({
                    'dataType': 'json',
                    'type': 'POST',
                    'url': sSource,
                    'data': aoData,
                    'success': fnCallback
                });
            }
		});

	$('#solicitudes_despachadas_tbl').dataTable({
			bProcessing: true,
			bJQueryUI: true,
			sAjaxSource: '<?php echo base_url(); ?>'+'pedidospendientes/datatable_despachadas',           
            bServerSide: true,
			fnServerData: function (sSource, aoData, fnCallback) {
                $.ajax
                ({
                    'dataType': 'json',
                    'type': 'POST',
                    'url': sSource,
                    'data': aoData,
                    'success': fnCallback
                });
            }
		});

		
		
		
		/*		
		$('#checkboxExample').click(function(){
        $('#BotonModal').trigger('click');
          });
		  */
	  $('#codigo').change(function(){
	  
	var codigo = $( this ).val();
			$.ajax({
			url:'<?php echo base_url(); ?>'+'solicitudesconsejeras/datos_consejera/'+codigo,
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
		$('#cajas').val(respuesta[i].cajas)
		$('#comentarios').val(respuesta[i].comentarios)
		$('#cod').val(respuesta[i].cod)
		$('#pod').val(respuesta[i].pod)
		calculo_bodegaje(1,respuesta[i].pedido_id)
		}
		$('#nombres').focus();
		
			},
			error: function(){
				new PNotify({
					title: 'Atención',
					text: 'Codigo de consejera no existe, \o tiene ya solicitud en proceso!',
					type: 'error',
				});
			}
			});

          });	
		  
		  

		  $('#autorizacion').change(function(){
		
		var autorizacion = parseFloat($(this).val()).toFixed(2)
		var COD = parseFloat($('#cod').val()).toFixed(2)

		total = COD-autorizacion;		
		
		$('#total_pagar').val(total)

          });
		
		$('#despachar').click(function(){
		
    			$.ajax({
			url:'<?php echo base_url(); ?>'+'solicitudesconsejeras/guardar_solicitud/',
			type: 'POST',
			data:$('#form_solicitudes').serialize(),
			success: function(msj){		
			if(msj =='Guardado con Exito'){				
				new PNotify({
					title: 'Guardado',
					text: 'Solicitud Enviada \con Exito!',
					type: 'success',
					icon: 'fa  fa-save'
				});
				
			$('#form_solicitudes')[0].reset();
			$('#solicitudes_tbl').api().ajax.reload();
			}else {
			$('#mensaje_error').show()
			$('#mensaje_error').html(msj)
			$('#mensaje_exito').hide()			}
			
			}
			});  
	  
          });
		  	  
		  
		  
		});
		
		function cancelar_solicitud(id){
		
		  if (confirm("¿Desea Eliminar la Solicitud?") == true) {
       			$.ajax({
			url:'<?php echo base_url(); ?>'+'solicitudesconsejeras/cancelar_solicitud/'+id,
			type: 'POST',
			data:id,
			success: function(respuesta){
		
					alert(respuesta)
					location.reload();
			}
			});
	   
   
			} else {
			}		
		}

		function despachar(id){
		
       			$.ajax({
			url:'<?php echo base_url(); ?>'+'pedidospendientes/despachar/'+id,
			type: 'POST',
			data:id,
			success: function(respuesta){
		
					alert(respuesta)
					location.reload();
			}
			});
	   
		}

		


		</script>
		
		<script src="<?php echo base_url(); ?>assets/javascripts/tables/examples.datatables.default.js"></script>
		<script src="<?php echo base_url(); ?>assets/javascripts/ui-elements/examples.modals.js"></script>
		<!-- Examples -->
		<script src="<?php echo base_url(); ?>assets/javascripts/ui-elements/examples.notifications.js"></script>		
		<script src="<?php echo base_url(); ?>assets/javascripts/tables/examples.datatables.editable.js"></script>	

		</body>
</html>