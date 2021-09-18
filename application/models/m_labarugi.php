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
        $query = $this->db->query('SELECT jenis_pendapatan FROM pendapatan');
        return $query->result();
    }

    //menampilkan pasiva
    public function tampil_beban()
    {
        $query = $this->db->query('SELECT jenis_beban FROM beban');
        return $query->result();
    }
}
