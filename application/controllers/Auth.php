<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_login');
    }

    public function login()
    {
        $this->load->view('login');
    }

    public function aksi_login()
    {
        $email = $this->input->post('email', true);
        $password = $this->input->post('password');

        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');

        if ($this->form_validation->run() != false) {
            $where = array(
                'email' => $email,
                'password' => $password
            );
            $cek = $this->m_login->cek_login($where);

            if ($cek->num_rows() > 0) {
                $data_user = $cek->row_array();
                $sess_data = array(
                    'email' => $email,
                    'level' => $data_user['LEVEL'],
                    'login' => 'OK',
                );
                $this->session->set_userdata($sess_data);
                redirect('dashboard');
            } else {
                redirect('auth/login');
            }
        } else {
            // $url = base_url('');
            echo $this->session->set_flashdata('msg', 'Email Atau Password Anda Salah!');
            redirect('auth/login');
        }
    }

    public function login_user()
    {
        if ($_POST) {
            redirect(base_url("/dashboard"));
        }
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect(base_url('auth/login'));
    }
}
