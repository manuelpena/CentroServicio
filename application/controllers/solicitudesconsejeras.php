<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class SolicitudesConsejeras extends MX_Controller {
 
    /**
    * Responsable for auto load the model
    * @return void
    */
    public function __construct()
    {
        parent::__construct();
        $this->load->model('SolicitudesModel');
		$this->load->library('Datatables');
		$this->load->database();
    }
 
    /**
    * Load the main view with all the current model model's data.
    * @return void
    */
    public function index()
    {

		$tmpl = array ( 'table_open'  => '<table class="table table-bordered table-striped mb-none" id="solicitudes_tbl">' );
		$this->table->set_template($tmpl); 

		$this->table->set_heading('Caja','Zona','Codigo','Nombre de Consejera','Estado','Accion');
		
		if($this->session->userdata('is_logged_in')){
			$data['main_content'] = 'operaciones/solicitudesconsejeras';
			$data['usuario'] = $this->session->userdata('usuario');
			$data['rol'] = $this->session->userdata('rol');
			$data['imagen'] = $this->session->userdata('imagen');
			$this->load->view('includes/template', $data);  
        }else{
        	$this->load->view('login');	
        }


    }//index
	
	public function datos_consejera($codigo)
    {
		if ($this->input->is_ajax_request()) {

    
		$data = $this->SolicitudesModel->obtener_consejera($codigo);

		echo json_encode($data);	 
	
		}else {
		redirect('404');
		}
    }
	
		public function guardar_solicitud()
    {
		if ($this->input->is_ajax_request()) {		
		
		/*
		
		$this->form_validation->set_rules('nombres','Nombres','required|max_length[45]');
		$this->form_validation->set_rules('apellidos','Apellidos','required|max_length[45]');
		
		$this->form_validation->set_rules('salario','Salarios','required|less_than[100000]|greater_than[10]');
		
		$this->form_validation->set_message('less_than','El Campo %s debe ser menor a 100000');
		$this->form_validation->set_message('greater_than','El Campo %s debe ser mayor a 10');
		
		$this->form_validation->set_message('required','El Campo %s es requerido');
		$this->form_validation->set_message('max_length','El Campo %s debe ser menor a 45 caracteres');
		*/ 
	/*	if($this->form_validation->run()==false){
		$error = json_encode(validation_errors());
		$error = str_replace('"',"",$error);
		$error = str_replace('<\/p>\n',"",$error);
		echo $error;
		
		
		}else{
		$this->AjaxModel->guardar_empleado();
		echo "Guardado con Exito";
		}
		}else {
		redirect('404');
		}*/
		
	$this->SolicitudesModel->guardar_solicitud();
	echo "Guardado con Exito";	
	
    }
	
    }
	
	
	
	
	 function datatable()
    {
        $this->datatables->select('id,ncaja,zona,codigo,nombres,estado')
            ->unset_column('id')
			->add_column('Accion', '<i class="fa fa-trash-o" href="#"></i>','id')
			//$1
            ->from('solicitudes_vista');
 
        echo $this->datatables->generate();
    }
	
	
		
	
	
	
	
	
}