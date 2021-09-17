<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_login');
    }

    function profile()
    {
        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('auth/profile');
    }

    function aksi_login()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        if ($username == "admin" && $password == "admin") {
            $data_session = array(
                'username' => $username,
                'status' => "login"
            );

            $this->session->set_userdata($data_session);
            redirect(base_url("/dashboard"));
        } else {
            echo "<script>
			alert('login gagal, username/password salah');
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
