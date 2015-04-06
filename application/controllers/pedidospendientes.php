<?php
class PedidosPendientes extends MX_Controller {
 
    /**
    * Responsable for auto load the model
    * @return void
    */
    public function __construct()
    {
        parent::__construct();
        $this->load->model('SolicitudesModel');
		$this->load->library('Datatables');
    }
 
    /**
    * Load the main view with all the current model model's data.
    * @return void
    */
    public function index()
    {
	
		//datatable para consejeras
		$tmpl = array ( 'table_open'  => '<table class="table table-bordered table-striped mb-none" id="solicitudes_consejeras_tbl">' );
		$this->table->set_template($tmpl); 

		$this->table->set_heading('Caja','Zona','Codigo','Nombre de Consejera','Tipo Solicitud','Estado','Accion');

		$data['tabla_consejeras'] = $this->table->generate();

		$this->table->clear();
		//datatable para gerentes y buzones
		$tmpl = array ( 'table_open'  => '<table class="table table-bordered table-striped mb-none" id="solicitudes_buzones_tbl">' );
		$this->table->set_template($tmpl); 
		
		$this->table->set_heading('Caja','Zona','Codigo','Nombre de Consejera','Tipo Solicitud','Estado','Accion');
		$data['tabla_buzones'] = $this->table->generate();	

		//datatable para pedidos despachados
		$tmpl = array ( 'table_open'  => '<table class="table table-bordered table-striped mb-none" id="solicitudes_despachadas_tbl">' );
		$this->table->set_template($tmpl); 
		
		$this->table->set_heading('Caja','Zona','Codigo','Nombre de Consejera','Tipo Solicitud','Estado','Accion');
		$data['tabla_despachadas'] = $this->table->generate();	
			
			
		if($this->session->userdata('is_logged_in')){
			$acceso = $this->users_model->validar_acceso();
			if($acceso==false){
        	redirect('inicio/inicio');
			}
			$data['menus_autorizados'] = $this->users_model->menus_autorizados();
			$data['paginas_autorizadas'] = $this->users_model->paginas_autorizadas();		
			$data['main_content'] = 'bodega/pedidospendientes';
			$data['usuario'] = $this->session->userdata('usuario');
			$data['rol'] = $this->session->userdata('rol');
			$data['imagen'] = $this->session->userdata('imagen');
			$this->load->view('includes/template', $data);  
        }else{
        	$this->load->view('login');	
        }


    }
	
	//Consultas para Datatables

	 function datatable_consejeras()
    {
        $this->datatables->select('id,ncaja,zona,codigo,nombres,descripcion_solicitud,estado')
            ->unset_column('id')
			 ->where('tipo_solicitud',1)
			 ->where('estado','Pendiente')
			->add_column('Accion', '<i class="fa fa-save" onclick="despachar($1)"  style="cursor: pointer;"></i>','id')
			//$1
            ->from('solicitudes_vista');
 
        echo $this->datatables->generate();
    }
	
	function datatable_buzones()
    {
        $this->datatables->select('id,ncaja,zona,codigo,nombres,descripcion_solicitud,estado,tipo_solicitud')
            ->unset_column('id')
			->unset_column('tipo_solicitud')			
 			->where('tipo_solicitud >=',2)
			->where('estado','Pendiente')
			->add_column('Accion', '<i class="fa fa-save" onclick="despachar($1)"  style="cursor: pointer;"></i>','id')
            ->from('solicitudes_vista');
        echo $this->datatables->generate();
    }
	
	
	function datatable_despachadas()
    {
        $this->datatables->select('id,ncaja,zona,codigo,nombres,descripcion_solicitud,estado,tipo_solicitud')
            ->unset_column('id')
			->unset_column('tipo_solicitud')			
 			->where('estado','Despachado')
			->add_column('Accion', '<i class="fa fa-check-square"   style="cursor: pointer;"></i>','id')
            ->from('solicitudes_vista');
        echo $this->datatables->generate();
    }
	
		function datatable_buzones_desp()
    {
        $this->datatables->select('id,ncaja,zona,codigo,nombres,descripcion_solicitud,estado,tipo_solicitud')
            ->unset_column('id')
			->unset_column('tipo_solicitud')			
 			->where('tipo_solicitud >=',2)
			->where('estado','Pendiente')
			->add_column('Accion', '<i class="fa fa-trash-o" onclick="cancelar_solicitud($1)"  style="cursor: pointer;"></i>','id')
            ->from('solicitudes_vista');
        echo $this->datatables->generate();
    }
	
	
		public function despachar($id)
    {
		if ($this->input->is_ajax_request()) {

    
		$data = $this->SolicitudesModel->despachar($id);

	
		}else {
		redirect('404');
		}
    }
}