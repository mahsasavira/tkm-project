<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
    }

    function profile()
    {
        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('auth/profile');
    }
}
