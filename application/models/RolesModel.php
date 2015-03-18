<?php
class RolesModel extends CI_Model {
	

	function listado_roles()
    {
		$zona = $this->input->post('zona',true);
		$this->db->select('id ,detalle');
		$this->db->from('rol');
		$query = $this->db->get();

        return $query->result_array();
		
    }	

	function listado_menus()
    {
		$this->db->select('id ,descripcion');
		$this->db->from('menus');
		$query = $this->db->get();

        return $query->result_array();
		
    }	

	function listado_paginas()
    {
		$id = $this->input->post('id',true);
		$this->db->select('id ,descripcion');
		$this->db->where('menu_id',$id);
		$this->db->from('paginas');
		$query = $this->db->get();

        return $query->result_array();
		
    }	

	function buscar_rol()
    {
	
	$id = $this->input->post('id',true);
	$query= $this->db->query("(SELECT 
	b.`id`,
	d.detalle,
	c.`descripcion` menu,
	b.`descripcion` pagina
	FROM
	roles_paginas a
	INNER JOIN paginas b ON a.`pagina_id` = b.`id`
	INNER JOIN menus c ON c.`id` = b.`menu_id`
INNER JOIN rol d on d.id = a.rol_id
	WHERE a.`rol_id` = '$id')
			");

        return $query->result_array();
		
    }	

	function guardar_pagina()
    {
		$usuario_id = $this->session->userdata('usuario_id');
		$pagina_id = $this->input->post('pagina_id',true);
		$rol_id = $this->input->post('id',true);
		
		$fecha  = date('Y-m-d H:i:s');
		
		$this->db->select('id');
		$this->db->from('roles_paginas');
		$this->db->where('pagina_id', $pagina_id);
		$this->db->where('rol_id', $rol_id);
		$query_id = $this->db->get();	

/*
		$query_id= $this->db->query("(SELECT
			a.`banco_id`
			FROM
			boletas a
			WHERE a.`banco_id` = '$id')
						");
*/
     		if($query_id->num_rows()>0){
			return false;
				}else{
				$this->db->insert('roles_paginas', array(
				'pagina_id'=>$pagina_id,
				'rol_id'=>$rol_id,
				'creado_por'=>$this->session->userdata('usuario_id'),
				'fecha_creado'=>date('Y-m-d H:i:s'),
				));			
				}
		return $this->db->affected_rows();
    }	

	function guardar_rol()
    {
		$usuario_id = $this->session->userdata('usuario_id');
		$descripcion = $this->input->post('descripcion',true);
		$id = $this->input->post('id',true);
		
		$fecha  = date('Y-m-d H:i:s');
		
		$this->db->select('id');
		$this->db->from('rol');
		$this->db->where('id', $id);
		$query_id = $this->db->get();	

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
						   'detalle' => $descripcion,
						   'modificado_por' => $usuario_id,
						   'fecha_modificado' => $fecha
						);

			$this->db->where('id', $id);
			$this->db->update('rol', $data); 
			return $this->db->affected_rows();			
				}else{				
				$this->db->insert('rol', array(
				'detalle'=>$descripcion,
				'creado_por'=>$this->session->userdata('usuario_id'),
				'fecha_creado'=>date('Y-m-d H:i:s'),
				));	
				return $this->db->insert_id();	
				}
	
    }	
	
	
	function eliminar_pagina()
    {
		$usuario_id = $this->session->userdata('usuario_id');
		$pagina_id = $this->input->post('pagina_id',true);
		$rol_id = $this->input->post('rol_id',true);


				$this->db->delete('roles_paginas', array('pagina_id' => $pagina_id,'rol_id' => $rol_id)); 

			
		return $this->db->affected_rows();
    }	


	function eliminar_rol()
    {

		$id = $this->input->post('id',true);


		$query_id= $this->db->query("(SELECT id from detalle_rol where id_rol = '$id')
						");

     		if($query_id->num_rows()>0){
			return;
				}else{

				$this->db->delete('rol', array('id' => $id)); 
				$this->db->delete('roles_paginas', array('rol_id' => $id)); 

				}

			
		return $this->db->affected_rows();
    }	

	
}

