<?php
class Desmantelado extends MX_Controller {
 
    /**
    * Responsable for auto load the model
    * @return void
    */
    public function __construct()
    {
        parent::__construct();
     $this->load->model('DesmanteladosModel');
    }
 
    /**
    * Load the main view with all the current model model's data.
    * @return void
    */
    public function index()
    {

		if($this->session->userdata('is_logged_in')){
			$data['main_content'] = 'mantenimientos/desmantelado';
			$data['usuario'] = $this->session->userdata('usuario');
			$data['rol'] = $this->session->userdata('rol');
			$data['imagen'] = $this->session->userdata('imagen');
			$this->load->view('includes/template', $data);  
        }else{
        	$this->load->view('login');	
        }


    }
	
	public function generar_desmantelado()
    {
		if ($this->input->is_ajax_request()) {

    
		$data = $this->DesmanteladosModel->generar_desmantelado();

		echo $this->db->affected_rows();	 
	
		}else {
		redirect('404');
		}
    }

	public function revertir_desmantelado()
    {
		if ($this->input->is_ajax_request()) {

    
		$data = $this->DesmanteladosModel->revertir_desmantelado();

		echo $this->db->affected_rows();	 
	
		}else {
		redirect('404');
		}
    }

	public function zonas_cargadas()
    {
		if ($this->input->is_ajax_request()) {

    
		$data = $this->DesmanteladosModel->zonas_cargadas();

		echo json_encode($data);	 
	
		}else {
		redirect('404');
		}
    }

	public function posibles_zonas()
    {
		if ($this->input->is_ajax_request()) {

    
		$data = $this->DesmanteladosModel->posibles_zonas();

		echo json_encode($data);	 
	
		}else {
		redirect('404');
		}
    }


}