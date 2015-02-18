<?php
class DesmanteladosModel extends CI_Model {
	

	function generar_desmantelado()
    {
	
		$zona		=$this->input->post('zona',true);
		$anio		=$this->input->post('anio',true);
		$campania	=$this->input->post('campania',true);
		$this->db->query("UPDATE  
		pedidos a SET  a.estado = 3 
		WHERE a.anio = '$anio'   
		AND a.campania = '$campania'   
		AND a.estado = 1  
		AND a.codigo IN   
		(SELECT 
		b.codigo 
		FROM
		consejeras b 
		WHERE b.zona = '$zona') ;

		");
		
    }	
	
	function guardar_solicitud()
	{
	
	//guardado de solicitud
	$this->db->insert('solicitudes', array(
	'pedido_id'=>$this->input->post('pedido_id',true),
	'solicitante'=>$this->input->post('solicitante',true),
	'documento'=>$this->input->post('documento',true),
	'autorizacion'=>$this->input->post('autorizacion',true),
	'tipo_solicitud'=>1,
	'bodegaje'=>1,
	'estado'=>1,
	'exoneracion'=>1,
	'creado_por'=>$this->session->userdata('usuario_id'),
	'fecha_creado'=>date('Y-m-d H:i:s'),
	));
	
	//cambio de estado de pedido 
	
	$data = array(
               'estado' => 2,
    );

	$this->db->where('id', $this->input->post('pedido_id',true));
	$this->db->update('pedidos', $data); 
	
	
	}
	
}

