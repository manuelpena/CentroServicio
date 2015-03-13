<?php
class csv extends CI_Controller {
 
    function __construct() {
        parent::__construct();
        $this->load->model('csv_model');
        $this->load->library('csvimport');
    }
 
    function index() {
	
        $data['addressbook'] = $this->csv_model->get_addressbook();
        $this->load->view('mantenimientos/cargasdrc', $data);
		
    }
 
    function importcsv() {
		//variables
		$tipo_pedido = $this->input->post('tipo_pedido');
		$zona = $this->input->post('zona');
		$anio = $this->input->post('anio');
		$campania = $this->input->post('campania');
		$fecha = date("Y-m-d H:i:s");
		
		$fecha_post = $this->input->post('fecha_ingreso');		
		$fecha_ingreso = date("Y-m-d", strtotime($fecha_post));		
	
       // $data['addressbook'] = $this->csv_model->get_addressbook();
        $data['error'] = '';    //initialize image upload error array to empty
 
        $config['upload_path'] = './uploads/';
        $config['allowed_types'] = 'csv';
        $config['max_size'] = '1000';
 
        $this->load->library('upload', $config);
		$this->upload->initialize($config); 

 
        // If upload failed, display error
        if (!$this->upload->do_upload()) {
            $data['error'] = $this->upload->display_errors();
 
            $this->load->view('mantenimientos/cargasdrc', $data);
        } else {
            $file_data = $this->upload->data();
            $file_path =  './uploads/'.$file_data['file_name'];
 
            if ($this->csvimport->get_array($file_path)) {
                $csv_array = $this->csvimport->get_array($file_path);
				
                foreach ($csv_array as $row) {
                    
					
				$consejera_existente = $this->csv_model->busqueda_consejera($row['Codigo']);	
					

				if($consejera_existente>0){
				
				$datos_consejeras = array(
						'zona'=>$zona,
						'sector'=>$row['Seccion'],
                        'nombres'=>$row['Nombre'],
                        'telefono_1'=>$row['Telefono'],
						'telefono_2'=>$row['Tel Celular'],
                        'los'=>$row['Los'],
						'direccion'=>$row['Direccion1'].$row['Direccion2'].$row['Direccion3']
                    );	
					 $this->csv_model->actualizacion_consejera($datos_consejeras,$row['Codigo']);
				}else{
				
				$datos_consejeras = array(
                        'codigo'=>$row['Codigo'],
						'zona'=>$zona,
						'sector'=>$row['Seccion'],
                        'nombres'=>$row['Nombre'],
                        'telefono_1'=>$row['Telefono'],
						'telefono_2'=>$row['Tel Celular'],
                        'los'=>$row['Los'],
						'direccion'=>$row['Direccion1'].$row['Direccion2'].$row['Direccion3'],
						'creado_por'=>$this->session->userdata('usuario_id'),
						'fecha_creado'=>$fecha,
                    );				
					 $this->csv_model->insert_csv_consejeras($datos_consejeras);
				}

					
                $pedido_existente = $this->csv_model->busqueda_pedido($row['Codigo'],$anio,$campania);	
				if($pedido_existente>0){

				}else{
				
                $datos_pedido = array(
                        'codigo'=>$row['Codigo'],
						'anio'=>$anio,
						'campania'=>$campania,
                        'cod'=>$row['Cod'],
						'razon'=>utf8_decode($row['Razón']),
						'comentarios'=>$row['Final'],
                        'fecha_ingreso'=>$fecha_ingreso,
						'cajas'=>$row['Inicio'],
						'ncaja'=>$row['Clave'],
						'creado_por'=>$this->session->userdata('usuario_id'),
						'fecha_creado'=>$fecha,
						'tipo_pedido'=>$tipo_pedido,
                    );
					
                    $this->csv_model->insert_csv_pedidos($datos_pedido);				
				}	
					
                }
                $this->session->set_flashdata('success', 'La información fue cargada exitosamente');
				
				//variables para obtener datos guardados
				
				$this->session->set_flashdata('campania', $campania);
				$this->session->set_flashdata('anio', $anio);
				$this->session->set_flashdata('zona', $zona);
				$this->session->set_flashdata('fecha_ingreso', $fecha_ingreso);


                redirect(base_url().'mantenimientos/cargasdrc/');
				
                //echo "<pre>"; print_r($insert_data);
            } else 
                $data['error'] = "Error occured";
                $this->load->view('mantenimientos/cargasdrc', $data);
            }
 
        } 
 
}
/*END OF FILE*/