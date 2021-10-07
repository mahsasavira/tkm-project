<?php
class M_labarugi extends CI_Model
{
    public function tampil_pasiva()
    {
        $query = $this->db->query('SELECT id_pasiva,tanggal_masuk,hutang_operasional,hutang_gaji,hutang_proyek,hutang_pada_rtv FROM pasiva');
        return $query->result();
    }

    public function tampil_pasiva_filter_by_date($tgl_awal, $tgl_akhir)
    {
        $query = $this->db->query("SELECT id_pasiva,tanggal_masuk,hutang_operasional,hutang_gaji,hutang_proyek,hutang_pada_rtv FROM pasiva WHERE tanggal_masuk BETWEEN '$tgl_awal' AND '$tgl_akhir'");
        return $query->result();
    }

    public function cetak_pasiva_filter_by_date($tgl_awal, $tgl_akhir)
    {
        $query = $this->db->query("SELECT SUM(hutang_operasional) AS 'hutang_operasional', SUM(hutang_gaji) AS 'hutang_gaji', SUM(hutang_proyek) AS 'hutang_proyek',
SUM(hutang_pada_rtv) AS 'hutang_pada_rtv' FROM pasiva WHERE tanggal_masuk BETWEEN '$tgl_awal' AND '$tgl_akhir'");
        return $query->result();
    }

    public function cetak_pasiva()
    {
        $query = $this->db->query("SELECT SUM(hutang_operasional) AS 'hutang_operasional', SUM(hutang_gaji) AS 'hutang_gaji', SUM(hutang_proyek) AS 'hutang_proyek',
SUM(hutang_pada_rtv) AS 'hutang_pada_rtv' FROM pasiva");
        return $query->result();
    }
}
