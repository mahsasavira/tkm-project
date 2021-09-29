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

    public function edit_aktiva($id)
    {
        //input , alias, kondisi
        // $queryedit = $this->m_neraca->get_data_aktiva($id_aktiva);
        // $DATA = array('queryeditakt' => $queryedit);
        // echo "<pre>";
        // print_r($queryedit);
        // echo "</pre>";
        $this->form_validation->set_rules('id_aktiva', 'Id Aktiva ', 'required|is_unique[aktiva.id_aktiva]');
        $this->form_validation->set_rules('kas_kecil', 'Tanggal', 'required');
        $this->form_validation->set_rules('kas_pada_bank', 'Kas pada Bank', 'required');
        $this->form_validation->set_rules('piutang_operasional', 'Piutang Operasional', 'required');
        $this->form_validation->set_rules('piutang_daya_makara', 'Piutang Makara', 'required');
        $this->form_validation->set_rules('piutang_proyek', 'Piutang Proyek', 'required');
        $this->form_validation->set_rules('piutang_tvui', 'Piutang tvui', 'required');
        $this->form_validation->set_rules('piutang_solar_car', 'Piutang solar car', 'required');
        $this->form_validation->set_rules('komputer', 'Komputer', 'required');
        $this->form_validation->set_rules('akum_peny_komputer', 'Akum peny komputera', 'required');
        $this->form_validation->set_rules('fax', 'Fax', 'required');
        $this->form_validation->set_rules('akum_peny_fax', 'Akum peny fax', 'required');
        $this->form_validation->set_rules('ac', 'Ac', 'required');
        $this->form_validation->set_rules('akum_peny_ac', 'Akum peny ac', 'required');
        $this->form_validation->set_rules('furniture', 'Furniture', 'required');
        $this->form_validation->set_rules('akum_peny_furniture', 'Akum peny furniture', 'required');
        $this->form_validation->set_rules('notebook', 'Notebook', 'required');
        $this->form_validation->set_rules('akum_peny_notebook', 'Akum peny notebook', 'required');
        $this->form_validation->set_rules('kamera_digital', 'Kamera digital', 'required');
        $this->form_validation->set_rules('akum_peny_kamera', 'Akum peny kamera', 'required');
        $this->form_validation->set_rules('printer', 'Printer', 'required');
        $this->form_validation->set_rules('akum_peny_printer', 'Akum peny printer', 'required');
        $this->form_validation->set_rules('video_kamera', 'Video kamera', 'required');
        $this->form_validation->set_rules('akum_peny_video', 'Akum peny video', 'required');

        $this->form_validation->set_message('required', '%s masih kosong, silahkan isi data!');
        $this->form_validation->set_error_delimiters('<span class="help-block">', '</span>');


        if ($this->form_validation->run() == FALSE) {
            $this->load->view('template/header');
            $query = $this->load->m_neraca->tampil_aktiva($id);
            if ($query->num_rows() > 0) {
                $data['neraca'] = $query->row();
                $this->load->view('transaksi/edit_aktiva', $data);
            } else {
                echo "<script> alert('Data tidak ditemukan');";
                echo "window.location='" . site_url('neraca') . "';</script>";
            }

            $this->load->view('template/sidebar');
        } else {
            $post = $this->input->post(null, TRUE);
            $this->m_neraca->edit_aktiva($post);
            if ($this->db->affected_rows() > 0) {
                echo "<script> alert('Data berhasil diubah');</script>";
            }
            echo "<script> window.location='" . site_url('neraca') . "';</script>";
        }
        // $this->load->view('template/header');
        // $this->load->view('template/sidebar');
        // $this->load->view('transaksi/edit_aktiva', $DATA);
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

    function update()
    {
        $id_aktiva = $this->input->post('id_aktiva');
        $kas_kecil = $this->input->post('kas_kecil');
        $kas_pada_bank = $this->input->post('kas_pada_bank');
        $piutang_operasional = $this->input->post('piutang_operasional');
        $piutang_daya_makara = $this->input->post('piutang_daya_makara');
        $piutang_proyek = $this->input->post('piutang_proyek');
        $piutang_tvui = $this->input->post('piutang_tvui');
        $piutang_solar_car = $this->input->post('piutang_solar_car');
        $komputer = $this->input->post('komputer');
        $akum_peny_komputer = $this->input->post('akum_peny_komputer');
        $fax = $this->input->post('fax');
        $akum_peny_fax  = $this->input->post('akum_peny_fax');
        $ac = $this->input->post('ac');
        $akum_peny_ac = $this->input->post('akum_peny_ac');
        $furniture  = $this->input->post('furniture');
        $notebook  = $this->input->post('notebook');
        $akum_peny_notebook = $this->input->post('akum_peny_notebook');
        $kamera_digital = $this->input->post('kamera_digital');
        $akum_peny_kamera  = $this->input->post('akum_peny_kamera');
        $akum_peny_printer = $this->input->post('akum_peny_printer');
        $video_kamera = $this->input->post('video_kamera');
        $akum_peny_video  = $this->input->post('akum_peny_video');



        $data = array(
            'kas_kecil' => $kas_kecil,
            'kas_pada_bank' => $kas_pada_bank,
            'piutang_operasional' => $piutang_operasional,
            'piutang_daya_makara' => $piutang_daya_makara,
            'piutang_proyek' => $piutang_proyek,
            'piutang_tvui' => $piutang_tvui,
            'piutang_solar_car' => $piutang_solar_car,
            'komputer' => $komputer,
            'akum_peny_komputer' => $akum_peny_komputer,
            'fax' => $fax,
            'akum_peny_fax' => $akum_peny_fax,
            'ac' => $ac,
            'akum_peny_ac' => $akum_peny_ac,
            'furniture' => $furniture,
            'notebook' => $notebook,
            'akum_peny_notebook' => $akum_peny_notebook,
            'kamera_digital' => $kamera_digital,
            'akum_peny_kamera' => $akum_peny_kamera,
            'akum_peny_printer' => $akum_peny_printer,
            'video_kamera' => $video_kamera,
            'pekerjaan' => $akum_peny_video
        );

        $where = array(
            'id_aktiva' => $id_aktiva
        );

        $this->m_neraca->update_data($where, $data, 'aktiva');
        redirect('neraca');
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
