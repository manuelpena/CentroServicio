<?php
class Inicio extends MX_Controller {
 
    /**
    * Responsable for auto load the model
    * @return void
    */
    public function __construct()
    {
        parent::__construct();
    $this->load->model('InicioModel');
    }
 
    /**
    * Load the main view with all the current model model's data.
    * @return void
    */
    public function index()
    {

		if($this->session->userdata('is_logged_in')){
			$data['menus_autorizados'] = $this->users_model->menus_autorizados();
			$data['paginas_autorizadas'] = $this->users_model->paginas_autorizadas();		
			$data['main_content'] = 'inicio/inicio';
			$data['usuario'] = $this->session->userdata('usuario');
			$data['rol'] = $this->session->userdata('rol');
			$data['imagen'] = $this->session->userdata('imagen');
			$this->load->view('includes/template', $data);  
        }else{
        	$this->load->view('login');	
        }


    }//index
	
	public function buscar_datos()
    {
		if ($this->input->is_ajax_request()) {

    
		$data = $this->InicioModel->datos_diarios();

		echo json_encode($data);	 

		}else {
		redirect('404');
		}
    }

}