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
		$anio = $this->input->post('anio');
		$campania = $this->input->post('campania');
		$fecha = date("Y-m-d H:i:s");
		
		$fecha_post = $this->input->post('fecha_ingreso');		
		$fecha_post = str_replace('/', '-', $fecha_post);		
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
				$cajas= 1;
                foreach ($csv_array as $row) {
              
				

				
				$consejera_existente = $this->csv_model->busqueda_consejera($row['codigo_consejera']);	
					

				if($consejera_existente>0){
				
				$datos_consejeras = array(
						'zona'=>$row['codigo_zona'],
						'sector'=>$row['seccion'],
                        'nombres'=>$row['nombre_consejera'],
                        'telefono_1'=>$row['telefono_consejera'],
						'telefono_2'=>$row['telefono_celular'],
                        'los'=>$row['los'],
						'direccion'=>$row['direccion1'].$row['direccion2']
                    );	
					 $this->csv_model->actualizacion_consejera($datos_consejeras,$row['codigo_consejera']);
				}else{
				
				$datos_consejeras = array(
                        'codigo'=>$row['codigo_consejera'],
						'zona'=>$row['codigo_zona'],
						'sector'=>$row['seccion'],
                        'nombres'=>$row['nombre_consejera'],
                        'telefono_1'=>$row['telefono_consejera'],
						'telefono_2'=>$row['telefono_celular'],
                        'los'=>$row['los'],
						'direccion'=>$row['direccion1'].$row['direccion2'],
						'creado_por'=>$this->session->userdata('usuario_id'),
						'fecha_creado'=>$fecha,
                    );				
					 $this->csv_model->insert_csv_consejeras($datos_consejeras);
				}

					
                $pedido_existente = $this->csv_model->busqueda_pedido($row['codigo_consejera'],$anio,$campania);	
				if($pedido_existente>0){

				}else{
				if($tipo_pedido==2){
				$cajas = 'Tardio';
					
				}
                $datos_pedido = array(
                        'codigo'=>$row['codigo_consejera'],
						'anio'=>$anio,
						'campania'=>$campania,
                        'cod'=>$row['monto_cod']+$row['credit_check']+$row['monto_extrafin']+$row['monto_convenio_pago']+$row['monto_vea'],
						'pod'=>$row['valor_aj'],
						'razon'=>utf8_decode($row['descripcion_razon']),
						'comentarios'=>$row['descripcion'],
                        'fecha_ingreso'=>$fecha_ingreso,
						'cajas'=>$row['cajas'],
						'los'=>$row['los'],
						'monto_facturado'=>$row['monto_facturado'],
						'ncaja'=>$cajas,
						'creado_por'=>$this->session->userdata('usuario_id'),
						'fecha_creado'=>$fecha,
						'tipo_pedido'=>$tipo_pedido,
                    );
					
                    $this->csv_model->insert_csv_pedidos($datos_pedido);				
				}	
				$zona   = 	$row['codigo_zona'];
				$cajas++;
			
                }
                $this->session->set_flashdata('success', 'La información fue cargada exitosamente');
				
				//variables para obtener datos guardados
				
				$this->session->set_flashdata('campania', $campania);
				$this->session->set_flashdata('zona', $zona);
				$this->session->set_flashdata('anio', $anio);
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