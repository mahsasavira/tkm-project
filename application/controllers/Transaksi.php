<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Transaksi extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_neraca');
        $this->load->model('m_labarugi');
    }

    function neraca()
    {
        $data['id_akt'] = $this->m_neraca->tampil_data();
        $data['id_pas'] = $this->m_neraca->tampil_pas();
        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar');
        $this->load->view('transaksi/neraca');
    }

    function labarugi()
    {
        $row['id_pend'] = $this->m_labarugi->tampil_pendapatan();
        $row['id_beban'] = $this->m_labarugi->tampil_beban();
        $this->load->view('template/header', $row);
        $this->load->view('template/sidebar');
        $this->load->view('transaksi/labarugi');
    }
}
