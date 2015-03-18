<?php
class BodegajeModel extends CI_Model {
	

	function listado_bodegaje()
    {
		$tipo_pedido = $this->input->post('tipo_pedido',true);
		$tipo_solicitud = $this->input->post('tipo_solicitud',true);
		
		$query= $this->db->query("(select 
			id,
			dia,
			if(tipo_pedido = 1,'Normal','Tardio') tipo_pedido,
			if(tipo_solicitud = 1,'Consejeras','Gerentes') tipo_solicitud,
			cobro
			from 
			bodegaje_config
			where tipo_pedido = '$tipo_pedido' AND tipo_solicitud='$tipo_solicitud' ORDER BY dia)
				");

        return $query->result_array();
		
    }	

	function buscar_bodegaje()
    {
	
		$this->db->select('id, dia, cobro');
		$this->db->from('bodegaje_config');
		$this->db->where('id', $this->input->post('id',true));
		$query = $this->db->get();

        return $query->result_array();
		
    }	

	function guardar_bodegaje()
    {
		$usuario_id = $this->session->userdata('usuario_id');
		
		$id = $this->input->post('id',true);		
		$tipo_pedido = $this->input->post('tipo_pedido',true);
		$tipo_solicitud = $this->input->post('tipo_solicitud',true);
		$dia = $this->input->post('dia',true);
		$cobro = $this->input->post('cobro',true);
		
		$fecha  = date('Y-m-d H:i:s');


		if($id==0){
		$this->db->select('id');
		$this->db->where('tipo_pedido', $tipo_pedido);
		$this->db->where('tipo_solicitud', $tipo_solicitud);
		$this->db->where('dia', $dia);
		$this->db->where('cobro', $cobro);
		$this->db->from('bodegaje_config');
		$query_configuracion = $this->db->get();

		if($query_configuracion->num_rows()>0){
			return $query_configuracion->num_rows();
			} 
		}
				
		$this->db->select('id');
		$this->db->from('bodegaje_config');
		$this->db->where('id', $id);
		$query_id = $this->db->get();		
		
   		if($query_id->num_rows()>0){
			$data = array(
						   'cobro' => $cobro,
						   'modificado_por' => $usuario_id,
						   'fecha_modificado' => $fecha
						);

			$this->db->where('id', $id);
			$this->db->update('bodegaje_config', $data); 			

		}else{
				$this->db->insert('bodegaje_config', array(
				'tipo_pedido'=>$tipo_pedido,
				'tipo_solicitud'=>$tipo_solicitud,
				'dia'=>$dia,
				'cobro'=>$cobro,
				'creado_por'=>$this->session->userdata('usuario_id'),
				'fecha_creado'=>date('Y-m-d H:i:s'),
				));			
		}
		return $this->db->affected_rows();
    }	
	
	
	function eliminar_bodegaje()
    {
		$usuario_id = $this->session->userdata('usuario_id');
		$id = $this->input->post('id',true);



				$this->db->delete('bodegaje_config', array('id' => $id)); 

				
		return $this->db->affected_rows();
    }	

	
}

