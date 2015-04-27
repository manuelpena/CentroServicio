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
	  $this->load->model('ConsultasVarias');
	  $this->load->library('Datatables');
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
		//datatable para gerentes y buzones
		$tmpl = array ( 'table_open'  => '<table class="table table-bordered table-striped mb-none" id="solicitudes_buzones_desp">' );
		$this->table->set_template($tmpl); 
		$this->table->set_heading('Caja','Zona','Codigo','Nombre de Consejera','Tipo Solicitud','Estado','Accion');
		$data['datatable_buzones'] = $this->table->generate();	
		
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

	public function listado_buzones()
    {
	

		if ($this->input->is_ajax_request()) {		
		
		
		$data = $this->ConsultasVarias->listado_buzones();
		
		echo json_encode($data);	
	
    }
	
	
	}
	
	
	public function mostrar_solicitudes_buzones()
    {
	

		if ($this->input->is_ajax_request()) {		
		
		
		$data = $this->ConsultasVarias->mostrar_solicitudes_buzones();
		
		echo json_encode($data);	
	
    }
	
	
	}
	


}