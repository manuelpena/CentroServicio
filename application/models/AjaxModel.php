<?php

class AjaxModel extends CI_Model {
	
	function obtener_empleados()
    {
        $query = $this->db->get('ejemplo_empleado', 10);
        return $query->result_array();
    }
	
	function obtener_empleado_id($id)
    {
	
		$query = $this->db->get_where('ejemplo_empleado', array('id_empleado' => $id));

        return $query->result_array();
    }	
	
	function guardar_empleado()
	{
	
	$this->db->insert('ejemplo_empleado', array(
	'nombres'=>$this->input->post('nombres',true),
	'apellidos'=>$this->input->post('apellidos',true),
	'salario'=>$this->input->post('salario',true)
	));
	
	}

	function actualizar_datos_empleado($id)
	{
	
	
	$datos = array(
	'nombres'=>$this->input->post('nombres'),
	'apellidos'=>$this->input->post('apellidos'),
	'salario'=>$this->input->post('salario')
	);
	
	$this->db->where('id_empleado', $id);	
	$this->db->update('ejemplo_empleado', $datos);
	
	}

	function eliminar_empleado_id($id)
	{
	
		
	$this->db->where('id_empleado', $id);	
	$this->db->delete('ejemplo_empleado');
	
	}
}

