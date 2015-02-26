<?php
class ConsultaConsejera extends MX_Controller {
 
    /**
    * Responsable for auto load the model
    * @return void
    */
    public function __construct()
    {
        parent::__construct();
		$this->load->model('ConsultasVarias');
    }
 
    /**
    * Load the main view with all the current model model's data.
    * @return void
    */
    public function index()
    {

		if($this->session->userdata('is_logged_in')){
			$data['main_content'] = 'consultas/consultaconsejera';
			$data['usuario'] = $this->session->userdata('usuario');
			$data['rol'] = $this->session->userdata('rol');
			$data['imagen'] = $this->session->userdata('imagen');
			$this->load->view('includes/template', $data);  
        }else{
        	$this->load->view('login');	
        }


    }//index
	public function historial_consejera()
    {
		if ($this->input->is_ajax_request()) {

    
		$data = $this->ConsultasVarias->historial_consejera_pedidos();
		if(count($data)>0){
		echo json_encode($data);	 
	}else{

	}
		}else {
		redirect('404');
		}
    }

	public function consulta_pedido()
    {
		if ($this->input->is_ajax_request()) {

    
		$data = $this->ConsultasVarias->consulta_pedido();
		if(count($data)>0){
		echo json_encode($data);	 
	}else{

	}
		}else {
		redirect('404');
		}
    }

}