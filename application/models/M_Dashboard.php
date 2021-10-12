<?php

defined('BASEPATH') or exit('No direct script access allowed');

class M_Dashboard extends CI_Model
{

    public function getSumPendapatan()
    {
        $query = $this->db->query("SELECT SUM(pendapatan_proyek) AS 'pendapatan_proyek', SUM(pendapatan_giro) AS 'pendapatan_giro', SUM(bonus) AS 'bonus',
        SUM(pendapatan_lainlain) AS 'pendapatan_lainlain' , SUM(laba_selisih_kurs) AS 'laba_selisih_kurs' FROM pendapatan");
        return $query->result();
    }

    public function getSumBeban()
    {
        $query = $this->db->query("SELECT SUM(beban_proyek) AS 'beban_proyek', SUM(beban_gaji) AS 'beban_gaji', SUM(tunjangan_hari_raya) AS 'tunjangan_hari_raya', SUM(beban_operasional) AS 'beban_operasional',
        SUM(beban_setoran_ui) AS 'beban_setoran_ui', SUM(beban_penyusutan) AS 'beban_penyusutan', SUM(beban_bonus) AS 'beban_bonus', SUM(beban_perlengkapan_kantor) AS 'beban_perlengkapan_kantor', SUM(beban_pengelolaan_rek) AS 'beban_pengelolaan_rek', SUM(beban_buku_cek) AS 'beban_buku_cek', SUM(beban_pajak) AS 'beban_pajak',
        SUM(rugi_penjualan_aset) AS 'rugi_penjualan_aset', SUM(beban_lainlain) AS 'beban_lainlain', SUM(rugi_selisih_kurs) AS 'rugi_selisih_kurs' FROM beban");
        return $query->result();
    }

    public function getSumPiutang()
    {
        $query = $this->db->query("SELECT SUM(JAMINAN_BANK) AS 'JAMINAN_BANK', SUM(PIUTANG_OPERASIONAL) AS 'PIUTANG_OPERASIONAL', SUM(PIUTANG_DAYA_MAKARA) AS 'PIUTANG_DAYA_MAKARA', SUM(PIUTANG_PROYEK) AS 'PIUTANG_PROYEK', SUM(PIUTANG_TVUI) AS 'PIUTANG_TVUI', SUM(PIUTANG_SOLAR_CAR) AS 'PIUTANG_SOLAR_CAR' FROM aktiva");
        return $query->result();
    }

    public function getSumHutang()
    {
        $query = $this->db->query("SELECT SUM(HUTANG_OPERASIONAL) AS 'HUTANG_OPERASIONAL', SUM(HUTANG_GAJI) AS 'HUTANG_GAJI', SUM(HUTANG_PROYEK) AS 'HUTANG_PROYEK', SUM(HUTANG_PADA_RTV) AS 'HUTANG_PADA_RTV' FROM pasiva");
        return $query->result();
    }

    public function getSumPenyusutanAlatKantor()
    {
        $query = $this->db->query("SELECT SUM(KOMPUTER) AS 'KOMPUTER', SUM(AKUM_PENY_KOMPUTER) AS 'AKUM_PENY_KOMPUTER', SUM(AC) AS 'AC', SUM(AKUM_PENY_AC) AS 'AKUM_PENY_AC', SUM(FAX) AS 'FAX', SUM(AKUM_PENY_FAX) AS 'AKUM_PENY_FAX', SUM(FURNITURE) AS 'FURNITURE', SUM(AKUM_PENY_FURNITURE) AS 'AKUM_PENY_FURNITURE', SUM(NOTEBOOK) AS 'NOTEBOOK', SUM(AKUM_PENY_NOTEBOOK) AS 'AKUM_PENY_NOTEBOOK', SUM(PRINTER) AS 'PRINTER', SUM(AKUM_PENY_PRINTER) AS 'AKUM_PENY_PRINTER', SUM(KAMERA_DIGITAL) AS 'KAMERA_DIGITAL', SUM(AKUM_PENY_KAMERA) AS 'AKUM_PENY_KAMERA', SUM(VIDEO_KAMERA) AS 'VIDEO_KAMERA', SUM(AKUM_PENY_VIDEO) AS 'AKUM_PENY_VIDEO' FROM aktiva");
        return $query->result();
    }

    public function getSumKasKecil()
    {
        $query = $this->db->query("SELECT SUM(KAS_KECIL) AS 'KAS_KECIL' FROM aktiva");
        return $query->result();
    }

    public function getSumKasPadaBank()
    {
        $query = $this->db->query("SELECT SUM(KAS_PADA_BANK) AS 'KAS_PADA_BANK' FROM aktiva");
        return $query->result();
    }

    public function getSumPerlengkapanKantor()
    {
        $query = $this->db->query("SELECT SUM(KOMPUTER) AS 'KOMPUTER', SUM(AC) AS 'AC', SUM(FAX) AS 'FAX', 
        SUM(FURNITURE) AS 'FURNITURE', SUM(NOTEBOOK) AS 'NOTEBOOK', SUM(PRINTER) AS 'PRINTER',
        SUM(KAMERA_DIGITAL) AS 'KAMERA_DIGITAL',SUM(VIDEO_KAMERA) AS 'VIDEO_KAMERA' FROM aktiva");
        return $query->result();
    }

    public function getSumPenyusutan()
    {
        $query = $this->db->query("SELECT SUM(AKUM_PENY_KOMPUTER) AS 'AKUM_PENY_KOMPUTER', SUM(AKUM_PENY_AC) AS 'AKUM_PENY_AC', 
        SUM(AKUM_PENY_FAX) AS 'AKUM_PENY_FAX', SUM(AKUM_PENY_FURNITURE) AS 'AKUM_PENY_FURNITURE',
        SUM(AKUM_PENY_NOTEBOOK) AS 'AKUM_PENY_NOTEBOOK', SUM(AKUM_PENY_PRINTER) AS 'AKUM_PENY_PRINTER', 
        SUM(AKUM_PENY_KAMERA) AS 'AKUM_PENY_KAMERA', SUM(AKUM_PENY_VIDEO) AS 'AKUM_PENY_VIDEO' FROM aktiva");
        return $query->result();
    }

    public function getPendapatan()
    {
        $query = $this->db->query("SELECT SUM(pendapatan_proyek) AS 'pendapatan_proyek', SUM(pendapatan_giro) AS 'pendapatan_giro', SUM(bonus) AS 'bonus',
        SUM(pendapatan_lainlain) AS 'pendapatan_lainlain' , SUM(laba_selisih_kurs) AS 'laba_selisih_kurs' FROM pendapatan");
        return $query->result();
    }

    public function getSumPendapatanByMonth()
    {
        $query = $this->db->query("SELECT TANGGAL_MASUK, SUM(pendapatan_proyek) AS 'pendapatan_proyek', SUM(pendapatan_giro) AS 'pendapatan_giro', SUM(bonus) AS 'bonus', SUM(pendapatan_lainlain) AS 'pendapatan_lainlain' , SUM(laba_selisih_kurs) AS 'laba_selisih_kurs' FROM pendapatan GROUP BY YEAR(TANGGAL_MASUK), MONTH(TANGGAL_MASUK)");
        return $query->result();
    }

    public function getSumBebanByMonth()
    {
        $query = $this->db->query("SELECT TANGGAL_MASUK, SUM(beban_proyek) AS 'beban_proyek', SUM(beban_gaji) AS 'beban_gaji', SUM(tunjangan_hari_raya) AS 'tunjangan_hari_raya', SUM(beban_operasional) AS 'beban_operasional',
        SUM(beban_setoran_ui) AS 'beban_setoran_ui', SUM(beban_penyusutan) AS 'beban_penyusutan', SUM(beban_bonus) AS 'beban_bonus', SUM(beban_perlengkapan_kantor) AS 'beban_perlengkapan_kantor', SUM(beban_pengelolaan_rek) AS 'beban_pengelolaan_rek', SUM(beban_buku_cek) AS 'beban_buku_cek', SUM(beban_pajak) AS 'beban_pajak',
        SUM(rugi_penjualan_aset) AS 'rugi_penjualan_aset', SUM(beban_lainlain) AS 'beban_lainlain', SUM(rugi_selisih_kurs) AS 'rugi_selisih_kurs' FROM beban GROUP BY YEAR(TANGGAL_MASUK), MONTH(TANGGAL_MASUK)");
        return $query->result();
    }
}
    
    /* End of file M_Dashboard.php */
