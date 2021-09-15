<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Laporan extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
    }

    function laporan_neraca()
    {
        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('laporan/laporan_neraca');
    }

    function laporan_laba_rugi()
    {
        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('laporan/laporan_laba_rugi');
    }

    function laporan_arus_kas()
    {
        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('laporan/laporan_arus_kas');
    }
}
