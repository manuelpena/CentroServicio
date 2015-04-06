<script>
$( document ).ready(function() {

$( "#opcion" ).change(function() {

	var opcion = $("#opcion").val();
	
	var info =  "opcion="+opcion
	if(opcion=='Pais'){
	var select = $("#filtro");
	select.empty();
	select.append($("<option />").val('Pais').text('Pais'));
	return;
	
	}
	console.log(info)
		$.ajax({
			url:'<?php echo base_url(); ?>'+'eficiencias/listado_filtros/',
			dataType:'json',
			type: 'POST',
			data:info,
			success: function(respuesta){
	
		var select = $("#filtro");
		select.empty();
		for (var i = 0; i < respuesta.length; i++) {
		
		select.append($("<option />").val(respuesta[i].descripcion).text(respuesta[i].descripcion));
		
		}
		
			},
			error: function(respuesta){
			console.log(respuesta)
				new PNotify({
					title: 'Atención',
					text: 'No hay zonas cargadas con los parametros ingresados',
					type: 'error',
				});
			}
			});
});



});


function buscar_eficiencias(){

	var campania = [];
	var eficiencia = [];	
	var descripcion = [];	
	var anio   = $("#anio").val();
	var campania   = $("#campania").val();
	var filtro   = $("#filtro").val();
	var opcion = $("#opcion").val();
	
	var info =  "anio="+anio+"&campania="+campania+"&filtro="+filtro+"&opcion="+opcion
		if(opcion=='Pais'){
		$('#descripcion').text('Pais')
		}else if(opcion =='Division'){
		$('#descripcion').text('Division')
		}else{
		$('#descripcion').text('Sector')
		}	
	console.log(info)


		$.ajax({
			url:'<?php echo base_url(); ?>'+'eficiencias/buscar_eficiencias/',
			dataType:'json',
			async:false,
			type: 'POST',
			data:info,
			success: function(respuesta){

		var table = $("#tabla_resultados tbody");
		table.empty();
		for (var i = 0; i < respuesta.length; i++) {
		var porcentaje = (respuesta[i].eficiencia/respuesta[i].devolucion).toFixed(2);
		if(isFinite(porcentaje)){
			porcentaje  = porcentaje
		}else{
		 	porcentaje = 0;
		}
		
		eficiencia.push(parseFloat(porcentaje));
		descripcion.push(respuesta[i].descripcion);
		
		table.append("<tr><td>"+respuesta[i].descripcion+"</td>"+"<td>"+respuesta[i].campania+"</td><td>"+respuesta[i].eficiencia
		+"</td><td>"+respuesta[i].devolucion+"</td><td>"
		+parseInt(respuesta[i].eficiencia-respuesta[i].devolucion)+"</td><td>"+porcentaje+"%</td><td>"
		);
		}
		grafico(eficiencia,descripcion);
			},
			error: function(respuesta){
			console.log(respuesta)
		var table = $("#tabla_resultados tbody");
		table.empty();			
				new PNotify({
					title: 'Atención',
					text: 'No hay zonas cargadas con los parametros ingresados',
					type: 'error',
				});
			}
			});
}

function grafico(eficiencia,descripcion){

    $('#container').highcharts({
	        chart: {
            type: 'column'
        },
        title: {

            text: 'Eficiencia en Ruta'
        },
        xAxis: {
            categories: descripcion,
        },
        yAxis: {
            title: {
                text: 'Eficiencia (%)'
            },
			max: 1,
        },
        labels: {
            items: [{
                html: 'Eficiencia en ruta por '+$("#opcion").val(),
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
            type: 'spline',
            name: 'Pedidos',
            data: eficiencia,
			opposite: true,
            marker: {
                lineWidth: 2,
                lineColor: Highcharts.getOptions().colors[3],
                fillColor: 'white'
            }
        }]
    });
}


</script>


		<script src="<?php echo base_url(); ?>assets/vendor/highcharts/modules/exporting.js"></script>	
		<script src="<?php echo base_url(); ?>assets/vendor/highcharts/highcharts.js"></script>	
		<script src="<?php echo base_url(); ?>assets/vendor/highcharts/themes/Sand-signika.js"></script>	

		
		</body>
</html>

