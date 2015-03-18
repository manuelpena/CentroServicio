<?php
class Agencias extends MX_Controller {
 
    /**
    * Responsable for auto load the model
    * @return void
    */
    public function __construct()
    {
        parent::__construct();
      $this->load->model('AgenciasModel');
    }
 
    /**
    * Load the main view with all the current model model's data.
    * @return void
    */
    public function index()
    {

		if($this->session->userdata('is_logged_in')){
			$data['main_content'] = 'mantenimientos/agencias';
			$data['usuario'] = $this->session->userdata('usuario');
			$data['rol'] = $this->session->userdata('rol');
			$data['imagen'] = $this->session->userdata('imagen');
			$this->load->view('includes/template', $data);  
        }else{
        	$this->load->view('login');	
        }


    }
	
	public function listado_agencias()
    {
		if ($this->input->is_ajax_request()) {

    
		$data = $this->AgenciasModel->listado_agencias();
		if(count($data)>0){
		echo json_encode($data);	 
			}else{

			}
		}else {
		redirect('404');
		}
    }
	
	public function buscar_agencia()
    {
		if ($this->input->is_ajax_request()) {

    
		$data = $this->AgenciasModel->buscar_agencia();

		echo json_encode($data);	 

		}else {
		redirect('404');
		}
    }

	public function guardar_agencia()
    {
		if ($this->input->is_ajax_request()) {

    
		$data = $this->AgenciasModel->guardar_agencia();

		echo json_encode($data);	 

		}else {
		redirect('404');
		}
    }	
	
	public function eliminar_agencia()
    {
		if ($this->input->is_ajax_request()) {

    
		$data = $this->AgenciasModel->eliminar_agencia();

		echo json_encode($data);	 

		}else {
		redirect('404');
		}
    }	
}