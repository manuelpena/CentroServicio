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
		$tmpl = array ( 'table_open'  => '<table class="table table-bordered table-striped mb-none" id="solicitudes_consejeras_tbl">' );
		$this->table->set_template($tmpl); 

		$this->table->set_heading('Caja','Zona','Codigo','Nombre de Consejera','Estado','Accion');
		
		if($this->session->userdata('is_logged_in')){
			$data['main_content'] = 'operaciones/pedidospendientes';
			$data['usuario'] = $this->session->userdata('usuario');
			$data['rol'] = $this->session->userdata('rol');
			$data['imagen'] = $this->session->userdata('imagen');
			$this->load->view('includes/template', $data);  
        }else{
        	$this->load->view('login');	
        }


    }//index

	 function datatable_consejeras()
    {
        $this->datatables->select('id,ncaja,zona,codigo,nombres,estado')
            ->unset_column('id')
			->add_column('Accion', '<i class="fa fa-save" onclick="despachar($1)"  style="cursor: pointer;"></i>','id')
			//$1
            ->from('solicitudes_vista');
 
        echo $this->datatables->generate();
    }
	
		public function despachar($id)
    {
		if ($this->input->is_ajax_request()) {

    
		$data = $this->SolicitudesModel->despachar($id);

		echo 'Solicitud despachada con exito';	 
	
		}else {
		redirect('404');
		}
    }
}