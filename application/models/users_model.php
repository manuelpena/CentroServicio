<?php

class Users_model extends CI_Model {


    /**
    * Validate the login's data with the database
    * @param string $user_name
    * @param string $password
    * @return void
    */
	function validate($user_name, $password)
	{

        $this->db->select('u.id');
        $this->db->from('usuarios u');
        $this->db->join('detalle_rol dt', 'dt.usuarios_id = u.id', 'LEFT');
		$this->db->join('sistema st', 'st.id = dt.id_sistema', 'LEFT');
		$this->db->join('rol r', 'r.id = dt.id_rol', 'LEFT');
		$this->db->where('u.usuario', $user_name);
		$this->db->where('u.password', $password);
        $query = $this->db->get();
		
		
		if($query->num_rows == 1)
		{
			return true;
			
		}else{
		
		return false;
		
		}
		
	}
	
	function datos_usuario($user_name){
	
        $this->db->select('u.id id, u.usuario usuario, dt.id, r.detalle detalle, u.imagen_url, u.descripcion');
        $this->db->from('usuarios u');
        $this->db->join('detalle_rol dt', 'dt.usuarios_id = u.id', 'LEFT');
		$this->db->join('sistema st', 'st.id = dt.id_sistema', 'LEFT');
		$this->db->join('rol r', 'r.id = dt.id_rol', 'LEFT');
		$this->db->where('u.usuario', $user_name);
        $result = $this->db->get();	

		return $result->result_array();
	}

    /**
    * Serialize the session data stored in the database, 
    * store it in a new array and return it to the controller 
    * @return array
    */
	function get_db_session_data()
	{
		$query = $this->db->select('user_data')->get('ci_sessions');
		$user = array(); /* array to store the user data we fetch */
		foreach ($query->result() as $row)
		{
		    $udata = unserialize($row->user_data);
		    /* put data in array using username as key */
		    $user['user_name'] = $udata['user_name']; 
		    $user['is_logged_in'] = $udata['is_logged_in']; 
		}
		return $user;
	}
	
    /**
    * Store the new user's data into the database
    * @return boolean - check the insert
    */	

}

