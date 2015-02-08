<?php
 
class csv_model extends CI_Model {
 
    function __construct() {
        parent::__construct();
 
    }
 
    function get_addressbook() {     

        $this->db->select('b.`campania`, a.`zona` zona, a.`codigo`, a.`nombres`, b.`cod`');
        $this->db->from('consejeras a');
        $this->db->join('pedidos b', 'b.codigo = a.codigo', 'LEFT');
		$this->db->where('b.campania', 1);
		
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