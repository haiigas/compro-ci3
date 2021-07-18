<?php

class Homepage extends CI_Controller {
    
    function __construct()
    {
        parent::__construct();
        $this->load->model('homepage_model', 'homepage');
    }

    public function index()
    {
        $data['profile'] = $this->homepage->get_profile();
        
        $this->load->view('homepage/index', $data);
    }

    public function berita()
    {
        $data = [
            'berita' => $this->homepage->get_berita(),
            'profile' => $this->homepage->get_profile()
        ];

        $this->load->view('homepage/berita', $data);
    }

    public function detail_berita($id)
    {
        $data = [
            'detail' => $this->homepage->get_detail_berita($id),
            'profile' => $this->homepage->get_profile()
        ];

        $this->load->view('homepage/detail-berita', $data);
    } 

    public function galeri()
    {
        $data = [
            'galeri' => $this->homepage->get_galeri(),
            'profile' => $this->homepage->get_profile()
        ];

        $this->load->view('homepage/galeri', $data);
    } 

    public function detail_profile($slug)
    {
        $data = [
            'detail' => $this->homepage->get_detail_profile($slug),
            'profile' => $this->homepage->get_profile()
        ];

        $this->load->view('homepage/profile', $data);
    } 

    public function kontak()
    {
        if(isset($_POST['kirim']))
        {
            $this->form_validation->set_rules('email', 'Email', 'required');
            $this->form_validation->set_rules('nama', 'Nama Lengkap', 'required');
            $this->form_validation->set_rules('subject', 'Subjek', 'required');
            $this->form_validation->set_rules('pesan', 'Pesan', 'required');

            if ($this->form_validation->run() == TRUE)
            {
                $data = [
                    'nama' => $this->input->post('nama'),
                    'email' => $this->input->post('email'),
                    'subjek' => $this->input->post('subject'),
                    'pesan' => $this->input->post('pesan'),
                ];

                $this->db->insert('tbl_kontak', $data);
                $this->session->set_flashdata('success', 'Pesan berhasil dikirim');
                redirect('kontak');

            } else {

                $this->session->set_flashdata('failed', 'Pesan gagal dikirim');
                redirect('kontak');
            }
        } else {

            $data['profile'] = $this->homepage->get_profile();
            
            $this->load->view('homepage/kontak', $data);
        }
    }
}