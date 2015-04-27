<?php
class csv_model extends CI_Model {
 
    function __construct() {
        parent::__construct();
 
    }
 
    function carga_csv() {     

        $this->db->select('b.ncaja, b.`campania`, a.`zona` zona, a.`codigo`, a.`nombres`, b.`cod`, a.los, b.cajas');
        $this->db->from('consejeras a');
        $this->db->join('pedidos b', 'b.codigo = a.codigo', 'LEFT');
		$this->db->where('a.fecha_creado >= DATE_SUB(NOW(),INTERVAL 100 SECOND)');
		$this->db->where('a.fecha_creado <=now() ');
		
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
	
	function busqueda_consejera($data){
		
		$this->db->select('id');
		$this->db->from('consejeras');
		$this->db->where('codigo', $data);
		$query = $this->db->get();
		return $query->num_rows();
		
	}

	function actualizacion_consejera($data , $codigo){
	
		$this->db->where('codigo', $codigo);
		$this->db->update('consejeras', $data); 
	
	}
	
	function busqueda_pedido($codigo ,$anio,$campania){
		$this->db->select('id');
		$this->db->where(array('codigo'=>$codigo,'anio'=>$anio,'campania'=>$campania));
		$this->db->from('pedidos'); 
		$query = $this->db->get();
		return $query->num_rows();
	}
	
	
	
	
}