<?php
 
class csv_model extends CI_Model {
 
    function __construct() {
        parent::__construct();
 
    }
 
    function get_addressbook() {     

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
	
        $this->db->insert('consejeras', $data);
    }

    function insert_csv_pedidos($data) {
	
        $this->db->insert('pedidos', $data);
    }
}
/*END OF FILE*/