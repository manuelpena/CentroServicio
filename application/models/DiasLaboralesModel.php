<?php
class DiasLaboralesModel extends CI_Model {
	

	function obtener_dias_laborales()
    {
		$this->db->select('fecha');
		$this->db->from('dias_laborales');
		$query = $this->db->get();

        return $query->result_array();
		
    }	

	function remover_fecha()
    {
			$this->db->where('fecha',  $this->input->post('fecha',true));
			$this->db->delete('dias_laborales'); 
		
    }	
	
	function guardar_fecha()
    {
			$this->db->set('fecha', $this->input->post('fecha',true));
			$this->db->insert('dias_laborales'); 
		
    }	
	
	
	
}