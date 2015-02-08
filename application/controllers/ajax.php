<?php
class Ajax extends MX_Controller {
 
    /**
    * Responsable for auto load the model
    * @return void
    */
    public function __construct()
    {
        parent::__construct();
				$this->load->model('AjaxModel');
 /*       $this->load->model('products_model');*/
    }
 
    /**
    * Load the main view with all the current model model's data.
    * @return void
    */
    public function index()
    {

		if($this->session->userdata('is_logged_in')){
			$data['main_content'] = 'ajax/ejemplo/ejemplo';
			$this->load->view('includes/template', $data);  
        }else{
        	$this->load->view('login');	
        }


    }//index

	public function mostrar_empleados()
    {
		if ($this->input->is_ajax_request()) {
    
		$data = $this->AjaxModel->obtener_empleados();

		echo json_encode($data);
		
		} else {
		redirect('404');
		}
    }
	
	public function mostrar_empleados_id($id)
    {
		if ($this->input->is_ajax_request()) {

    
		$data = $this->AjaxModel->obtener_empleado_id($id);

		echo json_encode($data);	 
	
		}else {
		redirect('404');
		}
    }
	
	public function modificar_empleado()
    {
		if ($this->input->is_ajax_request()) {		
		
		
		
		$this->form_validation->set_rules('nombres','Nombres','required|max_length[45]');
		$this->form_validation->set_rules('apellidos','Apellidos','required|max_length[45]');
		
		$this->form_validation->set_rules('salario','Salarios','required|less_than[100000]|greater_than[10]');
		
		$this->form_validation->set_message('less_than','El Campo %s debe ser menor a 100000');
		$this->form_validation->set_message('greater_than','El Campo %s debe ser mayor a 10');
		
		$this->form_validation->set_message('required','El Campo %s es requerido');
		$this->form_validation->set_message('max_length','El Campo %s debe ser menor a 45 caracteres');
		
		if($this->form_validation->run()==false){
		$error = json_encode(validation_errors());
		$error = str_replace('"',"",$error);
		$error = str_replace('<\/p>\n',"",$error);
		echo $error;
			
		}else{
		$id = $this->input->post('id_empleado');
		$this->AjaxModel->actualizar_datos_empleado($id);
		echo "Modificado con Exito";
		}
		/*
		
		$data = $this->AjaxModel->obtener_empleado_id($id);

		echo json_encode($data);	 
*/	
	
	
		}else {
		redirect('404');
		}
    }	

	public function guardar_empleado()
    {
		if ($this->input->is_ajax_request()) {		
		
		
		
		$this->form_validation->set_rules('nombres','Nombres','required|max_length[45]');
		$this->form_validation->set_rules('apellidos','Apellidos','required|max_length[45]');
		
		$this->form_validation->set_rules('salario','Salarios','required|less_than[100000]|greater_than[10]');
		
		$this->form_validation->set_message('less_than','El Campo %s debe ser menor a 100000');
		$this->form_validation->set_message('greater_than','El Campo %s debe ser mayor a 10');
		
		$this->form_validation->set_message('required','El Campo %s es requerido');
		$this->form_validation->set_message('max_length','El Campo %s debe ser menor a 45 caracteres');
		
		if($this->form_validation->run()==false){
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
		}
    }		
	
	public function eliminar_empleado()
    {
		if ($this->input->is_ajax_request()) {		
		
		
		
		$this->form_validation->set_rules('id','ID','required');		
		$this->form_validation->set_message('required','Debe de seleccionar un Empleado');
		
		if($this->form_validation->run()==false){
		$error = json_encode(validation_errors());
		$error = str_replace('"',"",$error);
		$error = str_replace('<\/p>\n',"",$error);
		echo $error;
		
		}else{
		$id = $this->input->post('id');
		$this->AjaxModel->eliminar_empleado_id($id);
		echo "Eliminado con Exito";
		}
		}else {
		redirect('404');
		}
    }		
}