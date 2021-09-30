<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_login extends CI_Model
{
    function cek_login($email, $password = '')
    {
        // $this->db->where('email', $email);
        // if ($password != '') $this->db->where('password', md5($password));
        return $this->db->get('user');
    }
}
