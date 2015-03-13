<?php
class PilotosModel extends CI_Model {
	

	function listado_adicionales()
    {
	
		$this->db->select('id,anio,campania,descripcion');
		$this->db->from('adicionales');
		$this->db->where('anio', $this->input->post('anio',true));
		$this->db->where('campania', $this->input->post('campania',true));
		$query = $this->db->get();

        return $query->result_array();
		
    }	
	function eliminar_detalle()
    {
	
	$this->db->delete('adicionales_pilotos', array('id' => $this->input->post('id',true))); 
	$this->db->delete('cuadre_pilotos', array('id' => $this->input->post('id',true))); 

        return $query->result_array();
		
    }	

	function obtener_pilotos()
    {
	
	$anio = $this->input->post('anio',true);
	$campania = $this->input->post('campania',true);
	$zona = $this->input->post('zona',true);
	
		$query= $this->db->query("SELECT
				a.id,
				a.anio,
				a.campania,
				a.zona,
				a.piloto as 'piloto',
				a.pedidos,
				a.cajas,
				d.descripcion as 'agencia',
				SUM(b.cantidad) as 'cantidad'
				FROM
				cuadre_pilotos a
				INNER JOIN adicionales_pilotos b ON a.id = b.cuadre_piloto_id
				INNER JOIN adicionales c ON c.id = b.adicional_id	
				INNER JOIN agencias d ON d.id = a.agencia_id				
				WHERE a.campania  = '$campania' AND a.anio = '$anio' AND a.zona = '$zona'
				GROUP BY a.id, a.anio, a.campania
				");

        return $query->result_array();
		
    }	

	function detalle_piloto_cuadre()
    {
	
	$id = $this->input->post('id',true);

	
		$query= $this->db->query("SELECT
				a.id,
				a.`piloto`,
				a.`fecha_cuadre`,
				a.`agencia_id`,
				a.pedidos, 
				a.cajas, 
				a.`entrada`,
				a.`salida`,
				a.`observaciones`				
			FROM cuadre_pilotos a
			WHERE id = '$id'
				");

        return $query->result_array();
		
    }	
	
	function detalle_piloto_adicionales()
    {
	
	$id = $this->input->post('id',true);

	
		$query= $this->db->query("SELECT
				a.id,
				a.`piloto`,
				c.`descripcion`,
				b.`cantidad`
								
				FROM cuadre_pilotos a
				INNER JOIN adicionales_pilotos b ON a.`id` = b.`cuadre_piloto_id`
				INNER JOIN adicionales c ON c.`id` = b.`adicional_id`
				WHERE a.id  = '$id'
				");

        return $query->result_array();
		
    }	

	function guardar_piloto()
    {
	
		$fecha_post = $this->input->post('fecha');		
		$fecha = date("Y-m-d", strtotime($fecha_post));	

		$this->db->select('id');
		$this->db->from('cuadre_pilotos');
		$this->db->where('anio', $this->input->post('anio',true));
		$this->db->where('campania', $this->input->post('campania',true));
		$this->db->where('piloto', $this->input->post('piloto',true));
		$this->db->where('zona', $this->input->post('zona',true));
		$query = $this->db->get();
		
		if($query->num_rows()>0){
		return 0;
		}else{
		//guardado de informacion del cuadre de piloto
		$this->db->insert('cuadre_pilotos', array(
		'anio'=>$this->input->post('anio',true),
		'campania'=>$this->input->post('campania',true),
		'piloto'=>$this->input->post('piloto',true),
		'pedidos'=>$this->input->post('pedidos',true),
		'cajas'=>$this->input->post('cajas',true),
		'zona'=>$this->input->post('zona',true),
		'entrada'=>$this->input->post('entrada',true),
		'salida'=>$this->input->post('salida',true),
		'agencia_id'=>$this->input->post('agencia',true),
		'fecha_cuadre'=>$fecha,
		'observaciones'=>$this->input->post('observaciones',true),
		'creado_por'=>$this->session->userdata('usuario_id'),
		'fecha_creado'=>date('Y-m-d H:i:s'),
		));
		return $this->db->insert_id();
		}
		 
    }	

	function guardar_adicionales()
    {
	
		//guardado de informacion de adicionales
		$this->db->insert('adicionales_pilotos', array(
		'adicional_id'=>$this->input->post('adicional',true),
		'cuadre_piloto_id'=>$this->input->post('id',true),
		'cantidad'=>$this->input->post('cantidad',true),
		'creado_por'=>$this->session->userdata('usuario_id'),
		'fecha_creado'=>date('Y-m-d H:i:s'),
		));
		return $this->db->insert_id();

		 
    }	

	
}

