<?php
class csv_eficiencias extends CI_Controller {
 
    function __construct() {
        parent::__construct();
        $this->load->model('EficienciasModel');
        $this->load->library('csvimport');
    }
 
    function index() {
	
        $data['addressbook'] = $this->EficienciasModel->get_addressbook();
        $this->load->view('pilotos/cargaseficiencias', $data);
		
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
 
            $this->load->view('pilotos/cargaseficiencias', $data);
        } else {
		
            $file_data = $this->upload->data();
            $file_path =  './uploads/'.$file_data['file_name'];
 
            if ($this->csvimport->get_array($file_path)) {
                $csv_array = $this->csvimport->get_array($file_path);
				
                foreach ($csv_array as $row) {
				if(substr($row['Sector'],5,3)>0){
				$datos_consejeras = array(
                        'anio'=>$anio,
						'campania'=>$campania,
						'codigo'=>$row['Código cliente'],
						'zona'=>substr($row['Sector'],1,3),
                        'sector'=>substr($row['Sector'],5,3),
                        'creado_por'=>$this->session->userdata('usuario_id'),
						'fecha_creado'=>$fecha,
                    );				
					 $this->EficienciasModel->insert_csv_consejeras($datos_consejeras);
		

}
                }
                $this->session->set_flashdata('success', 'La información fue cargada exitosamente');
				
				//variables para obtener datos guardados
				
				$this->session->set_flashdata('campania', $campania);
				$this->session->set_flashdata('anio', $anio);


                redirect(base_url().'pilotos/cargaseficiencias');
				
                //echo "<pre>"; print_r($insert_data);
            } else 
                $data['error'] = "Error occured";
                $this->load->view('pilotos/cargaseficiencias', $data);
            }
 
        } 
 
}
/*END OF FILE*/