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

	function listado_filtros()
    {
		$opcion		=$this->input->post('opcion',true);
		if($opcion=='Division'){
		$query = $this->db->query("SELECT 
			DISTINCT(a.`division`) as descripcion
			FROM 
			zonas  a
		");
		}else{
		$query = $this->db->query("SELECT 
			a.`zona` as descripcion
			FROM 
			zonas  a
			ORDER BY a.zona
		");		
		}
        return $query->result_array();
		
		
    }	
	function buscar_eficiencias()
    {
		$anio		=$this->input->post('anio',true);
		$campania	=$this->input->post('campania',true);
		$filtro		=$this->input->post('filtro',true);
		$opcion		=$this->input->post('opcion',true);
		
		if($campania == 'Acumulado'){
		$where = "a.anio =".$anio;
		$campania = '';
		}else{
		$where = "a.anio =".$anio." AND a.campania= ".$campania;

		$campania = 		"	AND c.campania = a.campania ";		
		}

		
		if($opcion=='Division'){
		$query = $this->db->query("SELECT 
			  a.anio,
			  a.campania,
			  e.zona descripcion,
			  (SELECT 
				COUNT(b.id) 
			  FROM
				consejeras b 
				INNER JOIN pedidos c 
				  ON c.codigo = b.codigo 
				  INNER JOIN zonas r ON r.zona = b.zona
			  WHERE e.`division` = r.division
				AND c.campania = a.campania 
				AND b.zona = a.zona
				AND c.anio = a.anio) AS devolucion,
			  COUNT(a.codigo) AS eficiencia 
			FROM
			  consejeras_eficiencia a 
			  INNER JOIN zonas e ON e.`zona` = a.`zona`
			WHERE  $where AND e.division = '$filtro'
			GROUP BY a.anio, e.zona
		");
		}elseif($opcion=='Zona'){
		$query = $this->db->query("SELECT 
				  a.anio,
				  a.campania,
				  a.zona,
				  a.sector descripcion,
				  (SELECT 
					COUNT(b.id) 
				  FROM
					consejeras b 
					INNER JOIN pedidos c 
					  ON c.codigo = b.codigo 
				  WHERE b.zona = a.zona 
				  $campania
					AND a.`sector` = b.sector 
						 AND c.anio = a.anio) AS devolucion,
				  COUNT(a.codigo) AS eficiencia 
				FROM   consejeras_eficiencia a WHERE $where AND a.zona = $filtro
				GROUP BY 
				a.anio,
				  a.sector 
		");		
		}elseif($opcion=='Pais'){
		$query = $this->db->query("SELECT 
				a.anio,
				a.campania descripcion,
				a.campania ,
				(SELECT 
				COUNT(b.id) 
				FROM
				consejeras b 
				INNER JOIN pedidos c 
				ON c.codigo = b.codigo 
				INNER JOIN zonas r ON r.zona = b.zona
				WHERE e.`division` = r.division
				AND c.campania = a.campania 
				AND b.zona = a.zona
				AND c.anio = a.anio) AS devolucion,
				COUNT(a.codigo) AS eficiencia 
				FROM
				consejeras_eficiencia a 
				INNER JOIN zonas e ON e.`zona` = a.`zona`
				WHERE $where
				GROUP BY a.anio,
				a.campania
		");		
		}
		
        return $query->result_array();
		
		
    }		
	
	
}