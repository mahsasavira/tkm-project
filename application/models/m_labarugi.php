<?php
class m_labarugi extends CI_Model
{
    public function get_noperk()
    {
        $this->db->database();
    }

    //menampilkan pendapatan
    public function tampil_pendapatan()
    {
        $query = $this->db->query('SELECT id_pendapatan,pendapatan_proyek,pendapatan_giro,pendapatan_lainlain,laba_selisih_kurs FROM pendapatan');
        return $query->result();
    }

    //menampilkan pasiva
    public function tampil_beban()
    {
        $query = $this->db->query('SELECT id_beban,beban_proyek,beban_gaji,beban_operasional,beban_penyusutan,beban_bonus,beban_perlengkapan_kantor,beban_pajak,beban_lainlain,rugi_selisih_kurs FROM beban');
        return $query->result();
    }



    public function tambah_labarugi($data)
    {
        // $data['nilai'] = $post['nilai'];
        // $this->db->where('nilai', $data);
        $nilai = $data['nilai'];
        $this->db->set('nilai', $nilai);
        $this->db->where('id_pendapatan', $data['id_pendapatan']);
        $this->db->update('pendapatan');
        // $query = $this->db->query('UPDATE pendapatan set nilai=' . $nilai . 'where id_pendapatan=' . $data['id_pendapatan']);
    }
}
