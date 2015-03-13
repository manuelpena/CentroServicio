<?php
class Bancos extends MX_Controller {
 
    /**
    * Responsable for auto load the model
    * @return void
    */
    public function __construct()
    {
        parent::__construct();
      $this->load->model('BancosModel');
    }
 
    /**
    * Load the main view with all the current model model's data.
    * @return void
    */
    public function index()
    {

		if($this->session->userdata('is_logged_in')){
			$data['main_content'] = 'mantenimientos/bancos';
			$data['usuario'] = $this->session->userdata('usuario');
			$data['rol'] = $this->session->userdata('rol');
			$data['imagen'] = $this->session->userdata('imagen');
			$this->load->view('includes/template', $data);  
        }else{
        	$this->load->view('login');	
        }


    }
	
	public function listado_bancos()
    {
		if ($this->input->is_ajax_request()) {

    
		$data = $this->BancosModel->listado_bancos();
		if(count($data)>0){
		echo json_encode($data);	 
			}else{

			}
		}else {
		redirect('404');
		}
    }

	public function buscar_banco()
    {
		if ($this->input->is_ajax_request()) {

    
		$data = $this->BancosModel->buscar_banco();

		echo json_encode($data);	 

		}else {
		redirect('404');
		}
    }

	public function guardar_banco()
    {
		if ($this->input->is_ajax_request()) {

    
		$data = $this->BancosModel->guardar_banco();

		echo json_encode($data);	 

		}else {
		redirect('404');
		}
    }

	public function eliminar_banco()
    {
		if ($this->input->is_ajax_request()) {

    
		$data = $this->BancosModel->eliminar_banco();

		echo json_encode($data);	 

		}else {
		redirect('404');
		}
    }

}