<?php
class AgenciasModel extends CI_Model {
	

	function listado_agencias()
    {
	
		$this->db->select('id, descripcion');
		$this->db->from('agencias');
		$query = $this->db->get();

        return $query->result_array();
		
    }	

	function buscar_agencia()
    {
	
		$this->db->select('id, descripcion');
		$this->db->from('agencias');
		$this->db->where('id', $this->input->post('id',true));
		$query = $this->db->get();

        return $query->result_array();
		
    }	

	function guardar_agencia()
    {
		$usuario_id = $this->session->userdata('usuario_id');
		$id = $this->input->post('id',true);
		$descripcion = $this->input->post('descripcion',true);
		$fecha  = date('Y-m-d H:i:s');
		
		$this->db->select('id');
		$this->db->from('agencias');
		$this->db->where('id', $id);
		$query_id = $this->db->get();	

		$this->db->select('id');
		$this->db->from('agencias');
		$this->db->where('descripcion', $descripcion);
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
			$this->db->update('agencias', $data); 			

				}else{
				$this->db->insert('agencias', array(
				'descripcion'=>$descripcion,
				'creado_por'=>$this->session->userdata('usuario_id'),
				'fecha_creado'=>date('Y-m-d H:i:s'),
				));			
				}
		return $this->db->affected_rows();
    }	
	
	
	function eliminar_agencia()
    {
		$usuario_id = $this->session->userdata('usuario_id');
		$id = $this->input->post('id',true);

		$query_id= $this->db->query("(SELECT
			a.`agencia_id`
			FROM
			cuadre_pilotos a
			WHERE a.`agencia_id` = '$id')
						");

     		if($query_id->num_rows()>0){
			return;
				}else{

				$this->db->delete('agencias', array('id' => $id)); 

				}
		return $this->db->affected_rows();
    }	

	
}

