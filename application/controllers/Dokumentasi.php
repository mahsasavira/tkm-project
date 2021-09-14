<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dokumentasi extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
    }

    function laporan()
    {
        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('dokumentasi/laporan');
    }
}
