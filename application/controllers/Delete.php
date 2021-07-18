<?php

class Delete extends CI_Controller {
    
    function __construct()
    {
        parent::__construct();

        $this->load->model('auth_model', 'auth');
    }

    function berita($id)
    {
        if($id)
        {
            $this->db->where('id', $id);
            $this->db->delete('tbl_berita');

            $this->session->set_flashdata('success', 'Berita berhasil dihapus.');
            redirect('dashboard/berita');

        } else {

            $this->session->set_flashdata('failed', 'Berita gagal dihapus.');
            redirect('dashboard/berita');
        }
    }

    function galeri($id)
    {
        if($id)
        {
            $this->db->where('id', $id);
            $this->db->delete('tbl_galeri');

            $this->session->set_flashdata('success', 'Galeri berhasil dihapus.');
            redirect('dashboard/galeri');

        } else {

            $this->session->set_flashdata('failed', 'Galeri gagal dihapus.');
            redirect('dashboard/galeri');
        }
    }

    function profile($id)
    {
        if($id)
        {
            $this->db->where('id', $id);
            $this->db->delete('tbl_profile');

            $this->session->set_flashdata('success', 'Profile berhasil dihapus.');
            redirect('dashboard/profile');

        } else {

            $this->session->set_flashdata('failed', 'Profile gagal dihapus.');
            redirect('dashboard/profile');
        }
    }

    function kontak($id)
    {
        if($id)
        {
            $this->db->where('id', $id);
            $this->db->delete('tbl_kontak');

            $this->session->set_flashdata('success', 'Kontak berhasil dihapus.');
            redirect('dashboard/kontak');

        } else {

            $this->session->set_flashdata('failed', 'Kontak gagal dihapus.');
            redirect('dashboard/kontak');
        }
    }
}