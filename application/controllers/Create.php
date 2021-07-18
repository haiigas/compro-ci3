<?php

class Create extends CI_Controller {
    
    function __construct()
    {
        parent::__construct();

        $this->load->model('auth_model', 'auth');
    }

    function berita()
    {
        if($this->session->userdata('id'))
        {
            if(isset($_POST['tambah']))
            {
                $this->form_validation->set_rules('judul', 'Judul', 'required');
                $this->form_validation->set_rules('konten', 'Konten', 'required');

                $config['upload_path']          = './upload/';
                $config['allowed_types']        = 'gif|jpg|png|jpeg';
                $config['max_size']             = 0;
                $config['max_width']            = 0;
                $config['max_height']           = 0;
                $config['remove_spaces']        = TRUE;
                $config['encrypt_name']         = TRUE;

                $this->load->library('upload', $config);
                
                if ($this->form_validation->run() == TRUE AND $this->upload->do_upload('gambar'))
                {

                    $data = [
                        'id_user' => $this->session->userdata('id'),
                        'judul' => $this->input->post('judul'),
                        'konten' => $this->input->post('konten'),
                        'image' => $this->upload->data('file_name')
                    ];

                    // var_dump($data);
                    // exit();

                    $this->db->insert('tbl_berita', $data);
                    $this->session->set_flashdata('success', 'Berita berhasil dipublikasi.');
                    redirect('dashboard/berita');

                } else {

                    $this->session->set_flashdata('failed', 'Harap isi semua data.');
                    redirect('create/berita');
                }
                
            } else {

                $data = [
                    'userdata' => $this->auth->get_userdata($this->session->userdata('id'))
                ];

                $this->load->view('dashboard/create/berita', $data);
            }
        } else {
            redirect('auth/login');
        }
    }

    function galeri()
    {
        if($this->session->userdata('id'))
        {
            if(isset($_POST['unggah']))
            {
                $this->form_validation->set_rules('judul', 'Judul', 'required');

                $config['upload_path']          = './upload/';
                $config['allowed_types']        = 'gif|jpg|png|jpeg';
                $config['max_size']             = 0;
                $config['max_width']            = 0;
                $config['max_height']           = 0;
                $config['remove_spaces']        = TRUE;
                $config['encrypt_name']         = TRUE;

                $this->load->library('upload', $config);
                
                if ($this->form_validation->run() == TRUE AND $this->upload->do_upload('gambar'))
                {
                    $data = [
                        'id_user' => $this->session->userdata('id'),
                        'judul' => $this->input->post('judul'),
                        'image' => $this->upload->data('file_name')
                    ];

                    // var_dump($data);
                    // exit();

                    $this->db->insert('tbl_galeri', $data);
                    $this->session->set_flashdata('success', 'Galeri berhasil dipublikasi.');
                    redirect('dashboard/galeri');

                } else {

                    $this->session->set_flashdata('failed', 'Harap isi semua data.');
                    redirect('dashboard/galeri');
                }
                
            } else {

                $data = [
                    'userdata' => $this->auth->get_userdata($this->session->userdata('id'))
                ];

                $this->load->view('dashboard/create/berita', $data);
            }
        } else {
            redirect('auth/login');
        }
    }

    function profile()
    {
        if($this->session->userdata('id'))
        {
            if(isset($_POST['tambah']))
            {
                $this->form_validation->set_rules('judul', 'Judul', 'required');
                $this->form_validation->set_rules('slug', 'Slug', 'required');
                $this->form_validation->set_rules('konten', 'Konten', 'required');
                
                if ($this->form_validation->run() == TRUE)
                {
                    $data = [
                        'id_user' => $this->session->userdata('id'),
                        'judul' => $this->input->post('judul'),
                        'konten' => $this->input->post('konten'),
                        'slug' => $this->input->post('slug'),
                    ];

                    $this->db->insert('tbl_profile', $data);
                    $this->session->set_flashdata('success', 'Profile berhasil ditambahkan.');
                    redirect('dashboard/profile');
                } else {
                    $this->session->set_flashdata('failed', 'Profile gagal ditambahkan.');
                    redirect('create/profile');
                }

            } else {
                $data = [
                    'userdata' => $this->auth->get_userdata($this->session->userdata('id')),
                ];

                $this->load->view('dashboard/create/profile', $data);
            }
        }
    }

    function users()
    {
        if($this->session->userdata('id'))
        {
            if(isset($_POST['tambah']))
            {
                $this->form_validation->set_rules('username', 'Username', 'required');
                $this->form_validation->set_rules('nama', 'Nama', 'required');
                $this->form_validation->set_rules('email', 'Email', 'required');
                $this->form_validation->set_rules('password', 'Password', 'required');
                    
                $config['upload_path']          = './upload/';
                $config['allowed_types']        = 'gif|jpg|png|jpeg';
                $config['max_size']             = 0;
                $config['max_width']            = 0;
                $config['max_height']           = 0;
                $config['remove_spaces']        = TRUE;
                $config['encrypt_name']         = TRUE;

                $this->load->library('upload', $config);
                
                if ($this->form_validation->run() == TRUE AND $this->upload->do_upload('gambar'))
                {

                    $data = [
                        'username' => $this->input->post('username'),
                        'nama' => $this->input->post('nama'),
                        'email' => $this->input->post('email'),
                        'password' => MD5($this->input->post('password')),
                        'avatar' => $this->upload->data('file_name')
                    ];

                    $this->db->insert('tbl_users', $data);
                    $this->session->set_flashdata('success', 'Pengguna berhasil ditambahkan.');
                    redirect('dashboard/pengguna');
                } else {
                    $this->session->set_flashdata('failed', 'Pengguna gagal ditambahkan.');
                    redirect('create/users');
                }

            } else {
                $data = [
                    'userdata' => $this->auth->get_userdata($this->session->userdata('id'))
                ];

                $this->load->view('dashboard/create/users', $data);
            }
        } else {
            redirect('auth/login');
        }
    }
}