<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_login');
    }

    function aksi_login()
    {
        $email = htmlspecialchars($this->input->post('email', TRUE), ENT_QUOTES);
        $password = htmlspecialchars($this->input->post('password', TRUE), ENT_QUOTES);

        $cek_user = $this->m_login->cek_login($email, $password);

        if ($cek_user->num_rows() > 0) {
            $data = $cek_user->row_array();

            $this->session->set_userdata('masuk', TRUE);

            if ($data['id_role'] == '1') {
                $this->session->set_userdata('akses', '1');
                $this->session->set_userdata('id_user', $data['id_user']);
                $this->session->set_userdata('email', $data['email']);
                $this->session->set_userdata('password', $data['password']);
                $this->session->set_userdata('id_role', $data['id_role']);
                $this->session->set_userdata('is_active', $data['IS_ACTIVE']);
                redirect('dashboard');
            } else {
                $this->session->set_userdata('akses', '1');
                $this->session->set_userdata('id_user', $data['id_user']);
                $this->session->set_userdata('email', $data['email']);
                $this->session->set_userdata('password', $data['password']);
                $this->session->set_userdata('id_role', $data['id_role']);
                $this->session->set_userdata('is_active', $data['IS_ACTIVE']);
                redirect('dashboard');
            }
        } else {
            echo "<script>
             alert('Login gagal, email/password yang anda masukkan salah');
            window.location='" . base_url('auth/login') . "';
             </script>";
        }
    }

    function login()
    {
        $this->load->view('login');
    }

    function login_user()
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
