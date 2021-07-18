<?php

class Homepage_model extends CI_Model {
    
    function get_berita()
    {
        $this->db->select('a.*, b.nama as author');
        $this->db->from('tbl_berita as a');
        $this->db->join('tbl_users as b', 'a.id_user = b.id');
        $this->db->order_by('a.id', 'DESC');

        return $this->db->get()->result();
    }

    function get_detail_berita($id)
    {
        $this->db->where('id', $id);

        return $this->db->get('tbl_berita')->row();
    }

    function get_galeri()
    {
        return $this->db->get('tbl_galeri')->result();
    }

    function get_profile()
    {
        return $this->db->get('tbl_profile')->result();
    }

    function get_detail_profile($slug)
    {
        $this->db->where('slug', $slug);

        return $this->db->get('tbl_profile')->row();
    }
}