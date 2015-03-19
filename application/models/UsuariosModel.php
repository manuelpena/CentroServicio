<?php
class UsuariosModel extends CI_Model {
	

	function listado_usuarios()
    {
		
		
		
		$query= $this->db->query("(select
				a.id,
				a.descripcion,
				c.detalle,
				if(a.estado=1,'Activo','Inactivo') as estado
				from 
				usuarios a 
				inner join detalle_rol b on b.usuarios_id = a.id
				inner join rol c on c.id = b.id_rol

				)
				");

        return $query->result_array();
		
    }	

	function listado_roles()
    {
	
		$this->db->select('id, detalle');
		$this->db->from('rol');
		$query = $this->db->get();

        return $query->result_array();
		
    }		
	function buscar_usuario()
    {
			$id = $this->input->post('id',true);
		$query= $this->db->query("(SELECT
				a.`id`,
				a.`usuario`,
				a.`descripcion`,
				a.`password`,
				c.`id` rol_id,
				c.`detalle`,
				a.estado
				FROM 
				usuarios a
				INNER JOIN detalle_rol b ON b.`usuarios_id` = a.`id`
				INNER JOIN rol c ON c.`id` = b.`id_rol`
						WHERE a.id= '$id'
				)
				");


        return $query->result_array();
		
    }	

	function guardar_usuario()
    {
		$usuario_id = $this->session->userdata('usuario_id');
		$id = $this->input->post('id',true);
		$usuario = $this->input->post('usuario',true);
		$descripcion = $this->input->post('descripcion_usuario',true);

		$estado = $this->input->post('estado',true);
		$rol = $this->input->post('rol',true);
		$fecha  = date('Y-m-d H:i:s');
		
		$this->db->select('id');
		$this->db->from('usuarios');
		$this->db->where('id', $id);
		$query_id = $this->db->get();	
		if($id==0){
		$this->db->select('id');
		$this->db->from('usuarios');
		$this->db->where('usuario', $usuario);
		$query_nombre = $this->db->get();
			if($query_nombre->num_rows()>0){
			return false;
			}}
/*
		$query_id= $this->db->query("(SELECT
			a.`banco_id`
			FROM
			boletas a
			WHERE a.`banco_id` = '$id')
						");
*/
     		if($query_id->num_rows()>0){
			$data = array(
						   'usuario' => $usuario,	
						   'descripcion' => $descripcion,		
						   'estado' => $estado,		
						   'modificado_por' => $usuario_id,
						   'fecha_modificado' => $fecha
						);

			$this->db->where('id', $id);
			$this->db->update('usuarios', $data); 	

			$data_rol = array(
						   'id_rol' => $rol,
						   'modificado_por' => $usuario_id,
						   'fecha_modificado' => $fecha
						);

			$this->db->where('usuarios_id', $id);
			$this->db->update('detalle_rol', $data_rol); 			

				}else{
				$contrasenia = $this->input->post('contrasenia',true);				
				$this->db->insert('usuarios', array(
				'usuario'=>$usuario,
				'password'=>md5($contrasenia),
				'descripcion'=>$descripcion,
				'estado'=>$estado,
				'creado_por'=>$this->session->userdata('usuario_id'),
				'fecha_creado'=>date('Y-m-d H:i:s'),
				));	

				$this->db->insert('detalle_rol', array(
				'id_rol'=>$rol,
				'usuarios_id'=> $this->db->insert_id(),
				'id_sistema'=> 1,
				'creado_por'=>$this->session->userdata('usuario_id'),
				'fecha_creado'=>date('Y-m-d H:i:s'),
				));			
				}
		return $this->db->affected_rows();
    }	

	
	function cambiar_contrasenia()
    {
		$usuario_id = $this->session->userdata('usuario_id');
		$id = $this->input->post('id',true);
		$contrasenia = $this->input->post('contrasenia',true);
		$fecha  = date('Y-m-d H:i:s');
			$data_rol = array(
						   'password' => md5($contrasenia),
						   'modificado_por' => $usuario_id,
						   'fecha_modificado' => $fecha
						);

			$this->db->where('id', $id);
			$this->db->update('usuarios', $data_rol); 	
			
		return $this->db->affected_rows();
    }	
	
}

