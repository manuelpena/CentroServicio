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
		$this->load->model('ConsultasVarias');
		$this->load->library('Datatables');
    }
 
    /**
    * Load the main view with all the current model model's data.
    * @return void
    */
    public function index()
    {

		$tmpl = array ( 'table_open'  => '<table class="table table-bordered table-striped mb-none" id="solicitudes_tbl">' );
		$this->table->set_template($tmpl); 

		$this->table->set_heading('Caja','Zona','Codigo','Nombre de Consejera','Tipo Solicitud','Estado','Accion');
		
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
		if(count($data)>0){
		echo json_encode($data);	 
	}else{

	}
		}else {
		redirect('404');
		}
    }

	public function datos_consejera_consulta($codigo)
    {
		if ($this->input->is_ajax_request()) {

    
		$data = $this->SolicitudesModel->obtener_consejera_consulta($codigo);
		if(count($data)>0){
		echo json_encode($data);	 
	}else{

	}
		}else {
		redirect('404');
		}
    }
	
		public function guardar_solicitud()
    {
		if ($this->input->is_ajax_request()) {		
		
		
	$this->SolicitudesModel->guardar_solicitud();
	echo "Guardado con Exito";	
	
    }
	
    }
	
		public function cancelar_solicitud($id)
    {
		if ($this->input->is_ajax_request()) {

    
		$data = $this->SolicitudesModel->cancelar_solicitud($id);

		echo 'Solicitud cancelada con exito';	 
	
		}else {
		redirect('404');
		}
    }	

	public function calculo_bodegaje()
    {
		if ($this->input->is_ajax_request()) {

    
		$data = $this->ConsultasVarias->calculo_bodegaje();

		echo json_encode($data);	 
	
		}else {
		redirect('404');
		}
    }


	
	
	 function datatable()
    {
        $this->datatables->select('id,ncaja,zona,codigo,nombres,descripcion_solicitud,estado')
            ->unset_column('id')
			->add_column('Accion', '<i class="fa fa-trash-o" onclick="cancelar_solicitud($1)"  style="cursor: pointer;"></i>','id')
			//$1
            ->from('solicitudes_vista');
 
        echo $this->datatables->generate();
    }
	
	
		
	
	
	
	
	
}