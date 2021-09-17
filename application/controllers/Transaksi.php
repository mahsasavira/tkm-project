<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Transaksi extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_neraca');
    }

    function neraca()
    {
        $data['no_perk'] = $this->m_neraca->tampil_data();
        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('transaksi/neraca', $data);
    }

    function labarugi()
    {
        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('transaksi/labarugi');
    }
}
