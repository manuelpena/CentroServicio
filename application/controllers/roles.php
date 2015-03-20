<?php
class Roles extends MX_Controller {
 
    /**
    * Responsable for auto load the model
    * @return void
    */
    public function __construct()
    {
        parent::__construct();
      $this->load->model('RolesModel');
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
			$data['main_content'] = 'mantenimientos/roles';
			$data['usuario'] = $this->session->userdata('usuario');
			$data['rol'] = $this->session->userdata('rol');
			$data['imagen'] = $this->session->userdata('imagen');
			$this->load->view('includes/template', $data);  
        }else{
        	$this->load->view('login');	
        }


    }
	
	public function listado_roles()
    {
		if ($this->input->is_ajax_request()) {

    
		$data = $this->RolesModel->listado_roles();
		if(count($data)>0){
		echo json_encode($data);	 
			}else{

			}
		}else {
		redirect('404');
		}
    }

	public function listado_menus()
    {
		if ($this->input->is_ajax_request()) {

    
		$data = $this->RolesModel->listado_menus();
		if(count($data)>0){
		echo json_encode($data);	 
			}else{

			}
		}else {
		redirect('404');
		}
    }

	public function listado_paginas()
    {
		if ($this->input->is_ajax_request()) {

    
		$data = $this->RolesModel->listado_paginas();
		if(count($data)>0){
		echo json_encode($data);	 
			}else{

			}
		}else {
		redirect('404');
		}
    }

	public function buscar_rol()
    {
		if ($this->input->is_ajax_request()) {

    
		$data = $this->RolesModel->buscar_rol();
		if(count($data)>0){
		echo json_encode($data);	 
			}else{

			}
		}else {
		redirect('404');
		}
    }


	public function guardar_pagina()
    {
		if ($this->input->is_ajax_request()) {

    
		$data = $this->RolesModel->guardar_pagina();
		if(count($data)>0){
		echo json_encode($data);	 
			}else{

			}
		}else {
		redirect('404');
		}
    }

	public function eliminar_pagina()
    {
		if ($this->input->is_ajax_request()) {

    
		$data = $this->RolesModel->eliminar_pagina();
		if(count($data)>0){
		echo json_encode($data);	 
			}else{

			}
		}else {
		redirect('404');
		}
    }

	public function eliminar_rol()
    {
		if ($this->input->is_ajax_request()) {

    
		$data = $this->RolesModel->eliminar_rol();
		if(count($data)>0){
		echo json_encode($data);	 
			}else{

			}
		}else {
		redirect('404');
		}
    }

	public function guardar_rol()
    {
		if ($this->input->is_ajax_request()) {

    
		$data = $this->RolesModel->guardar_rol();
	
		echo $data;	 

		}else {
		redirect('404');
		}
    }

}