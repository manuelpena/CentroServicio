<?php
class csv_tigo_money extends CI_Controller {
 
    function __construct() {
        parent::__construct();
        $this->load->model('TigoMoneyModel');
        $this->load->library('csvimport');
    }
 
    function index() {
	
        $data['addressbook'] = $this->EficienciasModel->get_addressbook();
        $this->load->view('boletas/tigomoney', $data);
		
    }
 
    function importcsv() {
		//variables
		$anio = $this->input->post('anio');
		$campania = $this->input->post('campania');
		$fecha = date("Y-m-d H:i:s");
			
	
       // $data['addressbook'] = $this->EficienciasModel->get_addressbook();
        $data['error'] = '';    //initialize image upload error array to empty
 
        $config['upload_path'] = './uploads/';
        $config['allowed_types'] = 'csv';
        $config['max_size'] = '1000';
 
        $this->load->library('upload', $config);
		$this->upload->initialize($config); 

 
        // If upload failed, display error
        if (!$this->upload->do_upload()) {
            $data['error'] = $this->upload->display_errors();
 
            $this->load->view('boletas/tigomoney', $data);
        } else {
		
            $file_data = $this->upload->data();
            $file_path =  './uploads/'.$file_data['file_name'];
			$fecha = date("Y-m-d H:i:s");
            if ($this->csvimport->get_array($file_path)) {
                $csv_array = $this->csvimport->get_array($file_path);
				
                foreach ($csv_array as $row) {
	
				
				$datos_boletas = array(
                        'fecha_pago'=>date('Y-m-d',strtotime(substr($row['Fecha de Pago'],0,4)."/".substr($row['Fecha de Pago'],4,2)."/".substr($row['Fecha de Pago'],7,2))),
						'hora_pago'=>$row['Hora de Pago'],
						'referencia'=>$row['Referencia'],
						'monto'=>$row['Monto'],
                        'MSISDN'=>$row['MSISDN'],
						'estatus'=>$row['Estatus'],
						'transaccion'=>$row['Id de Transaccion'],
						'record'=>$row['Record No.'],
						'compania'=>$row['Codigo de Compania'],
                        'creado_por'=>$this->session->userdata('usuario_id'),
						'fecha_creado'=>$fecha
                    );				
					 $this->TigoMoneyModel->insert_csv_boletas($datos_boletas);
		


                }
                $this->session->set_flashdata('success', 'La información fue cargada exitosamente');
				
				//variables para obtener datos guardados
				
				$this->session->set_flashdata('campania', $campania);
				$this->session->set_flashdata('anio', $anio);


                redirect(base_url().'boletas/tigomoney');
				
                //echo "<pre>"; print_r($insert_data);
            } else 
                $data['error'] = "Error occured";
                $this->load->view('boletas/tigomoney', $data);
            }
 
        } 
 
}
/*END OF FILE*/