<script>
    $(document).ready(function() {


			 $('#boletas_tbl').dataTable({

            bProcessing: true,
            bJQueryUI: true,
            sAjaxSource: '<?php echo base_url(); ?>' + 'tigomoney/datatable_boletas',
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
      });     


</script>

<script src="<?php echo base_url(); ?>assets/javascripts/ui-elements/examples.modals.js"></script>
<!-- Examples -->
<script src="<?php echo base_url(); ?>assets/javascripts/ui-elements/examples.notifications.js"></script>
<script src="<?php echo base_url(); ?>assets/vendor/jquery-datatables/extras/TableTools/js/dataTables.tableTools.min.js"></script>
<script src="<?php echo base_url(); ?>assets/javascripts/tables/datatable.boletas.js"></script>


</body>

</html>