<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
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
}
