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
		
	if ($this->input->post('exonerar_bodegaje',true)==1) {
	
	$bodegaje = 0;

	} else {

	$bodegaje = $this->input->post('bodegaje',true);
	
	}
	
	//guardado de solicitud
	$this->db->insert('solicitudes', array(
	'pedido_id'=>$this->input->post('pedido_id',true),
	'solicitante'=>$this->input->post('solicitante',true),
	'documento'=>$this->input->post('documento',true),
	'autorizacion'=>$this->input->post('autorizacion',true),
	'tipo_solicitud'=>1,
	'bodegaje'=>$bodegaje,
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

	
	//Obtiene el ID del pedido de la solicitud
		$this->db->select('pedido_id');
		$this->db->from('solicitudes');
		$this->db->where('id', $id);
		$query = $this->db->get();
		
		foreach ($query->result() as $row)
		{

		$pedido_id =  $row->pedido_id;
		}
		
	//Elimina la solicitud

	$this->db->where('id', $id);
	$this->db->delete('solicitudes'); 
	
	
	//Cambia de estado el pedido	
	
	$data = array(
               'estado' => 1,
    );

	$this->db->where('id', $pedido_id );
	$this->db->update('pedidos', $data); 
	
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
	

	
		$this->db->select('id');
		$this->db->from('solicitudes');
		$this->db->where('pedido_id', $this->input->post('pedido_id',true));
		$estados = array(1,2,3);
		$this->db->where_in('estado', $estados);		
		$query = $this->db->get();
		
	if($query->num_rows()>0){
	return;
	}else{	
	if($this->input->post('tipo_solicitud',true)==3){
	
		$this->db->select('id');
		$this->db->from('buzones');
		$this->db->where('descripcion', $this->input->post('buzon',true));
		$query = $this->db->get();
		foreach ($query->result() as $row)
		{
			
		$buzon =  $row->id;
		
		}
	$bodegaje=0;	
	}else{
	$buzon = $this->input->post('buzon',true);
	$bodegaje=$this->input->post('cobro',true);	
	}
	
	
	
	//guardado de solicitud
	$this->db->insert('solicitudes', array(
	'pedido_id'=>$this->input->post('pedido_id',true),
	'solicitante'=>$this->input->post('solicitante',true),
	'autorizacion'=>$this->input->post('autorizacion',true),
	'tipo_solicitud'=>$this->input->post('tipo_solicitud',true),
	'bodegaje'=>$bodegaje,
	'buzon_id'=>$buzon,
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
}

