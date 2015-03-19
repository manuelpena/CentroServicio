<?php
class Usuarios extends MX_Controller {
 
    /**
    * Responsable for auto load the model
    * @return void
    */
    public function __construct()
    {
        parent::__construct();
      $this->load->model('UsuariosModel');
    }
 
    /**
    * Load the main view with all the current model model's data.
    * @return void
    */
    public function index()
    {

		if($this->session->userdata('is_logged_in')){
			$data['main_content'] = 'mantenimientos/usuarios';
			$data['usuario'] = $this->session->userdata('usuario');
			$data['rol'] = $this->session->userdata('rol');
			$data['imagen'] = $this->session->userdata('imagen');
			$this->load->view('includes/template', $data);  
        }else{
        	$this->load->view('login');	
        }


    }
	
	public function listado_usuarios()
    {
		if ($this->input->is_ajax_request()) {

    
		$data = $this->UsuariosModel->listado_usuarios();
		if(count($data)>0){
		echo json_encode($data);	 
			}else{

			}
		}else {
		redirect('404');
		}
    }

	public function listado_roles()
    {
		if ($this->input->is_ajax_request()) {

    
		$data = $this->UsuariosModel->listado_roles();

		echo json_encode($data);	 

		}else {
		redirect('404');
		}
    }
	
	public function buscar_usuario()
    {
		if ($this->input->is_ajax_request()) {

    
		$data = $this->UsuariosModel->buscar_usuario();

		echo json_encode($data);	 

		}else {
		redirect('404');
		}
    }

	
	public function guardar_usuario()
    {
		if ($this->input->is_ajax_request()) {

    
		$data = $this->UsuariosModel->guardar_usuario();

		echo json_encode($data);	 

		}else {
		redirect('404');
		}
    }	
}