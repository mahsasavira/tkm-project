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

    public function neraca()
    {
        $data['id_akt'] = $this->m_neraca->tampil_aktiva();
        $data['id_pas'] = $this->m_neraca->tampil_pasiva();
        $this->load->view('template/header', $data);
        $this->load->view('sidebartemplate/neraca');
        $this->load->view('transaksi/neraca');
    }

    public function labarugi()
    {
        $data['id_pend'] = $this->m_labarugi->tampil_pendapatan();
        $data['id_beban'] = $this->m_labarugi->tampil_beban();
        $this->load->view('template/header', $data);
        $this->load->view('sidebartemplate/labarugi');
        $this->load->view('transaksi/labarugi');
    }

    public function modal()
    {
        $data['id_arus'] = $this->m_labarugi->tampil_modal();
        $this->load->view('template/header', $data);
        $this->load->view('sidebartemplate/neraca');
        $this->load->view('transaksi/aruskas');
    }


    public function tambah_aktiva()
    {
        if ($this->input->post()) {
            $this->m_neraca->tambah_aktiva();
            redirect('transaksi/neraca');
        } else {
            // $data['id_akt'] = $this->m_neraca->tambah_aktiva();
            $this->load->view('template/header');
            $this->load->view('sidebartemplate/neraca');
            $this->load->view('transaksi/tambah_aktiva');
        }
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
        $this->load->view('template/header');
        $this->load->view('sidebartemplate/neraca');
        $this->load->view('transaksi/edit_aktiva', $DATA);
    }

    function update_akt()
    {
        $id_aktiva = $this->input->post('id_aktiva');
        $tanggal_masuk = $this->input->post('tanggal_masuk');
        $kas_kecil = $this->input->post('kas_kecil');
        $kas_pada_bank = $this->input->post('kas_pada_bank');
        $jaminan_bank = $this->input->post('jaminan_bank');
        $piutang_operasional = $this->input->post('piutang_operasional');
        $piutang_daya_makara = $this->input->post('piutang_daya_makara');
        $piutang_proyek = $this->input->post('piutang_proyek');
        $piutang_tvui = $this->input->post('piutang_tvui');
        $piutang_solar_car = $this->input->post('piutang_solar_car');
        $komputer = $this->input->post('komputer');
        $akum_peny_komputer = $this->input->post('akum_peny_komputer');
        $ac = $this->input->post('ac');
        $akum_peny_ac = $this->input->post('akum_peny_ac');
        $fax = $this->input->post('fax');
        $akum_peny_fax  = $this->input->post('akum_peny_fax');
        $furniture  = $this->input->post('furniture');
        $akum_peny_furniture  = $this->input->post('akum_peny_furniture');
        $notebook  = $this->input->post('notebook');
        $akum_peny_notebook = $this->input->post('akum_peny_notebook');
        $kamera_digital = $this->input->post('kamera_digital');
        $akum_peny_kamera  = $this->input->post('akum_peny_kamera');
        $printer = $this->input->post('printer');
        $akum_peny_printer = $this->input->post('akum_peny_printer');
        $video_kamera = $this->input->post('video_kamera');
        $akum_peny_video  = $this->input->post('akum_peny_video');

        $data = array(
            'tanggal_masuk' => $tanggal_masuk,
            'kas_kecil' => $kas_kecil,
            'kas_pada_bank' => $kas_pada_bank,
            'jaminan_bank' => $jaminan_bank,
            'piutang_operasional' => $piutang_operasional,
            'piutang_daya_makara' => $piutang_daya_makara,
            'piutang_proyek' => $piutang_proyek,
            'piutang_tvui' => $piutang_tvui,
            'piutang_solar_car' => $piutang_solar_car,
            'komputer' => $komputer,
            'akum_peny_komputer' => $akum_peny_komputer,
            'ac' => $ac,
            'akum_peny_ac' => $akum_peny_ac,
            'fax' => $fax,
            'akum_peny_fax' => $akum_peny_fax,
            'furniture' => $furniture,
            'akum_peny_furniture' => $akum_peny_furniture,
            'notebook' => $notebook,
            'akum_peny_notebook' => $akum_peny_notebook,
            'kamera_digital' => $kamera_digital,
            'akum_peny_kamera' => $akum_peny_kamera,
            'printer' => $printer,
            'akum_peny_printer' => $akum_peny_printer,
            'video_kamera' => $video_kamera,
            'akum_peny_video' => $akum_peny_video
        );

        $where = array(
            'id_aktiva' => $id_aktiva
        );

        $proc = $this->m_neraca->update_data_aktiva($where, $data, 'aktiva');
        redirect('transaksi/neraca');
    }

    public function tambah_pasiva()
    {
        if ($this->input->post()) {
            $this->m_neraca->tambah_pasiva();
            redirect('transaksi/neraca');
        } else {
            // $data['id_akt'] = $this->m_neraca->tambah_aktiva();
            $this->load->view('template/header');
            $this->load->view('sidebartemplate/neraca');
            $this->load->view('transaksi/tambah_pasiva');
        }
    }

    public function hapus_pasiva()
    {
        $id = $this->input->post('id_pasiva');
        $pasiva = $this->m_neraca->hapus_pasiva($id);
        redirect('transaksi/neraca');
    }

    public function edit_pasiva($id)
    {
        //input , alias, kondisi
        $queryedit = $this->m_neraca->get_data_pasiva($id);
        $DATA = array('querypas' => $queryedit);
        // echo "<pre>";
        // print_r($queryedit);
        // echo "</pre>";
        $this->load->view('template/header');
        $this->load->view('sidebartemplate/neraca');
        $this->load->view('transaksi/edit_pasiva', $DATA);
    }

    public function update_pas()
    {
        $id_pasiva = $this->input->post('id_pasiva');
        $tanggal_masuk = $this->input->post('tanggal_masuk');
        $hutang_operasional = $this->input->post('hutang_operasional');
        $hutang_gaji = $this->input->post('hutang_gaji');
        $hutang_proyek = $this->input->post('hutang_proyek');
        $hutang_pada_rtv = $this->input->post('hutang_pada_rtv');

        $data = array(
            'tanggal_masuk' => $tanggal_masuk,
            'hutang_operasional' => $hutang_operasional,
            'hutang_gaji' => $hutang_gaji,
            'hutang_proyek' => $hutang_proyek,
            'hutang_pada_rtv' => $hutang_pada_rtv,
        );

        $where = array(
            'id_pasiva' => $id_pasiva
        );

        $proc = $this->m_neraca->update_data_pasiva($where, $data, 'pasiva');
        redirect('transaksi/neraca');
    }

    public function tambah_pendapatan()
    {
        if ($this->input->post()) {
            $this->m_labarugi->tambah_pendapatan();
            redirect('transaksi/labarugi');
        } else {
            // $data['id_pend'] = $this->m_labarugi->tambah_pendapatan();
            $this->load->view('template/header');
            $this->load->view('sidebartemplate/labarugi');
            $this->load->view('transaksi/tambah_pendapatan');
        }
    }

    public function hapus_pendapatan()
    {
        $id = $this->input->post('id_pendapatan');
        $pasiva = $this->m_labarugi->hapus_pendapatan($id);
        redirect('transaksi/labarugi');
    }

    public function edit_pendapatan($id)
    {
        //input , alias, kondisi
        $queryedit = $this->m_labarugi->get_data_pendapatan($id);
        $DATA = array('querypen' => $queryedit);
        // echo "<pre>";
        // print_r($queryedit);
        // echo "</pre>";
        $this->load->view('template/header');
        $this->load->view('sidebartemplate/labarugi');
        $this->load->view('transaksi/edit_pendapatan', $DATA);
        // redirect('transaksi/neraca');
    }

    public function update_pen()
    {
        $id_pendapatan = $this->input->post('id_pendapatan');
        $tanggal_masuk = $this->input->post('tanggal_masuk');
        $pendapatan_proyek = $this->input->post('pendapatan_proyek');
        $pendapatan_giro = $this->input->post('pendapatan_giro');
        $bonus = $this->input->post('bonus');
        $pendapatan_lainlain = $this->input->post('pendapatan_lainlain');
        $laba_selisih_kurs = $this->input->post('laba_selisih_kurs');

        $data = array(
            'tanggal_masuk' => $tanggal_masuk,
            'pendapatan_proyek' => $pendapatan_proyek,
            'pendapatan_giro' => $pendapatan_giro,
            'bonus' => $bonus,
            'pendapatan_lainlain' => $pendapatan_lainlain,
            'laba_selisih_kurs' => $laba_selisih_kurs,
        );

        $where = array(
            'id_pendapatan' => $id_pendapatan
        );

        $proc = $this->m_labarugi->update_data_pendapatan($where, $data, 'pendapatan');
        redirect('transaksi/labarugi');
    }

    public function tambah_beban()
    {

        if ($this->input->post()) {
            $this->m_labarugi->tambah_beban();
            redirect('transaksi/labarugi');
        } else {
            // $data['id_beban'] = $this->m_labarugi->tambah_beban();
            $this->load->view('template/header');
            $this->load->view('sidebartemplate/labarugi');
            $this->load->view('transaksi/tambah_beban');
        }
    }

    public function hapus_beban()
    {
        $id = $this->input->post('id_beban');
        $pasiva = $this->m_labarugi->hapus_beban($id);
        redirect('transaksi/labarugi');
    }

    public function edit_beban($id)
    {
        //input , alias, kondisi
        $queryedit = $this->m_labarugi->get_data_beban($id);
        $DATA = array('querybeban' => $queryedit);
        // echo "<pre>";
        // print_r($queryedit);
        // echo "</pre>";
        $this->load->view('template/header');
        $this->load->view('sidebartemplate/labarugi');
        $this->load->view('transaksi/edit_beban', $DATA);
        // redirect('transaksi/neraca');
    }

    public function update_beban()
    {
        $id_beban = $this->input->post('id_beban');
        $tanggal_masuk = $this->input->post('tanggal_masuk');
        $beban_proyek = $this->input->post('beban_proyek');
        $beban_gaji = $this->input->post('beban_gaji');
        $tunjangan_hari_raya = $this->input->post('tunjangan_hari_raya');
        $beban_operasional = $this->input->post('beban_operasional');
        $beban_setoran_ui = $this->input->post('beban_setoran_ui');
        $beban_penyusutan = $this->input->post('beban_penyusutan');
        $beban_bonus = $this->input->post('beban_bonus');
        $beban_perlengkapan_kantor = $this->input->post('beban_perlengkapan_kantor');
        $beban_pengelolaan_rek = $this->input->post('beban_pengelolaan_rek');
        $beban_buku_cek = $this->input->post('beban_buku_cek');
        $beban_pajak = $this->input->post('beban_pajak');
        $beban_lainlain = $this->input->post('beban_lainlain');
        $rugi_penjualan_aset = $this->input->post('rugi_penjualan_aset');
        $rugi_selisih_kurs = $this->input->post('rugi_selisih_kurs');

        $data = array(
            'tanggal_masuk' => $tanggal_masuk,
            'beban_proyek' => $beban_proyek,
            'beban_gaji' => $beban_gaji,
            'tunjangan_hari_raya' => $tunjangan_hari_raya,
            'beban_operasional' => $beban_operasional,
            'beban_setoran_ui' => $beban_setoran_ui,
            'beban_penyusutan' => $beban_penyusutan,
            'beban_bonus' => $beban_bonus,
            'beban_perlengkapan_kantor' => $beban_perlengkapan_kantor,
            'beban_pengelolaan_rek' => $beban_pengelolaan_rek,
            'beban_buku_cek' => $beban_buku_cek,
            'beban_pajak' => $beban_pajak,
            'beban_lainlain' => $beban_lainlain,
            'rugi_penjualan_aset' => $rugi_penjualan_aset,
            'rugi_selisih_kurs' => $rugi_selisih_kurs,
        );

        $where = array(
            'id_beban' => $id_beban
        );

        $proc = $this->m_labarugi->update_data_beban($where, $data, 'beban');
        redirect('transaksi/labarugi');
    }

    public function modal_akhir($id)
    {
        //input , alias, kondisi
        $querymodal = $this->m_labarugi->get_modal($id);
        $DATA = array('queryemodal' => $querymodal);
        $this->load->view('template/header');
        $this->load->view('sidebartemplate/neraca');
        $this->load->view('transaksi/edit_aktiva', $DATA);
    }
}
