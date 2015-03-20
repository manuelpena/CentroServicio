<?php
class DiasLaborales extends MX_Controller {
 
    /**
    * Responsable for auto load the model
    * @return void
    */
    public function __construct()
    {
        parent::__construct();
        $this->load->model('DiasLaboralesModel');
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
			$data['main_content'] = 'mantenimientos/diaslaborales';
			$data['usuario'] = $this->session->userdata('usuario');
			$data['rol'] = $this->session->userdata('rol');
			$data['imagen'] = $this->session->userdata('imagen');
			$this->load->view('includes/template', $data);  
        }else{
        	$this->load->view('login');	
        }


    }//index

	public function dias_laborales()
    {
		if ($this->input->is_ajax_request()) {

    
		$data = $this->DiasLaboralesModel->obtener_dias_laborales();

		echo json_encode($data);	 

		}else {
		redirect('404');
		}
    }	
	
	public function remover_fecha()
    {
		if ($this->input->is_ajax_request()) {

    
		$data = $this->DiasLaboralesModel->remover_fecha();

		}else {
		redirect('404');
		}
    }

	public function guardar_fecha()
    {
		if ($this->input->is_ajax_request()) {

    
		$data = $this->DiasLaboralesModel->guardar_fecha();

		}else {
		redirect('404');
		}
    }
	
}