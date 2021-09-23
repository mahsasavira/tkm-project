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

    public function tambah_aktiva()
    {
        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('transaksi/tambah_aktiva');
    }
    // $kas_kecil = $this->input->post('kas_kecil');
    // $kas_pada_bank = $this->input->post('kas_pada_bank');
    // $data = array(
    //     'kas_kecil' => $kas_kecil,
    //     'kas_pada_bank' => $kas_pada_bank,
    // );

    // $kas_kecil = $this->input->post('kas_kecil');
    // $kas_pada_bank = $this->input->post('kas_pada_bank');
    // $piutang_operasional = $this->input->post('piutang_operasional');
    // $piutang_daya_makara = $this->input->post('piutang_daya_makara');
    // $piutang_proyek = $this->input->post('piutang_proyek');
    // $piutang_tvui = $this->input->post('piutang_tvui');
    // $piutang_solar_car = $this->input->post('piutang_solar_car');
    // $komputer = $this->input->post('komputer');
    // $akum_peny_komputer = $this->input->post('akum_peny_komputer');
    // $fax = $this->input->post('fax');
    // $akum_peny_fax = $this->input->post('akum_peny_fax');
    // $furniture = $this->input->post('furniture');
    // $akum_peny_furniture = $this->input->post('akum_peny_furniture');
    // $notebook = $this->input->post('notebook');
    // $akum_peny_notebook = $this->input->post('akum_peny_notebook');
    // $kamera_digital = $this->input->post('kamera_digital');
    // $akum_peny_kamera = $this->input->post('akum_peny_kamera');
    // $printer = $this->input->post('printer');
    // $akum_peny_printer = $this->input->post('akum_peny_printer');
    // $video_kamera = $this->input->post('video_kamera');
    // $akum_peny_video = $this->input->post('akum_peny_video');

    // $data = array(
    //     'kas_kecil' => $kas_kecil,
    //     'kas_pada_bank' => $kas_pada_bank,
    //     // 'piutang_operasional' => $piutang_operasional,
    // 'piutang_daya_makara' => $piutang_daya_makara,
    // 'piutang_proyek' => $piutang_proyek,
    // 'piutang_tvui' => $piutang_tvui,
    // 'piutang_solar_car' => $piutang_solar_car,
    // 'komputer' => $komputer,
    // 'akum_peny_komputer' => $akum_peny_komputer,
    // 'fax' => $fax,
    // 'akum_peny_fax' => $akum_peny_fax,
    // 'furniture' => $furniture,
    // 'akum_peny_furniture' => $akum_peny_furniture,
    // 'notebook' => $notebook,
    // 'akum_peny_notebook' => $akum_peny_notebook,
    // 'kamera_digital' => $kamera_digital,
    // 'akum_peny_kamera' => $akum_peny_kamera,
    // 'printer' => $printer,
    // 'akum_peny_printer' => $akum_peny_printer,
    // 'video_kamera' => $video_kamera,
    // 'akum_peny_video' => $akum_peny_video,
    //     );
    //     $input = $this->m_neraca->add_aktiva($data);
    //     redirect('transaksi/neraca');
    // }

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
