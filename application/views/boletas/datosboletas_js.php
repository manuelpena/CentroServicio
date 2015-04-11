<script>
    $(document).ready(function() {


			 $('#boletas_tbl').dataTable({

            bProcessing: true,
            bJQueryUI: true,
            sAjaxSource: '<?php echo base_url(); ?>' + 'consultasboletas/datatable_boletas',
            bServerSide: true,
            fnServerData: function(sSource, aoData, fnCallback) {
                $.ajax({
                    'dataType': 'json',
                    'type': 'POST',
                    'url': sSource,
                    'data': aoData,
                    'success': fnCallback
                });
            }
        });     
		listado_bancos();
        init();


        $(document).on('click', '.modal-confirm', function(e) {
            e.preventDefault();
            $.magnificPopup.close();
            datosBoletas();
        });
        $("#mostrar_banco2").click(function() {
            $("#banco_div2").toggle();
        });

        $("#mostrar_banco3").click(function() {
            $("#banco_div3").toggle();
        });


    });
    $('body').on('focus', ".datepicker_fecha", function() {
        $(this).datepicker();
    });
</script>

<script>
    function init() {

        bancosDb.webdb.open();
        bancosDb.webdb.createTable();
        bancosDb.webdb.clearAll();
    }

    var bancosDb = {};
    bancosDb.webdb = {};
    bancosDb.webdb.db = null;
    bancosDb.webdb.open = function() {
        var dbSize = 5 * 1024 * 1024; // 5MB
        bancosDb.webdb.db = openDatabase("Todo", "1.0", "Todo manager", dbSize);
    }

    bancosDb.webdb.createTable = function() {
        var db = bancosDb.webdb.db;
        db.transaction(function(tx) {
            tx.executeSql("CREATE TABLE IF NOT EXISTS boletas(ID INTEGER PRIMARY KEY ASC, pedido_id INTEGER, banco INTEGER, monto TEXT, referencia TEXT, fecha TEXT, observacion TEXT)", []);
        });
    }
    bancosDb.webdb.clearAll = function(id) {
        var db = bancosDb.webdb.db;
        db.transaction(function(tx) {
            tx.executeSql("DELETE FROM boletas WHERE ID >0", [],
                bancosDb.webdb.onSuccess,
                bancosDb.webdb.onError);
        });
    }

    function datosBoletas() {

        var pedido_id = $('#pedido_id').val();
        var banco1 = $('#banco1').val();
        var banco2 = $('#banco2').val();
        var banco3 = $('#banco3').val();
        var monto1 = $('#monto1').val();
        var monto2 = $('#monto2').val();
        var monto3 = $('#monto3').val();
        var referencia1 = $('#referencia1').val();
        var referencia2 = $('#referencia2').val();
        var referencia3 = $('#referencia3').val();
        var fecha1 = $('#fecha1').val();
        var fecha2 = $('#fecha2').val();
        var fecha3 = $('#fecha3').val();
        var observacion1 = $('#observacion1').val();
        var observacion2 = $('#observacion2').val();
        var observacion3 = $('#observacion3').val();

        if (monto1 > 0) {
		if(isNaN(monto1)==true){alert("verifique el monto ingresado");}		
            bancosDb.webdb.addBoleta(parseInt(pedido_id), parseInt(banco1), monto1, referencia1, fecha1, observacion1);
        }
        if (monto2 > 0) {
		if(isNaN(monto2)==true){alert("verifique el monto ingresado");}				
            bancosDb.webdb.addBoleta(parseInt(pedido_id), parseInt(banco2), monto2, referencia2, fecha2, observacion2);
        }
        if (monto3 > 0) {
		if(isNaN(monto3)==true){alert("verifique el monto ingresado");}				
            bancosDb.webdb.addBoleta(parseInt(pedido_id), parseInt(banco3), monto3, referencia3, fecha3, observacion3);
        }
    }

    bancosDb.webdb.addBoleta = function(pedido_id, banco, monto, referencia, fecha, observacion) {
        var db = bancosDb.webdb.db;
        db.transaction(function(tx) {
            tx.executeSql("INSERT INTO boletas(pedido_id, banco, monto, referencia,fecha, observacion) VALUES (?,?,?,?,?,?)", [pedido_id, banco, monto, referencia, fecha, observacion],
                bancosDb.webdb.onSuccess,
                bancosDb.webdb.onError);
        });
    }
    bancosDb.webdb.onError = function(tx, e) {
        alert("There has been an error: " + e.message);
    }

    bancosDb.webdb.onSuccess = function(tx, r) {
        // re-render the data.
        bancosDb.webdb.getBoletaInfo(loadBoletaInfo);
    }

    bancosDb.webdb.getBoletaInfo = function(renderFunc) {
        var pedido_id = $('#pedido_id').val();
        var db = bancosDb.webdb.db;
        db.transaction(function(tx) {
            tx.executeSql("SELECT * FROM boletas where pedido_id =?", [pedido_id], renderFunc,
                bancosDb.webdb.onError);
        });
    }

    function loadBoletaInfo(tx, rs) {
        var rowOutput = "";
        for (var i = 0; i < rs.rows.length; i++) {
            rowOutput += renderBoletas(rs.rows.item(i));
        }
        $('#datos').val(rowOutput);
        $('#formBoletas')[0].reset();
        console.log(rowOutput);
    }

    function renderBoletas(row) {
        return 'Banco: ' + row.banco + ' Monto: ' + row.monto + ' Ref: ' + row.referencia + ' Fecha: ' + row.fecha + ' Obs:' + row.observacion + ' ->';
    }

    bancosDb.webdb.deleteBoletas = function(id) {
        var db = bancosDb.webdb.db;
        db.transaction(function(tx) {	
            tx.executeSql("DELETE FROM boletas WHERE pedido_id=?", [id],
                bancosDb.webdb.onSuccess,
                bancosDb.webdb.onError);
        });
    }
	
	
    bancosDb.webdb.getBoletaInfoInsert = function(renderFunc) {
  
        var db = bancosDb.webdb.db;
        db.transaction(function(tx) {
            tx.executeSql("SELECT * FROM boletas where pedido_id >?", [0], renderFunc,
                bancosDb.webdb.onError);
        });
    }

    function loadBoletaInfoInsert(tx, rs) {
        var rowOutput = "";
        for (var i = 0; i < rs.rows.length; i++) {
            rowOutput = renderBoletasInsert(rs.rows.item(i));
		      console.log(rowOutput);	
			$.ajax({
                url: '<?php echo base_url(); ?>' + 'datosboletas/guardar_boletas/',
                type: 'POST',
                data: rowOutput,
                success: function(respuesta) {

                   // alert(respuesta)

                }
            });		
        }
location.reload();
  
    }
	
    function renderBoletasInsert(row) {
        return 'pedido_id=' + row.pedido_id + '&banco_id=' + row.banco + '&referencia=' + row.referencia + '&monto=' + row.monto + '&fecha=' + row.fecha + '&observaciones='+row.observacion;
    }	
</script>
<script src="<?php echo base_url(); ?>assets/javascripts/ui-elements/examples.modals.js"></script>
<!-- Examples -->
<script src="<?php echo base_url(); ?>assets/javascripts/ui-elements/examples.notifications.js"></script>
<script src="<?php echo base_url(); ?>assets/vendor/jquery-datatables/extras/TableTools/js/dataTables.tableTools.min.js"></script>
<script src="<?php echo base_url(); ?>assets/javascripts/tables/datatable.boletas.js"></script>


</body>

</html>