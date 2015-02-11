		<script>
		$(function() {
		

	/*
$('#solicitudes_tbl').dataTable({
            "bProcessing": true,
            "bServerSide": true,
            "sAjaxSource": '<?php echo base_url(); ?>'+'solicitudesconsejeras/datatable',
            "iDisplayStart ": 20,
            "fnInitComplete": function () {
                //oTable.fnAdjustColumnSizing();
            },
            'fnServerData': function (sSource, aoData, fnCallback) {
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
*/

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
		
		}
		$('#nombres').focus();
		
			}
			});

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
	
		</script>
		
		<script src="<?php echo base_url(); ?>assets/javascripts/tables/examples.datatables.default.js"></script>
		<script src="<?php echo base_url(); ?>assets/javascripts/ui-elements/examples.modals.js"></script>
		<!-- Examples -->
		<script src="<?php echo base_url(); ?>assets/javascripts/ui-elements/examples.notifications.js"></script>		
		</body>
</html>