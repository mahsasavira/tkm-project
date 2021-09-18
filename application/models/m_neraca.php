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
        $query = $this->db->query('SELECT id_aktiva,jenis_aktiva FROM aktiva');
        return $query->result();
    }

    //menampilkan pasiva
    public function tampil_pas()
    {
        $query = $this->db->query('SELECT id_pasiva,jenis_pasiva FROM pasiva');
        return $query->result();
    }
}
