<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_user extends CI_Model
{
    public function tampil_user()
    {
        $query = $this->db->query('SELECT id_user,email,password FROM user');

        return $query->result();
    }

    public function tambah_user()
    {
        $id_user = $this->input->post('id_user');
        $email = $this->input->post('email');
        $password = $this->input->post('password');
        $level = $this->input->post('level');

        $data = array(
            'id_user' => $id_user,
            'email' => $email,
            'password' => $password,
            'level' => $level,
        );
        return $this->db->insert('user', $data);
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
