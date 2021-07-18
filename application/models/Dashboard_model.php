<?php

class Dashboard_model extends CI_Model {
    
    function count_berita()
    {
        return $this->db->get('tbl_berita')->num_rows();
    }

    function count_galeri()
    {
        return $this->db->get('tbl_galeri')->num_rows();
    }

    function count_kontak()
    {
        return $this->db->get('tbl_kontak')->num_rows();
    }

    function count_users()
    {
        return $this->db->get('tbl_users')->num_rows();
    }

    function get_berita()
    {
        $this->db->select('a.judul, a.created, a.updated, a.id, b.nama as author');
        $this->db->from('tbl_berita as a');
        $this->db->join('tbl_users as b', 'a.id_user = b.id');
        $this->db->order_by('a.id', 'DESC');

        return $this->db->get()->result();

        // return $this->db->get('tbl_berita')->result();
    }

    function get_galeri()
    {
        $this->db->select('a.judul, a.created, a.id, a.image, b.nama as author');
        $this->db->from('tbl_galeri as a');
        $this->db->join('tbl_users as b', 'a.id_user = b.id');
        $this->db->order_by('a.id', 'DESC');

        return $this->db->get()->result();

        // return $this->db->get('tbl_galeri')->result();
    }

    function get_kontak()
    {
        return $this->db->get('tbl_kontak')->result();
    }

    function get_profile()
    {
        $this->db->select('a.judul, a.id, a.created, a.updated, a.slug, b.nama as author');
        $this->db->from('tbl_profile as a');
        $this->db->join('tbl_users as b', 'a.id_user = b.id');
        $this->db->order_by('a.id', 'DESC');

        return $this->db->get()->result();

        // return $this->db->get('tbl_profile')->result();
    }

    function get_users()
    {
        return $this->db->get('tbl_users')->result();
    }

    function get_detail_kontak($id)
    {
        $this->db->where('id', $id);

        return $this->db->get('tbl_kontak')->row();
    }
}