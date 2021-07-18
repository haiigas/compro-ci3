<?php

class Update_model extends CI_Model {
    
    function get_berita($id)
    {
        $this->db->where('id', $id);

        return $this->db->get('tbl_berita')->row();
    }

    function get_galeri($id)
    {
        $this->db->where('id', $id);

        return $this->db->get('tbl_galeri')->row();
    }

    function get_profile($id)
    {
        $this->db->where('id', $id);

        return $this->db->get('tbl_profile')->row();
    }

    function get_users($id)
    {
        $this->db->where('id', $id);

        return $this->db->get('tbl_users')->row();
    }
}