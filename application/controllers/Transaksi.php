<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Transaksi extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
    }

    function neraca()
    {
        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('transaksi/neraca');
    }

    function labarugi()
    {
        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('transaksi/labarugi');
    }
}
