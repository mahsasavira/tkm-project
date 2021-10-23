<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Laporan extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_neraca');
        $this->load->model('m_labarugi');
    }

    function set_neraca()
    {
        if ($this->input->post('tgl_awal') != null && $this->input->post('tgl_akhir')) {
            $tgl_awal = explode(" - ", $this->input->post('tgl_awal'));
            $tgl_akhir = explode(" - ", $this->input->post('tgl_akhir'));
            $param_awal = $tgl_awal[1] . "-" . $tgl_awal[0] . "-1";
            $param_akhir = $tgl_akhir[1] . "-" . $tgl_akhir[0] . "-31";

            $data['id_pend'] = $this->m_labarugi->tampil_pendapatan_filter_by_date($param_awal, $param_akhir);
            $data['id_beban'] = $this->m_labarugi->tampil_beban_filter_by_date($param_awal, $param_akhir);
            $data['tgl_awal_cetak'] = $param_awal;
            $data['tgl_akhir_cetak'] = $param_akhir;
            $this->load->view('template/header', $data);
            $this->load->view('sidebartemplate/laporanneraca');
            $this->load->view('laporan/set_neraca');
        } else if ($this->input->post('tgl_awal') == null && $this->input->post('tgl_akhir')) {
            $data['id_pend'] = $this->m_labarugi->tampil_pendapatan();
            $data['id_beban'] = $this->m_labarugi->tampil_beban();
            $data['tgl_awal_cetak'] = null;
            $data['tgl_akhir_cetak'] = null;
            $this->load->view('template/header', $data);
            $this->load->view('sidebartemplate/laporanneraca');
            $this->load->view('laporan/set_neraca');
        } else {
            $data['tgl_awal_cetak'] = null;
            $data['tgl_akhir_cetak'] = null;
            $this->load->view('template/header', $data);
            $this->load->view('sidebartemplate/laporanneraca');
            $this->load->view('laporan/set_neraca');
        }
    }

    function laporan_neraca()
    {
        if ($this->input->post('tgl_awal') != null && $this->input->post('tgl_akhir')) {
            $tgl_awal = explode(" - ", $this->input->post('tgl_awal'));
            $tgl_akhir = explode(" - ", $this->input->post('tgl_akhir'));
            $param_awal = $tgl_awal[1] . "-" . $tgl_awal[0] . "-1";
            $param_akhir = $tgl_akhir[1] . "-" . $tgl_akhir[0] . "-31";

            $data['id_akt'] = $this->m_neraca->cetak_aktiva_filter_by_date($param_awal, $param_akhir);
            $data['id_pas'] = $this->m_neraca->cetak_pasiva_filter_by_date($param_awal, $param_akhir);
            $data['tgl_awal_cetak'] = $param_awal;
            $data['tgl_akhir_cetak'] = $param_akhir;
            $this->load->view('template/header', $data);
            $this->load->view('sidebartemplate/laporanneraca');
            $this->load->view('laporan/laporan_neraca');
        } else {
            $data['tgl_awal_cetak'] = null;
            $data['tgl_akhir_cetak'] = null;
            $this->load->view('template/header', $data);
            $this->load->view('sidebartemplate/laporanneraca');
            $this->load->view('laporan/set_neraca');
        }
    }

    function set_laba()
    {
        if ($this->input->post('tgl_awal') != null && $this->input->post('tgl_akhir')) {
            $tgl_awal = explode(" - ", $this->input->post('tgl_awal'));
            $tgl_akhir = explode(" - ", $this->input->post('tgl_akhir'));
            $param_awal = $tgl_awal[1] . "-" . $tgl_awal[0] . "-1";
            $param_akhir = $tgl_akhir[1] . "-" . $tgl_akhir[0] . "-31";

            $data['id_pend'] = $this->m_labarugi->tampil_pendapatan_filter_by_date($param_awal, $param_akhir);
            $data['id_beban'] = $this->m_labarugi->tampil_beban_filter_by_date($param_awal, $param_akhir);
            $data['tgl_awal_cetak'] = $param_awal;
            $data['tgl_akhir_cetak'] = $param_akhir;
            $this->load->view('template/header', $data);
            $this->load->view('sidebartemplate/laporanlaba');
            $this->load->view('laporan/set_laba');
        } else if ($this->input->post('tgl_awal') == null && $this->input->post('tgl_akhir')) {
            $data['id_pend'] = $this->m_labarugi->tampil_pendapatan();
            $data['id_beban'] = $this->m_labarugi->tampil_beban();
            $data['tgl_awal_cetak'] = null;
            $data['tgl_akhir_cetak'] = null;
            $this->load->view('template/header', $data);
            $this->load->view('sidebartemplate/laporanlaba');
            $this->load->view('laporan/set_laba');
        } else {
            $data['tgl_awal_cetak'] = null;
            $data['tgl_akhir_cetak'] = null;
            $this->load->view('template/header', $data);
            $this->load->view('sidebartemplate/laporanlaba');
            $this->load->view('laporan/set_laba');
        }
    }

    function laporan_laba_rugi()
    {
        if ($this->input->post('tgl_awal') != null && $this->input->post('tgl_akhir')) {
            $tgl_awal = explode(" - ", $this->input->post('tgl_awal'));
            $tgl_akhir = explode(" - ", $this->input->post('tgl_akhir'));
            $param_awal = $tgl_awal[1] . "-" . $tgl_awal[0] . "-1";
            $param_akhir = $tgl_akhir[1] . "-" . $tgl_akhir[0] . "-31";

            $data['id_pend'] = $this->m_labarugi->cetak_pendapatan_filter_by_date($param_awal, $param_akhir);
            $data['id_beban'] = $this->m_labarugi->cetak_beban_filter_by_date($param_awal, $param_akhir);
            $data['tgl_awal_cetak'] = $param_awal;
            $data['tgl_akhir_cetak'] = $param_akhir;
            $this->load->view('template/header', $data);
            $this->load->view('sidebartemplate/laporanlaba');
            $this->load->view('laporan/laporan_laba_rugi');
        } else {
            $data['tgl_awal_cetak'] = null;
            $data['tgl_akhir_cetak'] = null;
            $this->load->view('template/header', $data);
            $this->load->view('sidebartemplate/laporanlaba');
            $this->load->view('laporan/set_laba');
        }
    }

    public function set_arus()
    {
        if ($this->input->post('tgl_awal') != null && $this->input->post('tgl_akhir')) {
            $tgl_awal = explode(" - ", $this->input->post('tgl_awal'));
            $tgl_akhir = explode(" - ", $this->input->post('tgl_akhir'));
            $param_awal = $tgl_awal[1] . "-" . $tgl_awal[0] . "-1";
            $param_akhir = $tgl_akhir[1] . "-" . $tgl_akhir[0] . "-31";

            $data['id_akt'] = $this->m_neraca->tampil_aktiva_filter_by_date($param_awal, $param_akhir);
            $data['id_pas'] = $this->m_neraca->tampil_pasiva_filter_by_date($param_awal, $param_akhir);
            $data['id_pend'] = $this->m_labarugi->tampil_pendapatan_filter_by_date($param_awal, $param_akhir);
            $data['id_beban'] = $this->m_labarugi->tampil_beban_filter_by_date($param_awal, $param_akhir);
            $data['tgl_awal_cetak'] = $param_awal;
            $data['tgl_akhir_cetak'] = $param_akhir;
            $this->load->view('template/header', $data);
            $this->load->view('sidebartemplate/laporanarus');
            $this->load->view('laporan/set_aruskas');
        } else if ($this->input->post('tgl_awal') == null && $this->input->post('tgl_akhir')) {
            $data['id_akt'] = $this->m_neraca->tampil_aktiva();
            $data['id_pas'] = $this->m_neraca->tampil_pasiva();
            $data['id_pend'] = $this->m_labarugi->tampil_pendapatan();
            $data['id_beban'] = $this->m_labarugi->tampil_beban();
            $data['tgl_awal_cetak'] = null;
            $data['tgl_akhir_cetak'] = null;
            $this->load->view('template/header', $data);
            $this->load->view('sidebartemplate/laporanarus');
            $this->load->view('laporan/set_aruskas');
        } else {
            $data['tgl_awal_cetak'] = null;
            $data['tgl_akhir_cetak'] = null;
            $this->load->view('template/header', $data);
            $this->load->view('sidebartemplate/laporanarus');
            $this->load->view('laporan/set_aruskas');
        }
    }

    function laporan_arus_kas()
    {
        if ($this->input->post('tgl_awal') != null && $this->input->post('tgl_akhir')) {
            $tgl_awal = explode(" - ", $this->input->post('tgl_awal'));
            $tgl_akhir = explode(" - ", $this->input->post('tgl_akhir'));
            $param_awal = $tgl_awal[1] . "-" . $tgl_awal[0] . "-1";
            $param_akhir = $tgl_akhir[1] . "-" . $tgl_akhir[0] . "-31";

            $data['id_akt'] = $this->m_neraca->cetak_aktiva_filter_by_date($param_awal, $param_akhir);
            $data['id_pas'] = $this->m_neraca->cetak_pasiva_filter_by_date($param_awal, $param_akhir);
            $data['id_pend'] = $this->m_labarugi->cetak_pendapatan_filter_by_date($param_awal, $param_akhir);
            $data['id_beban'] = $this->m_labarugi->cetak_beban_filter_by_date($param_awal, $param_akhir);
            $data['tgl_awal_cetak'] = $param_awal;
            $data['tgl_akhir_cetak'] = $param_akhir;
            $this->load->view('template/header', $data);
            $this->load->view('sidebartemplate/laporanarus');
            $this->load->view('laporan/laporan_arus_kas');
        } else {
            $data['tgl_awal_cetak'] = null;
            $data['tgl_akhir_cetak'] = null;
            $this->load->view('template/header', $data);
            $this->load->view('sidebartemplate/laporanarus');
            $this->load->view('laporan/set_aruskas');
        }
    }

    public function laporan_neraca_pdf()
    {

        if ($this->input->post('tgl_awal_cetak') && $this->input->post('tgl_akhir_cetak')) {
            $param_awal = $this->input->post('tgl_awal_cetak');
            $param_akhir = $this->input->post('tgl_akhir_cetak');

            $data['tgl_awal_cetak'] = $param_awal;
            $data['tgl_akhir_cetak'] = $param_akhir;

            $data['id_akt'] = $this->m_neraca->cetak_aktiva_filter_by_date($param_awal, $param_akhir);
            $data['id_pas'] = $this->m_neraca->cetak_pasiva_filter_by_date($param_awal, $param_akhir);
        } else {
            $data['id_akt'] = $this->m_neraca->cetak_aktiva();
            $data['id_pas'] = $this->m_neraca->cetak_pasiva();

            $data['tgl_awal_cetak'] = '01-01-' . date('Y');
            $data['tgl_akhir_cetak'] = '31-12-' . date('Y');
        }

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

        redirect('Laporan/laporan_neraca', 'refresh');
    }

    public function laporan_labarugi_pdf()
    {
        if ($this->input->post('tgl_awal_cetak') != null && $this->input->post('tgl_akhir_cetak')) {
            $param_awal = $this->input->post('tgl_awal_cetak');
            $param_akhir = $this->input->post('tgl_akhir_cetak');
            $data['id_pend'] = $this->m_labarugi->cetak_pendapatan_filter_by_date($param_awal, $param_akhir);
            $data['id_beban'] = $this->m_labarugi->cetak_beban_filter_by_date($param_awal, $param_akhir);

            $data['tgl_awal_cetak'] = $param_awal;
            $data['tgl_akhir_cetak'] = $param_akhir;
        } else {
            $data['id_pend'] = $this->m_labarugi->cetak_pendapatan();
            $data['id_beban'] = $this->m_labarugi->cetak_beban();

            $data['tgl_awal_cetak'] = '01-01-' . date('Y');
            $data['tgl_akhir_cetak'] = '31-12-' . date('Y');
        }

        $this->load->library('pdfgenerator');
        $html = $this->load->view('template_laporan/template_labarugi', $data, true);
        $file_pdf = date("Y-m-d h-m-s");
        $paper = 'A4';
        $orientation = 'potrait';

        //lokasi upload sertifikat
        $path_pdf = 'uploads/laporan_labarugi/' . $file_pdf . '.pdf';

        //compile sertifikat
        $resPdf = $this->pdfgenerator->generate($html, $file_pdf, $paper, $orientation);
        if (!is_dir('.uploads/laporan_labarugi/')) {
            mkdir('.uploads/laporan_labarugi/', 0777, TRUE);
            print_r(true);
        } else {
            print_r(false);
        }

        //simpan sertifikat ke direktori
        file_put_contents($path_pdf, $resPdf);

        redirect('Laporan/laporan_laba_rugi', 'refresh');
    }

    public function laporan_aruskas_pdf()
    {
        if ($this->input->post('tgl_awal_cetak') != null && $this->input->post('tgl_akhir_cetak')) {
            $param_awal = $this->input->post('tgl_awal_cetak');
            $param_akhir = $this->input->post('tgl_akhir_cetak');
            $data['id_pend'] = $this->m_labarugi->cetak_pendapatan_filter_by_date($param_awal, $param_akhir);
            $data['id_beban'] = $this->m_labarugi->cetak_beban_filter_by_date($param_awal, $param_akhir);
            $data['id_akt'] = $this->m_neraca->cetak_aktiva_filter_by_date($param_awal, $param_akhir);
            $data['id_pas'] = $this->m_neraca->cetak_pasiva_filter_by_date($param_awal, $param_akhir);

            $data['tgl_awal_cetak'] = $param_awal;
            $data['tgl_akhir_cetak'] = $param_akhir;
        } else {
            $data['id_pend'] = $this->m_labarugi->cetak_pendapatan();
            $data['id_beban'] = $this->m_labarugi->cetak_beban();
            $data['id_akt'] = $this->m_neraca->cetak_aktiva();
            $data['id_pas'] = $this->m_neraca->cetak_pasiva();

            $data['tgl_awal_cetak'] = '01-01-' . date('Y');
            $data['tgl_akhir_cetak'] = '31-12-' . date('Y');
        }

        $this->load->library('pdfgenerator');
        $html = $this->load->view('template_laporan/template_aruskas', $data, true);
        $file_pdf = date("Y-m-d h-m-s");
        $paper = 'A4';
        $orientation = 'potrait';

        //lokasi upload sertifikat
        $path_pdf = 'uploads/laporan_aruskas/' . $file_pdf . '.pdf';

        //compile sertifikat
        $resPdf = $this->pdfgenerator->generate($html, $file_pdf, $paper, $orientation);
        if (!is_dir('.uploads/laporan_aruskas/')) {
            mkdir('.uploads/laporan_aruskas/', 0777, TRUE);
            print_r(true);
        } else {
            print_r(false);
        }

        //simpan sertifikat ke direktori
        file_put_contents($path_pdf, $resPdf);
        redirect('Laporan/set_arus', 'refresh');
    }

    public function getPeriodeLabaRugi()
    {
        $tgl_awal = explode(" - ", $this->input->post('tgl_awal'));
        $tgl_akhir = explode(" - ", $this->input->post('tgl_akhir'));
        $param_awal = $tgl_awal[1] . "-" . $tgl_awal[0] . "-1";
        $param_akhir = $tgl_akhir[1] . "-" . $tgl_akhir[0] . "-31";

        $data = $this->m_labarugi->tampil_pendapatan_filter_by_date($param_awal, $param_akhir);
    }
}
