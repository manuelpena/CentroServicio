<script>
			function mostrar_dias(){
		
				   $.ajax({
				type : "POST",
				url:'<?php echo base_url(); ?>'+'diaslaborales/dias_laborales/',
				dataType : "json",
				success : function (response) {
				for(var i = 0; i < response.length; i++){ 
				var json = '{"title": "Dia Laboral","start":"'+response[i].fecha+'"}'

				obj = JSON.parse(json);

				$('#calendar').fullCalendar('renderEvent', obj, true);

				}

				}

				});
			}
			
	function remover_dia(fecha){
	


	   $.ajax({
            type: "POST",
			url:'<?php echo base_url(); ?>'+'diaslaborales/remover_fecha/',
            data: "fecha="+fecha,
            success: function (html) {

            }
        });
	}
	
		function guardar_dia(fecha){

	   $.ajax({
            type: "POST",
			url:'<?php echo base_url(); ?>'+'diaslaborales/guardar_fecha/',
            data: "fecha="+fecha,
            success: function (html) {
   
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

