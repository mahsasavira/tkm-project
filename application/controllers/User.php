<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
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

    function profile_biasa()
    {
        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('auth/profilbiasa');
    }

    function mnj_user()
    {
        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('auth/mnj_user');
    }
}
