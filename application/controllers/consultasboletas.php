<?php
class ConsultasBoletas extends MX_Controller {
 
    /**
    * Responsable for auto load the model
    * @return void
    */
    public function __construct()
    {
        parent::__construct();
        $this->load->model('ConsultasVarias');
        $this->load->model('BoletasModel');
		$this->load->library('Datatables');
    }
 
    /**
    * Load the main view with all the current model model's data.
    * @return void
    */
    public function index()
    {

		if($this->session->userdata('is_logged_in')){
		//datatable para gerentes y buzones
		$tmpl = array ( 'table_open'  => '<table class="table table-bordered table-striped mb-none" id="boletas_tbl">' );
		$this->table->set_template($tmpl); 
		$this->table->set_heading('Codigo','Nombre','Banco','Referencia','Monto','COD','Fecha','Usuario','Eliminar');
		$data['tabla_boletas'] = $this->table->generate();			
			$data['main_content'] = 'boletas/consultasboletas';
			$data['usuario'] = $this->session->userdata('usuario');
			$data['rol'] = $this->session->userdata('rol');
			$data['imagen'] = $this->session->userdata('imagen');
			$this->load->view('includes/template', $data);  
        }else{
        	$this->load->view('login');	
        }


    }
	
	
	 function datatable_boletas()
    {
        $this->datatables->select('boleta_id,codigo,nombres,banco,referencia,monto,cod,fecha,usuario')
			->unset_column('boleta_id')
			->add_column('Eliminar', '<i class="fa fa-trash-o" onclick="eliminar_boletas($1)"  style="cursor: pointer;"></i>','boleta_id')
            ->from('boletas_vista');
 
        echo $this->datatables->generate();
    }
	
		public function eliminar_boletas()
    {
		if ($this->input->is_ajax_request()) {

    
		$data = $this->BoletasModel->eliminar_boletas();

		echo "exito";
	
		}else {
		redirect('404');
		}
    }
	
}