<?php

class Auth_model extends CI_Model {

    function check_login($username, $password)
    {
        $this->db->where('username', $username);
        $this->db->where('password', $password);

        return $this->db->get('tbl_users')->row();
    }

    function get_userdata($id)
    {
        $this->db->where('id', $id);
        
        return $this->db->get('tbl_users')->row();
    }
}