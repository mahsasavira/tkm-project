<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Verifikasi extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_Verifikasi');
    }

    public function verifikasi_neraca()
    {
        $data['id_akt'] = $this->M_Verifikasi->tampil_aktiva();
        $data['id_pas'] = $this->M_Verifikasi->tampil_pasiva();

        $this->load->view('template/header');
        $this->load->view('sidebartemplate/verifikasineraca', $data);
        $this->load->view('transaksi/verifikasi_ner');
    }

    public function verifikasi_labarugi()
    {
        $data['id_pend'] = $this->M_Verifikasi->tampil_pendapatan();
        $data['id_beban'] = $this->M_Verifikasi->tampil_beban();

        $this->load->view('template/header');
        $this->load->view('sidebartemplate/verifikasilabarugi', $data);
        $this->load->view('transaksi/verifikasi_laba');
    }

    public function verifikasi_aktiva($id_aktiva){
        $data_update = array(
            'STATUS_AKTIVA' => 1
        );

        $condition = array(
            'ID_AKTIVA' => $id_aktiva
        );

        $this->M_Verifikasi->update_data_aktiva('aktiva', $data_update, $condition);

        redirect('Verifikasi/verifikasi_neraca');
    }

    public function verifikasi_pasiva($id_pasiva){
        $data_update = array(
            'STATUS_PASIVA' => 1
        );

        $condition = array(
            'ID_PASIVA' => $id_pasiva
        );

        $this->M_Verifikasi->update_data_aktiva('pasiva', $data_update, $condition);

        redirect('Verifikasi/verifikasi_neraca');
    }

    public function tolak_aktiva($id_aktiva){
        $data_update = array(
            'STATUS_AKTIVA' => 2
        );

        $condition = array(
            'ID_AKTIVA' => $id_aktiva
        );

        $this->M_Verifikasi->update_data_aktiva('aktiva', $data_update, $condition);

        redirect('Verifikasi/verifikasi_neraca');
    }

    public function tolak_pasiva($id_pasiva){
        $data_update = array(
            'STATUS_PASIVA' => 2
        );

        $condition = array(
            'ID_PASIVA' => $id_pasiva
        );

        $this->M_Verifikasi->update_data_aktiva('pasiva', $data_update, $condition);

        redirect('Verifikasi/verifikasi_neraca');
    }

    public function verifikasi_pendapatan($id_pendapatan){
        $data_update = array(
            'STATUS_PENDAPATAN' => 1
        );

        $condition = array(
            'ID_PENDAPATAN' => $id_pendapatan
        );

        $this->M_Verifikasi->update_data_aktiva('pendapatan', $data_update, $condition);

        redirect('Verifikasi/verifikasi_labarugi');
    }

    public function verifikasi_beban($id_beban){
        $data_update = array(
            'STATUS_BEBAN' => 1
        );

        $condition = array(
            'ID_BEBAN' => $id_beban
        );

        $this->M_Verifikasi->update_data_aktiva('beban', $data_update, $condition);

        redirect('Verifikasi/verifikasi_labarugi');
    }

    public function tolak_pendapatan($id_pendapatan){
        $data_update = array(
            'STATUS_PENDAPATAN' => 2
        );

        $condition = array(
            'ID_PENDAPATAN' => $id_pendapatan
        );

        $this->M_Verifikasi->update_data_aktiva('pendapatan', $data_update, $condition);

        redirect('Verifikasi/verifikasi_labarugi');
    }

    public function tolak_beban($id_beban){
        $data_update = array(
            'STATUS_BEBAN' => 2
        );

        $condition = array(
            'ID_BEBAN' => $id_beban
        );

        $this->M_Verifikasi->update_data_aktiva('beban', $data_update, $condition);

        redirect('Verifikasi/verifikasi_labarugi');
    }
}
