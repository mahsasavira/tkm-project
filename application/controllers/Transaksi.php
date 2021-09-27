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
        $data['id_akt'] = $this->m_neraca->tampil_aktiva();
        $data['id_pas'] = $this->m_neraca->tampil_pasiva();
        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar');
        $this->load->view('transaksi/neraca');
    }

    function labarugi()
    {
        $data['id_pend'] = $this->m_labarugi->tampil_pendapatan();
        $data['id_beban'] = $this->m_labarugi->tampil_beban();
        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar');
        $this->load->view('transaksi/labarugi');
    }

    public function tambah_aktiva()
    {

        $data['id_akt'] = $this->m_neraca->tambah_aktiva();
        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('transaksi/tambah_aktiva', $data);
        $this->load->view('transaksi/tambah_aktiva');
    }

    public function hapus_aktiva()
    {
        $id = $this->input->post('id_aktiva');
        $aktiva = $this->m_neraca->hapus_aktiva($id);
        redirect('transaksi/neraca');
    }

    public function edit_aktiva($id_aktiva)
    {
        //input , alias, kondisi
        $queryedit = $this->m_neraca->get_data_aktiva($id_aktiva);
        $DATA = array('queryeditakt' => $queryedit);
        echo "<pre>";
        print_r($queryedit);
        echo "</pre>";
        // $this->form_validation->set_rules('id_aktiva', 'ID Aktiva');
        // $this->form_validation->set_rules('tanggal_masuk', 'Tanggal');
        // $this->form_validation->set_rules('kas_kecil', 'Kas Kecil');
        // $this->form_validation->set_rules('kas_pada_bank', 'Kas Pada Bank', 'required');

        // $this->form_validation->set_message('required', '%s masih kosong, silahkan isi data!');
        // $this->form_validation->set_error_delimiters('<span class="help-block">', '</span>');

        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('transaksi/edit_aktiva', $DATA);
        // redirect('transaksi/neraca');

        // if ($this->form_validation->run() == FALSE) {
        //     //meload header
        //     $this->load->view('template/header');
        //     //memanggil model gejala untuk di load
        //     $query = $this->m_gejala->tampil_data($id);
        //     if ($query->num_rows() > 0) {
        //         $data['row'] = $query->row();
        //         $this->load->view('gejala/gejala_form_edit', $data);
        //     } else {
        //         echo "<script> alert('Data tidak ditemukan');";
        //         echo "window.location='" . site_url('gejala') . "';</script>";
        //     }
        //     //meload sidebar dan footer
        //     $this->load->view('template/sidebar');
        //     $this->load->view('template/footer');
        // } else {
        //     $post = $this->input->post(null, TRUE);
        //     $this->m_gejala->edit_data($post);
        //     if ($this->db->affected_rows() > 0) {
        //         echo "<script> alert('Data berhasil diubah');</script>";
        //     }
        //     echo "<script> window.location='" . site_url('gejala') . "';</script>";
        // }
    }

    public function tambah_pasiva()
    {
        $data['id_pas'] = $this->m_neraca->tambah_pasiva();
        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('transaksi/tambah_pasiva', $data);
        $this->load->view('transaksi/tambah_pasiva');
        // redirect('transaksi/neraca');
    }

    public function hapus_pasiva()
    {
        $id = $this->input->post('id_pasiva');
        $pasiva = $this->m_neraca->hapus_pasiva($id);
        redirect('transaksi/neraca');
    }

    public function tambah_pendapatan()
    {
        $data['id_pend'] = $this->m_labarugi->tambah_pendapatan();
        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('transaksi/tambah_pendapatan', $data);
        $this->load->view('transaksi/tambah_pendapatan');
    }

    public function hapus_pendapatan()
    {
        $id = $this->input->post('id_pendapatan');
        $pasiva = $this->m_labarugi->hapus_pendapatan($id);
        redirect('transaksi/labarugi');
    }

    public function tambah_beban()
    {
        $data['id_beban'] = $this->m_labarugi->tambah_beban();
        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('transaksi/tambah_beban', $data);
        $this->load->view('transaksi/tambah_beban');
    }

    public function hapus_beban()
    {
        $id = $this->input->post('id_beban');
        $pasiva = $this->m_labarugi->hapus_beban($id);
        redirect('transaksi/labarugi');
    }
}
