<script>
$( document ).ready(function() {




});


function buscar_bodegaje(){

	var desde = $('#desde').val();
	var hasta = $('#hasta').val();
	var usuario = [];
	var bodegaje = [];
	var consejeras = [];
	var gerentes = [];
	var info = "desde="+desde+"&hasta="+hasta
	
		$.ajax({
			url:'<?php echo base_url(); ?>'+'cobrobodegaje/buscar_bodegaje/',
			dataType:'json',
			async:false,
			type: 'POST',
			data:info,
			success: function(respuesta){

		var table = $("#tabla_detalle tbody");
		table.empty();
		var table = $("#tabla_resultados tbody");
		table.empty();
		for (var i = 0; i < respuesta.length; i++) {
		
		usuario.push(respuesta[i].descripcion);
		bodegaje.push(parseInt(respuesta[i].consejeras+respuesta[i].gerentes)/10);
		consejeras.push(parseInt(respuesta[i].consejeras));
		gerentes.push(parseInt(respuesta[i].gerentes));
	
		
		table.append("<tr><td>"+respuesta[i].id+"</td>"+"<td>"+respuesta[i].descripcion+"</td><td>"+respuesta[i].exoneracion
		+"</td><td>"+respuesta[i].consejeras+"</td><td>"
		+respuesta[i].gerentes+"</td><td>"+"%</td><td class='actions'><a href='#' onclick='detalle_cobro("
		+respuesta[i].id+")'><i class='fa fa-search'></i></a> </td>"
		);
		
		}
		grafico(usuario,bodegaje,consejeras,gerentes);
			},
			error: function(respuesta){
			console.log(respuesta)
		var table = $("#tabla_resultados tbody");
		table.empty();	
				var table = $("#tabla_detalle tbody");
		table.empty();
				new PNotify({
					title: 'Atención',
					text: 'No existe informacion con los parametros ingresados',
					type: 'error',
				});
			}
			});
}

function detalle_cobro(id){


	var desde = $('#desde').val();
	var hasta = $('#hasta').val();
	
	var info = "desde="+desde+"&hasta="+hasta+"&id="+id

$.ajax({
			url:'<?php echo base_url(); ?>'+'cobrobodegaje/detalle_bodegaje/',
			dataType:'json',
			async:false,
			type: 'POST',
			data:info,
			success: function(respuesta){

		var table = $("#tabla_detalle tbody");
		table.empty();
		for (var i = 0; i < respuesta.length; i++) {
		
	
		table.append("<tr><td>"+respuesta[i].fecha+"</td>"+"<td>"+respuesta[i].codigo+"</td><td>"+respuesta[i].nombres
		+"</td><td>"+respuesta[i].bodegaje+"</td>"
		);
		
		}
			},
			error: function(respuesta){
			console.log(respuesta)
		var table = $("#tabla_resultados tbody");
		table.empty();			
				new PNotify({
					title: 'Atención',
					text: 'No existe informacion con los parametros ingresados',
					type: 'error',
				});
			}
			});
			
			
}


function grafico(usuario,bodegaje,consejeras,gerentes){
console.log(bodegaje)
    $('#container').highcharts({
	        chart: {
            type: 'column'
        },
        title: {

            text: 'Cobro de bodegaje'
        },
        xAxis: {
            categories: usuario,
        },
        yAxis: {
            title: {
                text: 'Bodegaje ($)'
            }
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
        series: [{
            name: 'Consejeras',
            data:  consejeras
        },{
            name: 'Gerentes',
            data:  gerentes
        }]
    });
}


</script>


		<script src="<?php echo base_url(); ?>assets/vendor/highcharts/modules/exporting.js"></script>	
		<script src="<?php echo base_url(); ?>assets/vendor/highcharts/highcharts.js"></script>	
		<script src="<?php echo base_url(); ?>assets/vendor/highcharts/themes/Sand-signika.js"></script>	

		
		</body>
</html>

