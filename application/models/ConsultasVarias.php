<?php
class ConsultasVarias extends CI_Model {
	

	function listado_buzones()
    {
		$this->db->select('descripcion');
		$this->db->from('buzones');
		$this->db->where('zona', $this->input->post('zona',true));
		$query = $this->db->get();

        return $query->result_array();
		
    }	

	function calculo_bodegaje()
    {
		$tipo_solicitud		=$this->input->post('tipo_solicitud',true);
		$pedido_id		=$this->input->post('pedido_id',true);
		$query= $this->db->query("(SELECT 
		  (SELECT 
			COUNT(*) 
		  FROM
			dias_laborales b
		  WHERE b.fecha >= a.fecha_ingreso 
			AND b.fecha <= CURDATE()) Dias ,
			(SELECT 
			c.cobro
			FROM 
			bodegaje_config c
		WHERE c.dia =  (SELECT 
			COUNT(*) 
		  FROM
			dias_laborales b
		  WHERE b.fecha >= a.fecha_ingreso 
			AND b.fecha <= CURDATE())   AND c.tipo_pedido = a.tipo_pedido AND c.tipo_solicitud = '$tipo_solicitud') Cobro
		FROM
		  pedidos a
		WHERE id = '$pedido_id')
				");
		 return $query->result_array();
		
    }	
	
	
	
}

