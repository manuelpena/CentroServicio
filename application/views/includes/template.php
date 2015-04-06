<?php $this->load->view('includes/css'); ?>
<?php $this->load->view($this->uri->segment(1).'/css'); ?>
<?php $this->load->view('includes/header'); ?>
<?php $this->load->view('includes/menu'); ?>
<?php $this->load->view($main_content); ?>
<?php $this->load->view('includes/header_user'); ?>
<?php $this->load->view('includes/footer'); ?>
<?php 
if($this->uri->segment(1)=='mantenimientos'||$this->uri->segment(1)=='pilotos'||$this->uri->segment(1)=='reportes'){
$this->load->view($this->uri->segment(1).'/'.$this->uri->segment(2).'_js'); 
}else{
$this->load->view($this->uri->segment(1).'/js'); 
}
?>