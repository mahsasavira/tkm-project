<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
    function index()
    {
        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('dashboard');
    }
}
