<?php
class carga_csv extends MX_Controller {
 
    /**
    * Responsable for auto load the model
    * @return void
    */
    public function __construct()
    {
        parent::__construct();
      $this->load->model('csv_model');
	  
    }
 
    /**
    * Load the main view with all the current model model's data.
    * @return void
    */
    public function index()
    {

		if($this->session->userdata('is_logged_in')){
			$data['main_content'] = 'mantenimientos/cargasdrc';
			$data['usuario'] = $this->session->userdata('usuario');
			$data['rol'] = $this->session->userdata('rol');
			$data['imagen'] = $this->session->userdata('imagen');
			//Registros disponibles				
			
			$data['addressbook'] = $this->csv_model->get_addressbook();
			$this->load->view('includes/template', $data);  
        }else{
        	$this->load->view('login');	
        }


    }//index


}