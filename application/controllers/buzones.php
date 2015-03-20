<?php
class Buzones extends MX_Controller {
 
    /**
    * Responsable for auto load the model
    * @return void
    */
    public function __construct()
    {
        parent::__construct();
      $this->load->model('BuzonesModel');
    }
 
    /**
    * Load the main view with all the current model model's data.
    * @return void
    */
    public function index()
    {

		if($this->session->userdata('is_logged_in')){
			$acceso = $this->users_model->validar_acceso();
			if($acceso==false){
        	redirect('inicio/inicio');
			}
			$data['menus_autorizados'] = $this->users_model->menus_autorizados();
			$data['paginas_autorizadas'] = $this->users_model->paginas_autorizadas();		
			$data['main_content'] = 'mantenimientos/buzones';
			$data['usuario'] = $this->session->userdata('usuario');
			$data['rol'] = $this->session->userdata('rol');
			$data['imagen'] = $this->session->userdata('imagen');
			$this->load->view('includes/template', $data);  
        }else{
        	$this->load->view('login');	
        }


    }
	
	public function listado_buzones()
    {
		if ($this->input->is_ajax_request()) {

    
		$data = $this->BuzonesModel->listado_buzones();
		if(count($data)>0){
		echo json_encode($data);	 
			}else{

			}
		}else {
		redirect('404');
		}
    }

	public function buscar_buzon()
    {
		if ($this->input->is_ajax_request()) {

    
		$data = $this->BuzonesModel->buscar_buzon();

		echo json_encode($data);	 

		}else {
		redirect('404');
		}
    }
	
	public function guardar_buzon()
    {
		if ($this->input->is_ajax_request()) {

    
		$data = $this->BuzonesModel->guardar_buzon();

		echo json_encode($data);	 

		}else {
		redirect('404');
		}
    }

	
	public function eliminar_buzon()
    {
		if ($this->input->is_ajax_request()) {

    
		$data = $this->BuzonesModel->eliminar_buzon();

		echo json_encode($data);	 

		}else {
		redirect('404');
		}
    }	
}