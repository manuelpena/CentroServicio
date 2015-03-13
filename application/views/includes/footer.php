
		<!-- Vendor -->
		<script src="<?php echo base_url(); ?>assets/vendor/jquery/jquery.js"></script>
		<script src="<?php echo base_url(); ?>assets/vendor/jquery-browser-mobile/jquery.browser.mobile.js"></script>
		<script src="<?php echo base_url(); ?>assets/vendor/bootstrap/js/bootstrap.js"></script>
		<script src="<?php echo base_url(); ?>assets/vendor/nanoscroller/nanoscroller.js"></script>
		<script src="<?php echo base_url(); ?>assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
		<script src="<?php echo base_url(); ?>assets/vendor/magnific-popup/magnific-popup.js"></script>
		<script src="<?php echo base_url(); ?>assets/vendor/jquery-placeholder/jquery.placeholder.js"></script>
		<script src="<?php echo base_url(); ?>assets/vendor/bootstrap-timepicker/js/bootstrap-timepicker.js"></script>
		<!-- Specific Page Vendor -->
		<script src="<?php echo base_url(); ?>assets/vendor/jquery-validation/jquery.validate.js"></script>
		<script src="<?php echo base_url(); ?>assets/vendor/bootstrap-wizard/jquery.bootstrap.wizard.js"></script>
		<script src="<?php echo base_url(); ?>assets/vendor/pnotify/pnotify.custom.js"></script>	
		<script src="<?php echo base_url(); ?>assets/vendor/select2/select2.js"></script>

		
		

		<script src="<?php echo base_url(); ?>assets/vendor/jquery-datatables-bs3/assets/js/datatables.js"></script>		
		<?php if($this->uri->segment(2)=='solicitudesbuzones'||$this->uri->segment(2)=='datosboletas'){		?>
		<script src="<?php echo base_url(); ?>assets/vendor/jquery-datatables/media/js/jquery.dataTables-editable.js"></script>
		<? }else{?>
		<script src="<?php echo base_url(); ?>assets/vendor/jquery-datatables/media/js/jquery.dataTables.js"></script>
		<?}?>
						
		<!-- Theme Base, Components and Settings -->
		<script src="<?php echo base_url(); ?>assets/javascripts/theme.js"></script>
		
		<!-- Theme Custom -->
		<script src="<?php echo base_url(); ?>assets/javascripts/theme.custom.js"></script>
		
		<!-- Theme Initialization Files -->
		<script src="<?php echo base_url(); ?>assets/javascripts/theme.init.js"></script>		
