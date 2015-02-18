<?php
class ConsultasVarias extends CI_Model {
	

	function listado_buzones()
    {
		$this->db->select('descripcion');
		$this->db->from('buzones');
		$query = $this->db->get();

        return $query->result_array();
		
    }	
	
	
	
}

