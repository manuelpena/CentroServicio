<?php
class CuadrePilotos extends MX_Controller {
 
    /**
    * Responsable for auto load the model
    * @return void
    */
    public function __construct()
    {
        parent::__construct();
       $this->load->model('PilotosModel');
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
			$data['main_content'] = 'pilotos/cuadrepilotos';
			$data['usuario'] = $this->session->userdata('usuario');
			$data['rol'] = $this->session->userdata('rol');
			$data['imagen'] = $this->session->userdata('imagen');
			$this->load->view('includes/template', $data);  
        }else{
        	$this->load->view('login');	
        }


    }//index

	public function obtener_adicionales()
    {
		if ($this->input->is_ajax_request()) {

    
		$data = $this->PilotosModel->listado_adicionales();
		if(count($data)>0){
		echo json_encode($data);	 
			}else{

			}
		}else {
		redirect('404');
		}
    }

	public function obtener_agencias()
    {
		if ($this->input->is_ajax_request()) {

    
		$data = $this->PilotosModel->listado_agencias();
		if(count($data)>0){
		echo json_encode($data);	 
			}else{

			}
		}else {
		redirect('404');
		}
    }

	public function guardar_piloto()
    {
		if ($this->input->is_ajax_request()) {

    
		$data = $this->PilotosModel->guardar_piloto();
		echo $data;
		}else {
		redirect('404');
		}
    }

	public function eliminar_detalle()
    {
		if ($this->input->is_ajax_request()) {

    
		$data = $this->PilotosModel->eliminar_detalle();
		echo $data;
		}else {
		redirect('404');
		}
    }

	public function guardar_adicionales()
    {
		if ($this->input->is_ajax_request()) {

    
		$data = $this->PilotosModel->guardar_adicionales();
		echo $data;
		}else {
		redirect('404');
		}
    }

	public function pilotos_ingresados()
    {
		if ($this->input->is_ajax_request()) {

    
		$data = $this->PilotosModel->obtener_pilotos();
		if(count($data)>0){
		echo json_encode($data);	 
			}else{

			}
		}else {
		redirect('404');
		}
    }

	public function detalle_piloto_cuadre()
    {
		if ($this->input->is_ajax_request()) {

    
		$data = $this->PilotosModel->detalle_piloto_cuadre();
		if(count($data)>0){
		echo json_encode($data);	 
			}else{

			}
		}else {
		redirect('404');
		}
    }
	
	public function detalle_piloto_adicionales()
    {
		if ($this->input->is_ajax_request()) {

    
		$data = $this->PilotosModel->detalle_piloto_adicionales();
		if(count($data)>0){
		echo json_encode($data);	 
			}else{

			}
		}else {
		redirect('404');
		}
    }

}