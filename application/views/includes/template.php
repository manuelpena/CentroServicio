<?php $this->load->view('includes/css'); ?>
<?php $this->load->view($this->uri->segment(1).'/css'); ?>
<?php $this->load->view('includes/header'); ?>
<?php $this->load->view('includes/menu'); ?>
<?php $this->load->view($main_content); ?>
<?php $this->load->view('includes/header_user'); ?>
<?php $this->load->view('includes/footer'); ?>
<?php $this->load->view($this->uri->segment(1).'/js'); ?>