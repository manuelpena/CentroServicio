<section role="main" class="content-body">
    <header class="page-header">
        <h2>Datos de Boletas</h2>

        <div class="right-wrapper pull-right">
            <ol class="breadcrumbs">
                <li>
                    <a href="index.html">
                        <i class="fa fa-home"></i>
                    </a>
                </li>
                <li><span>Boletas</span>
                </li>
                <li><span>Datos de Boletas</span>
                </li>
            </ol>

            <a class="sidebar-right-toggle" data-open="sidebar-right"><i class="fa fa-chevron-left"></i></a>
        </div>
    </header>
    <div class="col-md-12">
        <section class="panel">
            <header class="panel-heading">

                <h2 class="panel-title">Datos de Boletas</h2>
            </header>
            <div class="panel-body">


                <table class="table table-bordered table-striped mb-none" id="datatable-editable">
                    <thead>
                        <tr>
                            <th>Codigo</th>
                            <th>Nombre</th>
							<th>PedidoID</th>
                            <th>COD</th>
                            <th>Bancos</th>
                            <th>Datos </th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>

                    </tbody>
                </table>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="mb-md">
                            <button id="addToTable" class="btn btn-primary">Agregar Registro <i class="fa fa-plus"></i>
                            </button>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="mb-md">
                            <button id="addToTable" class="btn btn-success" onclick="guardar_boletas();">Guardar Todo<i class="fa fa-plus"></i>
                            </button>
                        </div>
                    </div>
                </div>

            </div>

        </section>
    </div>
</section>
<a class="mb-xs mt-xs mr-xs modal-with-zoom-anim btn btn-default" href="#modalSM" id="BotonModal" hidden="hidden" style=" visibility: hidden;"></a>
<div id="modalSM" class="modal-block modal-block-full mfp-hide">
    <section class="panel">
        <header class="panel-heading">
            <h2 class="panel-title">Favor Ingresar datos de Boleta</h2>
        </header>
        <div class="panel-body">
		<form id="formBoletas">
<div id="banco_div1">
            <div class="row form-group">
                <label class="col-md-1 control-label">Banco</label>
                <div class="col-sm-1">
                    <select class="form-control input-sm mb-md" id="banco1"></select>
                </div>
                <label class="col-md-1 control-label">Monto</label>
                <div class="col-sm-1">
                    <input type="text" id="monto1" class="form-control" id="inputDefault">

                </div>
                <label class="col-md-1 control-label">Ref</label>
                <div class="col-sm-1">
                    <input type="text" id="referencia1" class="form-control" id="inputDefault">

                </div>
                <label class="col-md-1 control-label">Fecha</label>
                <div class="col-sm-2">
                    <input type="text" id="fecha1" data-plugin-datepicker class="form-control">

                </div>
                <label class="col-md-1 control-label">Observacion</label>
                <div class="col-sm-1">
                    <input type="text" id="observacion1" class="form-control" id="inputDefault">

                </div>        
				<div class="col-sm-1">
<button type="button" class="mb-xs mt-xs mr-xs btn btn-sm btn-primary" id="mostrar_banco2"><i class="fa fa-plus"></i></button>

                </div>

            </div>
		</div>	
		
		<div id="banco_div2" hidden="hidden">
            <div class="row form-group">
                <label class="col-md-1 control-label">Banco</label>
                <div class="col-sm-1">
                    <select id="banco2" class="form-control input-sm mb-md">
                    </select>
                </div>
               <label class="col-md-1 control-label">Monto</label>
                <div class="col-sm-1">
                    <input type="text" id="monto2" class="form-control" id="inputDefault">

                </div>
                <label class="col-md-1 control-label">Ref</label>
                <div class="col-sm-1">
                    <input type="text" id="referencia2" class="form-control" id="inputDefault">

                </div>
                <label class="col-md-1 control-label">Fecha</label>
                <div class="col-sm-2">
                    <input type="text" id="fecha2" data-plugin-datepicker class="form-control">

                </div>
                <label class="col-md-1 control-label">Observacion</label>
                <div class="col-sm-1">
                    <input type="text" id="observacion2" class="form-control" id="inputDefault">

                </div>        
				<div class="col-sm-1">
<button type="button" class="mb-xs mt-xs mr-xs btn btn-sm btn-info" id="mostrar_banco3"><i class="fa fa-plus"></i></button>

                </div>

            </div>
		</div>	

		<div id="banco_div3" hidden="hidden">
            <div class="row form-group">
                <label class="col-md-1 control-label">Banco</label>
                <div class="col-sm-1">
                    <select id="banco3" class="form-control input-sm mb-md">
                    </select>
                </div>
                  <label class="col-md-1 control-label">Monto</label>
                <div class="col-sm-1">
                    <input type="text" id="monto3" class="form-control" id="inputDefault">

                </div>
                <label class="col-md-1 control-label">Ref</label>
                <div class="col-sm-1">
                    <input type="text" id="referencia3" class="form-control" id="inputDefault">

                </div>
                <label class="col-md-1 control-label">Fecha</label>
                <div class="col-sm-2">
                    <input type="text" id="fecha3" data-plugin-datepicker class="form-control">

                </div>
                <label class="col-md-1 control-label">Observacion</label>
                <div class="col-sm-1">
                    <input type="text" id="observacion3" class="form-control" id="inputDefault">

                </div>        

            </div>
		</div>	
		</form>	
        </div>
        <footer class="panel-footer">
            <div class="row">
                <div class="col-md-12 text-right">
                    <button class="btn btn-primary modal-confirm">Guardar</button>
                    <button class="btn btn-default modal-dismiss">Cancelar</button>
                </div>
            </div>
        </footer>
    </section>
</div>


<script>
    function busqueda_consejera(consejera) {

        var codigo = consejera.value
        $.ajax({
            url: '<?php echo base_url(); ?>' + 'solicitudesconsejeras/datos_consejera/' + codigo,
            dataType: 'json',
            type: 'POST',
            data: codigo,
            success: function(respuesta) {

                for (var i = 0; i < respuesta.length; i++) {

                    $('#nombre').val(respuesta[i].nombres)
                    $('#cod').val(respuesta[i].cod)
					$('#pedido_id').val(respuesta[i].pedido_id)

                }

            },
            error: function() {
                $('#nombre').val("")
                $('#cod').val("")
                new PNotify({
                    title: 'Atención',
                    text: 'Codigo de consejera no existe, \o tiene ya solicitud!',
                    type: 'error',
                });
            }
        });
    }

    function listado_bancos() {


        $.ajax({
            url: '<?php echo base_url(); ?>' + 'datosboletas/listado_bancos/',
            type: 'POST',
            dataType: 'json',
            success: function(respuesta) {

                var select1 = $("#banco1");
				var select2 = $("#banco2");
				var select3 = $("#banco3");
                for (var i = 0; i < respuesta.length; i++) {

                    select1.append($("<option />").val(respuesta[i].id).text(respuesta[i].descripcion));
					select2.append($("<option />").val(respuesta[i].id).text(respuesta[i].descripcion));
					select3.append($("<option />").val(respuesta[i].id).text(respuesta[i].descripcion));
                }

            }
        });

    }

    function guardar_boletas() {
		
      bancosDb.webdb.getBoletaInfoInsert(loadBoletaInfoInsert);

    }

    function cargar_modal() {
        $('#BotonModal').trigger('click');

    }


	
	
	
	
	
</script>