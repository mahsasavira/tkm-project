<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Verifikasi extends CI_Controller
{

    public function verifikasi_neraca()
    {
        $this->load->view('template/header');
        $this->load->view('sidebartemplate/verifikasineraca');
        $this->load->view('transaksi/verifikasi_ner');
    }

    public function verifikasi_labarugi()
    {
        $this->load->view('template/header');
        $this->load->view('sidebartemplate/verifikasilabarugi');
        $this->load->view('transaksi/verifikasi_laba');
    }
}
