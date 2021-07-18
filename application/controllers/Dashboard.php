<?php

class Dashboard extends CI_Controller {
    
    function __construct()
    {
        parent::__construct();
        
        $this->load->model('auth_model', 'auth');
        $this->load->model('dashboard_model', 'dashboard');
    }

    public function index()
    {
        if($this->session->userdata('id'))
        {
            $data = [
                'berita' => $this->dashboard->count_berita(),
                'galeri' => $this->dashboard->count_galeri(),
                'kontak' => $this->dashboard->count_kontak(),
                'pengguna' => $this->dashboard->count_users(),
                'userdata' => $this->auth->get_userdata($this->session->userdata('id'))
            ];

            $this->load->view('dashboard/index', $data);

        } else {
            redirect('auth/login');
        }
    }

    public function berita()
    {
        if($this->session->userdata('id'))
        {
            $data = [
                'berita' => $this->dashboard->get_berita(),
                'userdata' => $this->auth->get_userdata($this->session->userdata('id'))
            ];

            $this->load->view('dashboard/berita', $data);
        } else {
            redirect('auth/login');
        }
    }

    public function galeri()
    {
        if($this->session->userdata('id'))
        {
            $data = [
                'userdata' => $this->auth->get_userdata($this->session->userdata('id')),
                'galeri' => $this->dashboard->get_galeri(),
            ];

            $this->load->view('dashboard/galeri', $data);
        } else {
            redirect('auth/login');
        }
    }

    public function kontak()
    {
        if($this->session->userdata('id'))
        {
            $data = [
                'userdata' => $this->auth->get_userdata($this->session->userdata('id')),
                'kontak' => $this->dashboard->get_kontak()
            ];

            $this->load->view('dashboard/kontak', $data);
        } else {
            redirect('auth/login');
        }
    }
    
    public function profile()
    {
        if($this->session->userdata('id'))
        {
            $data = [
                'userdata' => $this->auth->get_userdata($this->session->userdata('id')),
                'profile' => $this->dashboard->get_profile(),
            ];

            $this->load->view('dashboard/profile', $data);
        } else {
            redirect('auth/login');
        }
    }
    
    public function pengguna()
    {
        if($this->session->userdata('id'))
        {
            $data = [
                'userdata' => $this->auth->get_userdata($this->session->userdata('id')),
                'pengguna' => $this->dashboard->get_users()
            ];

            $this->load->view('dashboard/pengguna', $data);
        } else {
            redirect('auth/login');
        }
    }

    public function read_kontak($id)
    {
        if($this->session->userdata('id'))
        {
            $data = [
                'detail' => $this->dashboard->get_detail_kontak($id),
                'userdata' => $this->auth->get_userdata($this->session->userdata('id')),
            ];

            $this->load->view('dashboard/read-kontak', $data);
        } else {
            redirect('auth/login');
        }
    } 
}
