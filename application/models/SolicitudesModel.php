<?php
class SolicitudesModel extends CI_Model {
	

	function obtener_consejera($codigo)
    {
		$this->db->select('b.id pedido_id, a.`codigo` codigo,a.`nombres`,a.`direccion`,a.`zona`,a.`sector`,b.`cajas`,b.`campania`,b.`comentarios`,b.`cod`,b.`pod`');
		$this->db->from('consejeras a');
		$this->db->join('pedidos b', 'b.codigo = a.codigo', 'LEFT');
		$this->db->where('a.codigo', $codigo);
		$this->db->where('b.estado', 1);
		$query = $this->db->get();

        return $query->result_array();
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
	
	
	
	function cancelar_solicitud($id)
	{
	
	$data = array(
               'estado' => 3,
    );

	$this->db->where('id', $id);
	$this->db->update('solicitudes', $data); 
	
	
	}	

	function despachar($id)
	{
	
	$data = array(
               'estado' => 2,
    );

	$this->db->where('id', $id);
	$this->db->update('solicitudes', $data); 
	
	
	}	
	
	function guardar_solicitudes_buzones()
	{
	
	
	
	//guardado de solicitud
	$this->db->insert('solicitudes', array(
	'pedido_id'=>$this->input->post('pedido_id',true),
	'solicitante'=>$this->input->post('solicitante',true),
	'autorizacion'=>$this->input->post('autorizacion',true),
	'tipo_solicitud'=>2,
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

