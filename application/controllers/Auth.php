<?php

class Auth extends CI_Controller {
    
    function __construct()
    {
        parent::__construct();

        $this->load->model('auth_model', 'auth');
    }

    function login()
    {
        if(isset($_POST['login']))
        {
            $check = $this->auth->check_login($this->input->post('username'), MD5($this->input->post('password')));

            if($check)
            {
                $data = [
                    'id' => $check->id
                ];

                $this->session->set_userdata($data);
                redirect('dashboard');

            } else {

                $this->session->set_flashdata('failed', 'Username dan Password salah.');
                redirect('auth/login');
            }

        } else {

            $this->load->view('dashboard/login');
        }
    }

    function profile()
    {
        if($this->session->userdata('id'))
        {
            if(isset($_POST['simpan']))
            {
                $this->form_validation->set_rules('username', 'Username', 'required');
                $this->form_validation->set_rules('nama', 'Nama Lengkap', 'required');
                $this->form_validation->set_rules('email', 'Email', 'required');

                if ($this->form_validation->run() == TRUE)
                {
                    if($this->input->post('password') == '')
                    {
                        $data = [
                            'username' => $this->input->post('username'),
                            'nama' => $this->input->post('nama'),
                            'email' => $this->input->post('email'),
                        ];
                    }

                    if($this->input->post('password') !== '')
                    {
                        $data = [
                            'username' => $this->input->post('username'),
                            'nama' => $this->input->post('nama'),
                            'email' => $this->input->post('email'),
                            'password' => MD5($this->input->post('password'))
                        ];
                    }

                    $this->db->where('id', $this->session->userdata('id'));
                    $this->db->update('tbl_users', $data);
                    $this->session->set_flashdata('success', 'Profile berhasil diperbarui.');
                    redirect('auth/profile');
                } else {
                    $this->session->set_flashdata('failed', 'Profile gagal diperbarui.');
                    redirect('auth/profile');
                }

            } else {
                $data = [
                    'userdata' => $this->auth->get_userdata($this->session->userdata('id')),
                ];
                
                $this->load->view('dashboard/edit-profile', $data);
            }
        } else {
            redirect('auth/login');
        }
    }

    function logout()
    {
        $this->session->sess_destroy();
        redirect('auth/login');
    }
}