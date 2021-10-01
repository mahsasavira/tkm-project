<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_user extends CI_Model
{
    public function tampil_user()
    {
        $query = $this->db->query('SELECT * FROM user');

        return $query->result();
    }

    public function get_data_user($id)
    {
        $this->db->where('id_user', $id);
        $query = $this->db->get('user');
        return $query->row();
    }

    function update_data_user($where, $data, $table)
    {
        return $this->db->update($table, $data, $where);
    }
}
