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
        $row['id_pend'] = $this->m_labarugi->tampil_pendapatan();
        $row['id_beban'] = $this->m_labarugi->tampil_beban();
        $this->load->view('template/header', $row);
        $this->load->view('template/sidebar');
        $this->load->view('transaksi/labarugi');
    }

    public function tambah_aktiva()
    {

        $data['id_akt'] = $this->m_neraca->tambah_aktiva();
        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('transaksi/tambah_aktiva', $data);
    }

    public function hapus_aktiva()
    {
        $id = $this->input->post('id_aktiva');
        $aktiva = $this->m_neraca->hapus_aktiva($id);
        redirect('transaksi/neraca');
    }

    public function edit_aktiva($id)
    {
        //input , alias, kondisi
        $queryedit = $this->m_neraca->get_data_aktiva($id);
        $DATA = array('queryeditakt' => $queryedit);
        echo "<pre>";
        print_r($queryedit);
        echo "</pre>";
        $this->form_validation->set_rules('id_aktiva', 'ID Aktiva');
        $this->form_validation->set_rules('tanggal_masuk', 'Tanggal');
        $this->form_validation->set_rules('kas_kecil', 'Kas Kecil');
        $this->form_validation->set_rules('kas_pada_bank', 'Kas Pada Bank', 'required');

        $this->form_validation->set_message('required', '%s masih kosong, silahkan isi data!');
        $this->form_validation->set_error_delimiters('<span class="help-block">', '</span>');

        // $this->load->view('template/header');
        // $this->load->view('template/sidebar');
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
        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('transaksi/tambah_pasiva');
    }

    public function hapus_pasiva()
    {
        $id = $this->input->post('id_pasiva');
        $pasiva = $this->m_neraca->hapus_pasiva($id);
        redirect('transaksi/neraca');
    }

    public function tambah_pendapatan()
    {
        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('transaksi/tambah_pendapatan');
    }

    public function hapus_pendapatan()
    {
        $id = $this->input->post('id_pendapatan');
        $pasiva = $this->m_labarugi->hapus_pendapatan($id);
        redirect('transaksi/labarugi');
    }

    public function hapus_beban()
    {
        $id = $this->input->post('id_beban');
        $pasiva = $this->m_labarugi->hapus_beban($id);
        redirect('transaksi/labarugi');
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
