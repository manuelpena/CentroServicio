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
	
	function historial_consejera_pedidos()
	
    {
		$codigo		=$this->input->post('codigo',true);
		
		$query= $this->db->query("(SELECT 
		  a.id as 'id',
		  a.`anio`,
		  a.`campania`,
		  a.`fecha_ingreso` as 'fecha_ingreso',
		  IFNULL(date((SELECT 
			c.fecha_despachado 
		  FROM
			solicitudes c 
		  WHERE c.pedido_id = a.id 
			AND c.estado = 2)),'') AS 'despachado' ,
		IF(a.estado = 3,'SI','NO') AS 'desmantelado'
		FROM
		  pedidos a 
		WHERE a.`codigo` = '$codigo')
						");

        return $query->result_array();
		
    }	

	function consulta_pedido()
	
    {
		$codigo		=$this->input->post('codigo',true);
		
		$query= $this->db->query("(SELECT 
		  a.id as 'id',
		  a.`anio`,
		  a.`campania`,
		  a.`fecha_ingreso` as 'fecha_ingreso',
		  IFNULL(date((SELECT 
			c.fecha_despachado 
		  FROM
			solicitudes c 
		  WHERE c.pedido_id = a.id 
			AND c.estado = 2)),'') AS 'despachado' ,
		IF(a.estado = 3,'SI','NO') AS 'desmantelado'
		FROM
		  pedidos a 
		WHERE a.`codigo` = '$codigo')
						");

        return $query->result_array();
		
    }	
	
}

