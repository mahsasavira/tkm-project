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

    function tambah_aktiva()
    {
        $nilai = $this->input->post('nilai');

        $data = array(
            'nilai' => $nilai
        );

        $this->m_neraca->input_data($data, 'aktiva');
        redirect('neraca');
    }

    function tambah_labarugi()
    {
        $pendapatan_proyek = $this->input->post('pendapatan_proyek');
        $pendapatan_giro = $this->input->post('pendapatan_giro');
        $bonus = $this->input->post('bonus');
        $pendapatan_lain = $this->input->post('pendapatan_lain');
        $laba_selisih = $this->input->post('laba_selisih');
        $data = array(
            'id_pendapatan' => $this->input->post('id_pendapatan'),
            'jenis_pendapatan' => $this->input->post('pendapatan_proyek')

        );

        $ost = $this->m_labarugi->tambah_labarugi($data);
        var_dump($pendapatan_proyek, $pendapatan_giro, $bonus, $pendapatan_lain, $laba_selisih);
        // redirect('/transaksi/labarugi');
    }
}
