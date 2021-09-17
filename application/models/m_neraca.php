<?php
class m_neraca extends CI_Model
{
    public function get_noperk()
    {
        $this->db->database();
    }

    //menampilkan nomor perkiraan
    public function tampil_data()
    {
        $query = $this->db->query('SELECT * FROM no_perk');
        return $query->result();
    }
}
