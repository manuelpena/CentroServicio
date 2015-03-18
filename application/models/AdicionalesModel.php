<?php
class AdicionalesModel extends CI_Model {
	

	function listado_adicionales()
    {
		
		
		
		$this->db->select('id,anio,campania,descripcion');
		$this->db->where('campania', $this->input->post('campania',true));
		$this->db->where('anio', $this->input->post('anio',true));
		$this->db->from('adicionales');
		$query = $this->db->get();

        return $query->result_array();
		
    }	
	
	function buscar_adicional()
    {
	
		$this->db->select('id, descripcion');
		$this->db->from('adicionales');
		$this->db->where('id', $this->input->post('id',true));
		$query = $this->db->get();

        return $query->result_array();
		
    }	

	function guardar_adicional()
    {
		$usuario_id = $this->session->userdata('usuario_id');
		$id = $this->input->post('id',true);
		$anio = $this->input->post('anio',true);
		$campania = $this->input->post('campania',true);
		$descripcion = $this->input->post('descripcion',true);
		$fecha  = date('Y-m-d H:i:s');
		
		$this->db->select('id');
		$this->db->from('adicionales');
		$this->db->where('id', $id);
		$query_id = $this->db->get();	

		$this->db->select('id');
		$this->db->from('adicionales');
		$this->db->where('descripcion', $descripcion);
		$this->db->where('anio', $anio);
		$this->db->where('campania', $campania);
		$query_nombre = $this->db->get();
			if($query_nombre->num_rows()>0){
			return false;
			}
/*
		$query_id= $this->db->query("(SELECT
			a.`banco_id`
			FROM
			boletas a
			WHERE a.`banco_id` = '$id')
						");
*/
     		if($query_id->num_rows()>0){
			$data = array(
						   'descripcion' => $descripcion,
						   'modificado_por' => $usuario_id,
						   'fecha_modificado' => $fecha
						);

			$this->db->where('id', $id);
			$this->db->update('adicionales', $data); 			

				}else{
				$this->db->insert('adicionales', array(
				'descripcion'=>$descripcion,
				'anio'=>$anio,
				'campania'=>$campania,
				'creado_por'=>$this->session->userdata('usuario_id'),
				'fecha_creado'=>date('Y-m-d H:i:s'),
				));			
				}
		return $this->db->affected_rows();
    }	

	
	function eliminar_adicional()
    {
		$usuario_id = $this->session->userdata('usuario_id');
		$id = $this->input->post('id',true);

		$query_id= $this->db->query("(SELECT
			a.`adicional_id`
			FROM
			adicionales_pilotos a
			WHERE a.`adicional_id` = '$id')
						");

     		if($query_id->num_rows()>0){
			return;
				}else{

				$this->db->delete('adicionales', array('id' => $id)); 

				}
		return $this->db->affected_rows();
    }	
	
}

