<?php
class TigoMoney extends MX_Controller {
 
    /**
    * Responsable for auto load the model
    * @return void
    */
    public function __construct()
    {
        parent::__construct();
      $this->load->model('EficienciasModel');
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
		$tmpl = array ( 'table_open'  => '<table class="table table-bordered table-striped mb-none" id="boletas_tbl">' );
		$this->table->set_template($tmpl); 
		$this->table->set_heading('Fecha de Pago','Hora','Referencia','Monto','MSISDN','Estatus','Transaccion','record');
        
		$data['tabla_boletas'] = $this->table->generate();			
		
			$data['menus_autorizados'] = $this->users_model->menus_autorizados();
			$data['paginas_autorizadas'] = $this->users_model->paginas_autorizadas();
			$data['main_content'] = 'boletas/tigomoney';
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
        $this->datatables->select('fecha_pago,hora_pago, referencia, monto, MSISDN, estatus, transaccion, record')
			->unset_column('id')
            ->from('boletas_vista_tm');
 
        echo $this->datatables->generate();
    }


}