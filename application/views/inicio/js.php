	<script type="text/javascript">
	var campania = [];
	var pedidos = [];
	var consejeras = [];
	var gerentes = [];
	var buzones = [];	
$(function () {


		$.ajax({
			url:'<?php echo base_url(); ?>'+'inicio/buscar_datos/',
			dataType:'json',
			type: 'POST',
			async:false,
			success: function(respuesta){
		
		for (var i = 0; i < respuesta.length; i++) {
						campania.push(respuesta[i].campania);
						pedidos.push(parseInt(respuesta[i].pedidos));
						consejeras.push(parseInt(respuesta[i].consejeras));
						gerentes.push(parseInt(respuesta[i].gerentes));
						buzones.push(parseInt(respuesta[i].buzones));
		

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
console.log(consejeras)
    $('#container').highcharts({
	        chart: {
            type: 'column'
        },
        title: {

            text: 'Pedidos vs Solicitudes'
        },
        xAxis: {
            categories: campania,
        },
        yAxis: {
            title: {
                text: 'Pedidos'
            }
        },
        labels: {
            items: [{
                html: 'Pedidos ingresados por campaña',
                style: {
                    left: '50px',
                    top: '18px',
                    color: (Highcharts.theme && Highcharts.theme.textColor) || 'black'
                }
            }]
        },        plotOptions: {
            column: {
                stacking: 'normal',
                dataLabels: {
                    enabled: true,
                    color: (Highcharts.theme && Highcharts.theme.dataLabelsColor) || 'white',
                    style: {
                        textShadow: '0 0 3px black'
                    }
                }
            }
        },
        series: [ {
            name: 'Consejeras',
            data:  consejeras
        },{
            name: 'Gerentes',
            data:  gerentes
        }, {
            name: 'Buzones',
            data: buzones
        }, {
            type: 'spline',
            name: 'Pedidos',
            data: pedidos,
			opposite: true,
            marker: {
                lineWidth: 2,
                lineColor: Highcharts.getOptions().colors[3],
                fillColor: 'white'
            }
        }]
    });
	
	
});


		</script>


		<script src="<?php echo base_url(); ?>assets/vendor/highcharts/modules/exporting.js"></script>	
		<script src="<?php echo base_url(); ?>assets/vendor/highcharts/highcharts.js"></script>	
		<script src="<?php echo base_url(); ?>assets/vendor/highcharts/themes/Sand-signika.js"></script>	
		</body>
</html>