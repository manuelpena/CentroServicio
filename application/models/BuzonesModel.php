<?php
class BuzonesModel extends CI_Model {
	

	function listado_buzones()
    {
		$zona = $this->input->post('zona',true);
		$this->db->select('id ,zona , descripcion');
		$this->db->where('zona', $zona);
		$this->db->from('buzones');
		$query = $this->db->get();

        return $query->result_array();
		
    }	

	function buscar_buzon()
    {
	
		$this->db->select('id, descripcion');
		$this->db->from('buzones');
		$this->db->where('id', $this->input->post('id',true));
		$query = $this->db->get();

        return $query->result_array();
		
    }	

	function guardar_buzon()
    {
		$usuario_id = $this->session->userdata('usuario_id');
		$id = $this->input->post('id',true);
		$zona = $this->input->post('zona',true);
		$descripcion = $this->input->post('descripcion',true);
		$fecha  = date('Y-m-d H:i:s');
		
		$this->db->select('id');
		$this->db->from('buzones');
		$this->db->where('id', $id);
		$query_id = $this->db->get();	

		$this->db->select('id');
		$this->db->where('descripcion', $descripcion);
		$this->db->where('zona', $zona);
		$this->db->from('buzones');
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
			$this->db->update('buzones', $data); 			

				}else{
				$this->db->insert('buzones', array(
				'zona'=>$zona,
				'descripcion'=>$descripcion,
				'creado_por'=>$this->session->userdata('usuario_id'),
				'fecha_creado'=>date('Y-m-d H:i:s'),
				));			
				}
		return $this->db->affected_rows();
    }	
	
	
	function eliminar_buzon()
    {
		$usuario_id = $this->session->userdata('usuario_id');
		$id = $this->input->post('id',true);

		$query_id= $this->db->query("(SELECT
			a.`buzon_id`
			FROM
			solicitudes a
			WHERE a.`buzon_id` = '$id')
						");

     		if($query_id->num_rows()>0){
			return;
				}else{

				$this->db->delete('buzones', array('id' => $id)); 

				}
		return $this->db->affected_rows();
    }	

	
}

