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
	
        $data['addressbook'] = $this->csv_model->get_addressbook();
        $data['error'] = '';    //initialize image upload error array to empty
 
        $config['upload_path'] = './uploads/';
        $config['allowed_types'] = 'csv';
        $config['max_size'] = '1000';
 
        $this->load->library('upload', $config);
		$this->upload->initialize($config); 

 
        // If upload failed, display error
        if (!$this->upload->do_upload()) {
            $data['error'] = $this->upload->display_errors();
 
            $this->load->view('csvindex', $data);
        } else {
            $file_data = $this->upload->data();
            $file_path =  './uploads/'.$file_data['file_name'];
 
            if ($this->csvimport->get_array($file_path)) {
                $csv_array = $this->csvimport->get_array($file_path);
                foreach ($csv_array as $row) {
                    $datos_consejeras = array(
                        'codigo'=>$row['Codigo'],
						'zona'=>$zona,
						'sector'=>$row['Seccion'],
                        'nombres'=>$row['Nombre'],
                        'telefono_1'=>$row['Telefono'],
						'telefono_2'=>$row['TelCelular'],
                        'los'=>$row['Los'],
						'direccion'=>$row['Direccion1'].$row['Direccion2'].$row['Direccion3'],
						'creado_por'=>$this->session->userdata('usuario_id'),
						'fecha_creado'=>$fecha,
                    );
					
                    $this->csv_model->insert_csv_consejeras($datos_consejeras);

                    $datos_pedido = array(
                        'codigo'=>$row['Codigo'],
						'anio'=>$anio,
						'campania'=>$campania,
                        'cod'=>$row['Cod'],
						'razon'=>$row['Razon'],
						'comentarios'=>$row['Final'],
                        'fecha_ingreso'=>$fecha_ingreso,
						'creado_por'=>$this->session->userdata('usuario_id'),
						'fecha_creado'=>$fecha,
                    );
					
                    $this->csv_model->insert_csv_pedidos($datos_pedido);
                }
                $this->session->set_flashdata('success', 'La información fue cargada exitosamente');
				$this->session->set_flashdata('campania', $campania);


                redirect(base_url().'mantenimientos/cargasdrc');
				
                //echo "<pre>"; print_r($insert_data);
            } else 
                $data['error'] = "Error occured";
                $this->load->view('csvindex', $data);
            }
 
        } 
 
}
/*END OF FILE*/