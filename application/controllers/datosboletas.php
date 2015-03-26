<?php
class DatosBoletas extends MX_Controller {
 
    /**
    * Responsable for auto load the model
    * @return void
    */
    public function __construct()
    {
        parent::__construct();
        $this->load->model('ConsultasVarias');
		$this->load->model('BoletasModel');
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
			$data['main_content'] = 'boletas/datosboletas';
			$data['usuario'] = $this->session->userdata('usuario');
			$data['rol'] = $this->session->userdata('rol');
			$data['imagen'] = $this->session->userdata('imagen');
			$this->load->view('includes/template', $data);  
        }else{
        	$this->load->view('login');	
        }


    }
	
	public function datos_consejera($codigo)
    {
		if ($this->input->is_ajax_request()) {

    
		$data = $this->ConsultasVarias->obtener_consejera($codigo);
		if(count($data)>0){
		echo json_encode($data);	 
	}else{

	}
		}else {
		redirect('404');
		}
    }
	
	public function guardar_boletas()
    {
	

		if ($this->input->is_ajax_request()) {		
		
		
		$this->BoletasModel->guardar_boletas();
		echo $this->db->_error_message();	
	
    }
	
	
	}
	public function listado_bancos()
    {
	

		if ($this->input->is_ajax_request()) {		
		
		
		$data = $this->ConsultasVarias->listado_bancos();
		
		echo json_encode($data);	
	
    }
	
	
	}
}