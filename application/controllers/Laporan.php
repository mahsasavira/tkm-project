<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Laporan extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_neraca');
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

    public function laporan_neraca_pdf()
    {
        $data['id_akt'] = $this->m_neraca->tampil_aktiva();
        $data['id_pas'] = $this->m_neraca->tampil_pasiva();

        $this->load->library('pdfgenerator');
        $html = $this->load->view('template_laporan/template_neraca', $data, true);
        $file_pdf = date("Y-m-d h-m-s");
        $paper = 'A4';
        $orientation = 'potrait';

        //lokasi upload sertifikat
        $path_pdf = 'uploads/laporan_neraca/' . $file_pdf . '.pdf';

        //compile sertifikat
        $resPdf = $this->pdfgenerator->generate($html, $file_pdf, $paper, $orientation);
        if (!is_dir('.uploads/laporan_neraca/')) {
            mkdir('.uploads/laporan_neraca/', 0777, TRUE);
            print_r(true);
        } else {
            print_r(false);
        }

        //simpan sertifikat ke direktori
        file_put_contents($path_pdf, $resPdf);
    }
}
