<?php
class m_neraca extends CI_Model
{
    public function get_noperk()
    {
        $this->db->database();
    }

    //menampilkan AKTIVA
    public function tampil_data()
    {
        $query = $this->db->query('SELECT id_aktiva,kas_kecil,kas_pada_bank,piutang_operasional,piutang_daya_makara,piutang_proyek,piutang_tvui,piutang_solar_car FROM aktiva');
        return $query->result();
    }

    //menampilkan pasiva
    public function tampil_pas()
    {
        $query = $this->db->query('SELECT id_pasiva,hutang_operasional,hutang_gaji,hutang_proyek,hutang_pada_rtv FROM pasiva');
        return $query->result();
    }

    //tambah aktiva
    public function tambah_akt()
    {
        $query = $this->db->get_where('nilai');
    }
}
