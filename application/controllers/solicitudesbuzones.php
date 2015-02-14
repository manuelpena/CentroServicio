<?php
class SolicitudesBuzones extends MX_Controller {
 
    /**
    * Responsable for auto load the model
    * @return void
    */
    public function __construct()
    {
        parent::__construct();
      $this->load->model('SolicitudesModel');
    }
 
    /**
    * Load the main view with all the current model model's data.
    * @return void
    */
    public function index()
    {

		if($this->session->userdata('is_logged_in')){
		
		//datatable para gerentes y buzones
		$tmpl = array ( 'table_open'  => '<table class="table table-bordered table-striped mb-none" id="solicitudes_buzones_tbl">' );
		$this->table->set_template($tmpl); 
		$this->table->set_heading('Caja','Zona','Codigo','Nombre de Consejera','Estado','Accion');
		$data['tabla_buzones'] = $this->table->generate();	
		
			$data['main_content'] = 'operaciones/solicitudesbuzones';
			$data['usuario'] = $this->session->userdata('usuario');
			$data['rol'] = $this->session->userdata('rol');
			$data['imagen'] = $this->session->userdata('imagen');
			$this->load->view('includes/template', $data);  
        }else{
        	$this->load->view('login');	
        }


    }
	
	public function guardar_solicitud_buzones()
    {
	

		if ($this->input->is_ajax_request()) {		
		
		
		$this->SolicitudesModel->guardar_solicitudes_buzones();
		echo "Guardado con Exito";	
	
    }
	
	
	}
	


}