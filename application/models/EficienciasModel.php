<?php
class EficienciasModel extends CI_Model {
 
    function __construct() {
        parent::__construct();
 
    }
 
    function carga_csv() {     

		$anio = $this->session->flashdata('anio');
		$campania = $this->session->flashdata('campania');
		$zona = $this->session->flashdata('zona');
		$fecha_ingreso = $this->session->flashdata('fecha_ingreso');
	
        $this->db->select('b.ncaja, b.`campania`, a.`zona` zona, a.`codigo`, a.`nombres`, b.`cod`, a.los, b.cajas');
        $this->db->from('consejeras a');
        $this->db->join('pedidos b', 'b.codigo = a.codigo', 'LEFT');
		$this->db->where('a.zona', $zona);
		$this->db->where('b.campania', $campania);
		$this->db->where('b.anio', $anio);
		$this->db->where('b.fecha_ingreso', $fecha_ingreso);

		
		/*
		$this->db->join('sistema st', 'st.id = dt.id', 'LEFT');
		$this->db->join('rol r', 'r.id = dt.id', 'LEFT');
		$this->db->where('u.usuario', $user_name);
		$this->db->where('u.password', $password);
		$this->db->where('dt.id',1);*/
        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            return $query->result_array();
        } else {
            return FALSE;
        }
    }
 
    function insert_csv_consejeras($data) {	
        $this->db->insert('consejeras_eficiencia', $data);
    }
	
	function zonas_cargadas()
    {
		$anio		=$this->input->post('anio',true);
		$campania	=$this->input->post('campania',true);	
	$query = $this->db->query("SELECT 
				anio,
				campania,
				zona,
				COUNT(codigo) as cantidad
				FROM consejeras_eficiencia WHERE anio = '$anio' AND campania = '$campania'
				GROUP BY anio, campania, zona

		");

        return $query->result_array();
		
		
    }		
	
	function eliminar_zona()
    {
		$anio		=$this->input->post('anio',true);
		$campania	=$this->input->post('campania',true);	
		$zona	=$this->input->post('zona',true);	
		
		$this->db->where('anio', $anio);
		$this->db->where('campania', $campania);
		$this->db->where('zona', $zona);
		$this->db->delete('consejeras_eficiencia'); 

        return true;
		
		
    }	
	
	
}