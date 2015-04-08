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

	function listado_bancos()
    {
		$this->db->select('id, descripcion');
		$this->db->from('bancos');
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
	function buscar_bodegaje()
	
    {
		$desde = $this->input->post('desde');		
		$desde = str_replace('/', '-', $desde);
		$fecha_inicio = date("Y-m-d", strtotime($desde));
		$hasta = $this->input->post('hasta');	
		$hasta = str_replace('/', '-', $hasta);		
		$fecha_fin = date("Y-m-d", strtotime($hasta));
		
		$query= $this->db->query("SELECT 
  b.`id`,
  b.`descripcion`,
  a.`fecha_creado`,
  SUM(a.`exoneracion`) AS exoneracion,
  SUM(
    IF(
      a.`tipo_solicitud` = 1,
      a.`bodegaje`,
      0
    )
  ) consejeras,
  SUM(
    IF(
      a.`tipo_solicitud` = 2,
      a.`bodegaje`,
      0
    )
  ) gerentes 
FROM
  solicitudes a 
  INNER JOIN usuarios b 
    ON b.`id` = a.`creado_por` 
WHERE DATE(a.`fecha_creado`) >= '$fecha_inicio'
  AND DATE(a.`fecha_creado`) <= '$fecha_fin'	
GROUP BY b.`id`,
  b.`descripcion` 

						");

        return $query->result_array();
		
    }	

	function consulta_pedido()
	
    {
		$pedido_id		=$this->input->post('pedido_id',true);
		
		$query= $this->db->query("(SELECT 
			  a.`cajas`,
			  a.`comentarios`,
			  a.`cod`,
			  a.`pod`,
			  b.`bodegaje`,
			  b.`autorizacion`,
			  if(b.`exoneracion`=1,'SI','NO') as exoneracion,
			  b.`solicitante`,
			  b.`documento`
			FROM
			  pedidos a 
			  LEFT JOIN solicitudes b 
				ON b.`pedido_id` = a.`id` 
				WHERE a.`id` = '$pedido_id')
						");

        return $query->result_array();
		
    }	
		
	function obtener_consejera($codigo)
    {
	

		$this->db->select('b.id pedido_id, a.`codigo` codigo,a.`nombres`,a.`direccion`,a.`zona`,a.`sector`,b.`cajas`,b.`campania`,b.`comentarios`,b.`cod`,b.`pod`');
		$this->db->from('consejeras a');
		$this->db->join('pedidos b', 'b.codigo = a.codigo', 'LEFT');
		$this->db->where('a.codigo', $codigo);
		$this->db->where('b.estado <', 3);
		$query = $this->db->get();

        return $query->result_array();
		
		
    }	
	
}

