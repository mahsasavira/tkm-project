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
        $password = md5($this->input->post('password', true));

        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');

        if ($this->form_validation->run() != false) {
            $where = array(
                'email' => $email,
                'password' => $password
            );
            $cek = $this->m_login->cek_login($where)->num_rows();

            if ($cek > 0) {
                $sess_data = array(
                    'email' => $email,
                    'login' => 'OK',
                );
                $this->session->set_userdata($sess_data);
                redirect(base_url('login'));
            } else {
                redirect(base_url('dashboard'));
            }
        } else {
            $url = base_url('');
            echo $this->session->set_flashdata('msg', 'Email Atau Password Anda Salah!');
            redirect($url);
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
