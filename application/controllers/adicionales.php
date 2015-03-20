<?php
class Adicionales extends MX_Controller {
 
    /**
    * Responsable for auto load the model
    * @return void
    */
    public function __construct()
    {
        parent::__construct();
      $this->load->model('AdicionalesModel');
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
			$data['main_content'] = 'mantenimientos/adicionales';
			$data['usuario'] = $this->session->userdata('usuario');
			$data['rol'] = $this->session->userdata('rol');
			$data['imagen'] = $this->session->userdata('imagen');
			$this->load->view('includes/template', $data);  
        }else{
        	$this->load->view('login');	
        }


    }
	
	public function listado_adicionales()
    {
		if ($this->input->is_ajax_request()) {

    
		$data = $this->AdicionalesModel->listado_adicionales();
		if(count($data)>0){
		echo json_encode($data);	 
			}else{

			}
		}else {
		redirect('404');
		}
    }

	public function buscar_adicional()
    {
		if ($this->input->is_ajax_request()) {

    
		$data = $this->AdicionalesModel->buscar_adicional();

		echo json_encode($data);	 

		}else {
		redirect('404');
		}
    }
	
	public function guardar_adicional()
    {
		if ($this->input->is_ajax_request()) {

    
		$data = $this->AdicionalesModel->guardar_adicional();

		echo json_encode($data);	 

		}else {
		redirect('404');
		}
    }

	
	public function eliminar_adicional()
    {
		if ($this->input->is_ajax_request()) {

    
		$data = $this->AdicionalesModel->eliminar_adicional();

		echo json_encode($data);	 

		}else {
		redirect('404');
		}
    }	
}