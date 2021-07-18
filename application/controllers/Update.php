<?php

class Update extends CI_Controller {
    
    function __construct()
    {
        parent::__construct();

        $this->load->model('update_model', 'update');
        $this->load->model('auth_model', 'auth');
    }

    function berita($id)
    {
        if($this->session->userdata('id'))
        {
            if(isset($_POST['simpan']))
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

                    $this->db->where('id', $id);
                    $this->db->update('tbl_berita', $data);
                    $this->session->set_flashdata('success', 'Berita berhasil disimpan.');
                    redirect('dashboard/berita');

                } elseif ($this->form_validation->run() == TRUE AND !$this->upload->do_upload('gambar')) {

                    $data = [
                        'id_user' => $this->session->userdata('id'),
                        'judul' => $this->input->post('judul'),
                        'konten' => $this->input->post('konten'),
                    ];

                    $this->db->where('id', $id);
                    $this->db->update('tbl_berita', $data);
                    $this->session->set_flashdata('success', 'Berita berhasil disimpan.');
                    redirect('dashboard/berita');

                } else {

                    $this->session->set_flashdata('failed', 'Harap isi semua data.');
                    redirect('update/berita/'.$id);
                }
                
            } else {
                    
                $data = [
                    'berita' => $this->update->get_berita($this->uri->segment(3)),
                    'userdata' => $this->auth->get_userdata($this->session->userdata('id'))
                ];

                $this->load->view('dashboard/update/berita', $data);
            }
        } else {

            redirect('auth/login');
        }
    }

    function galeri($id)
    {
        if($this->session->userdata('id'))
        {
            if(isset($_POST['simpan']))
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

                    $this->db->where('id', $id);
                    $this->db->update('tbl_galeri', $data);
                    $this->session->set_flashdata('success', 'Galeri berhasil disimpan.');
                    redirect('dashboard/galeri');

                } elseif ($this->form_validation->run() == TRUE AND !$this->upload->do_upload('gambar')) {

                    $data = [
                        'id_user' => $this->session->userdata('id'),
                        'judul' => $this->input->post('judul'),
                    ];

                    $this->db->where('id', $id);
                    $this->db->update('tbl_galeri', $data);
                    $this->session->set_flashdata('success', 'Galeri berhasil disimpan.');
                    redirect('dashboard/galeri');

                } else {

                    $this->session->set_flashdata('failed', 'Harap isi semua data.');
                    redirect('update/galeri/'.$id);
                }
                
            } else {
                    
                $data = [
                    'galeri' => $this->update->get_galeri($this->uri->segment(3)),
                    'userdata' => $this->auth->get_userdata($this->session->userdata('id'))
                ];

                $this->load->view('dashboard/update/galeri', $data);
            }
        } else {

            redirect('auth/login');
        }
    }

    function profile($id)
    {
        if($this->session->userdata('id'))
        {
            if(isset($_POST['simpan']))
            {
                $this->form_validation->set_rules('judul', 'Judul', 'required');
                $this->form_validation->set_rules('slug', 'Slug', 'required');
                $this->form_validation->set_rules('konten', 'Konten', 'required');

                if ($this->form_validation->run() == TRUE)
                {
                    $data = [
                        'id_user' => $this->session->userdata('id'),
                        'judul' => $this->input->post('judul'),
                        'slug' => $this->input->post('slug'),
                        'konten' => $this->input->post('konten'),
                    ];

                    $this->db->where('id', $id);
                    $this->db->update('tbl_profile', $data);
                    $this->session->set_flashdata('success', 'Profile berhasil diperbarui.');
                    redirect('dashboard/profile');
                } else {
                    $this->session->set_flashdata('failed', 'Profile gagal diperbarui');
                    redirect('update/profile/'.$id);
                }
            } else {
                $data = [
                    'profile' => $this->update->get_profile($this->uri->segment(3)),
                    'userdata' => $this->auth->get_userdata($this->session->userdata('id'))
                ];

                $this->load->view('dashboard/update/profile', $data);
            }

        } else {
            redirect('auth/login');
        }
    }

    function users($id)
    {
        if($this->session->userdata('id'))
        {
            if(isset($_POST['simpan']))
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

                    $this->db->where('id', $id);
                    $this->db->update('tbl_users', $data);
                    $this->session->set_flashdata('success', 'Pengguna berhasil disimpan.');
                    redirect('dashboard/pengguna');

                } elseif ($this->form_validation->run() == TRUE AND !$this->upload->do_upload('gambar')) {

                    $data = [
                        'username' => $this->input->post('username'),
                        'nama' => $this->input->post('nama'),
                        'email' => $this->input->post('email'),
                        'password' => MD5($this->input->post('password')),
                    ];

                    $this->db->where('id', $id);
                    $this->db->update('tbl_users', $data);
                    $this->session->set_flashdata('success', 'Pengguna berhasil disimpan.');
                    redirect('dashboard/pengguna');

                } else {

                    $this->session->set_flashdata('failed', 'Harap isi semua data.');
                    redirect('update/users/'.$id);
                }
                
            } else {
                    
                $data = [
                    'users' => $this->update->get_users($this->uri->segment(3)),
                    'userdata' => $this->auth->get_userdata($this->session->userdata('id'))
                ];

                $this->load->view('dashboard/update/users', $data);
            }
        } else {

            redirect('auth/login');
        }
    }
}