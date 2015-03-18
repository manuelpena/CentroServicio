<?php
class Bodegaje extends MX_Controller {
 
    /**
    * Responsable for auto load the model
    * @return void
    */
    public function __construct()
    {
        parent::__construct();
      $this->load->model('BodegajeModel');
    }
 
    /**
    * Load the main view with all the current model model's data.
    * @return void
    */
    public function index()
    {

		if($this->session->userdata('is_logged_in')){
			$data['main_content'] = 'mantenimientos/bodegaje';
			$data['usuario'] = $this->session->userdata('usuario');
			$data['rol'] = $this->session->userdata('rol');
			$data['imagen'] = $this->session->userdata('imagen');
			$this->load->view('includes/template', $data);  
        }else{
        	$this->load->view('login');	
        }


    }
	
	public function listado_bodegaje()
    {
		if ($this->input->is_ajax_request()) {

    
		$data = $this->BodegajeModel->listado_bodegaje();
		if(count($data)>0){
		echo json_encode($data);	 
			}else{

			}
		}else {
		redirect('404');
		}
    }

	public function buscar_bodegaje()
    {
		if ($this->input->is_ajax_request()) {

    
		$data = $this->BodegajeModel->buscar_bodegaje();
		if(count($data)>0){
		echo json_encode($data);	 
			}else{

			}
		}else {
		redirect('404');
		}
    }
	
	public function guardar_bodegaje()
    {
		if ($this->input->is_ajax_request()) {

    
		$data = $this->BodegajeModel->guardar_bodegaje();
		if(count($data)>0){
		echo json_encode($data);	 
			}else{

			}
		}else {
		redirect('404');
		}
    }

	public function eliminar_bodegaje()
    {
		if ($this->input->is_ajax_request()) {

    
		$data = $this->BodegajeModel->eliminar_bodegaje();
		if(count($data)>0){
		echo json_encode($data);	 
			}else{

			}
		}else {
		redirect('404');
		}
    }

}