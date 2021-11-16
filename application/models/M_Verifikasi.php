<?php
class M_Verifikasi extends CI_Model
{
    public function get_noperk()
    {
        $this->db->database();
    }

    public function get_limit_aktiva($limit, $start)
    {
        return $this->db->get('aktiva', $limit, $start)->result_array();
    }
    //menampilkan AKTIVA
    public function tampil_aktiva()
    {
        $query = $this->db->query('SELECT id_aktiva,tanggal_masuk,kas_kecil,kas_pada_bank,jaminan_bank,piutang_operasional,piutang_daya_makara,
        piutang_proyek,piutang_tvui,piutang_solar_car,komputer,akum_peny_komputer,fax,akum_peny_fax,
        ac,akum_peny_ac,furniture,akum_peny_furniture,notebook,akum_peny_notebook,kamera_digital,
        akum_peny_kamera,printer,akum_peny_printer,video_kamera,akum_peny_video FROM aktiva WHERE STATUS_AKTIVA = 0');
        return $query->result();
    }

    //menampilkan pasiva
    public function tampil_pasiva()
    {
        $query = $this->db->query('SELECT id_pasiva,tanggal_masuk,hutang_operasional,hutang_gaji,hutang_proyek,hutang_pada_rtv FROM pasiva WHERE STATUS_PASIVA = 0');
        return $query->result();
    }

    function update_data_aktiva($table, $data, $where)
    {
        return $this->db->update($table, $data, $where);
    }

    public function tampil_modal()
    {
        $query = $this->db->query('SELECT id_aruskas,tanggal_masuk,saldo_akhir FROM arus_kas');
        return $query->result();
    }

    public function tampil_pendapatan()
    {
        $query = $this->db->query('SELECT id_pendapatan,tanggal_masuk,pendapatan_proyek,pendapatan_giro,bonus,
        pendapatan_lainlain,laba_selisih_kurs FROM pendapatan WHERE STATUS_PENDAPATAN = 0');
        return $query->result();
    }

    public function tampil_beban()
    {
        $query = $this->db->query('SELECT id_beban,tanggal_masuk,beban_proyek,beban_gaji,tunjangan_hari_raya,beban_operasional,
        beban_setoran_ui,beban_penyusutan,beban_bonus,beban_perlengkapan_kantor,beban_pengelolaan_rek,beban_buku_cek,beban_pajak,
        rugi_penjualan_aset,beban_lainlain,rugi_selisih_kurs FROM beban WHERE STATUS_BEBAN = 0');
        return $query->result();
    }
}
