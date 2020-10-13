<?php
	class M_auth extends CI_Model{

    //Login Admin
    function cek_login($table,$where){        
        return $this->db->get_where($table,$where);
        }
    }
?>