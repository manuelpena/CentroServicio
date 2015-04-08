<?php
class BoletasModel extends CI_Model {
	

	function guardar_boletas()
	{	
	
		$fecha_post = $this->input->post('fecha');		
		$fecha_post = str_replace('/', '-', $fecha_post);
		$fecha = date("Y-m-d", strtotime($fecha_post));	


	//guardado de informacion de boleta
	$this->db->insert('boletas', array(
	'pedido_id'=>$this->input->post('pedido_id',true),
	'banco_id'=>$this->input->post('banco_id',true),
	'referencia'=>$this->input->post('referencia',true),
	'monto'=>$this->input->post('monto',true),
	'fecha'=>$fecha,
	'observaciones'=>$this->input->post('observaciones',true),
	'creado_por'=>$this->session->userdata('usuario_id'),
	'fecha_creado'=>date('Y-m-d H:i:s'),
	));
	
	

	
	}

	function eliminar_boletas()
	{	
	

	//guardado de informacion de boleta
		$this->db->where('id', $this->input->post('id',true));
		$this->db->delete('boletas'); 
			
	

	
	}
	
}