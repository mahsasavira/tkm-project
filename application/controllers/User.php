<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('m_login');
        $this->load->model('m_user');
    }

    function profile()
    {
        $this->load->view('template/header');
        $this->load->view('sidebartemplate/profil');
        $this->load->view('user/profil_pengguna');
    }

    function profile_biasa()
    {
        $this->load->view('template/header');
        $this->load->view('sidebartemplate/profil');
        $this->load->view('user/profil_pengguna');
    }

    function mnj_user()
    {
        $this->load->view('template/header');
        $this->load->view('sidebartemplate/profil');
        $this->load->view('user/mnj_user');
    }

    public function tambah_user()
    {
        if ($this->input->post()) {
            $this->m_user->tambah_user();
            redirect('user/mnj_user');
        } else {
            $this->load->view('template/header');
            $this->load->view('sidebartemplate/profil');
            $this->load->view('user/mnj_user');
        }
    }

    public function edit_user($id)
    {
        $editus = $this->m_user->get_data_user($id);
        $data = array('edit' => $editus);
        // echo "<pre>";
        // print_r($queryedit);
        // echo "</pre>";
        $this->load->view('template/header');
        $this->load->view('sidebartemplate/profil');
        $this->load->view('user/set_profil', $data);
    }

    // public function update_user()
    // {
    //     $id_user = $this->input->post('id_user');
    //     $nama = $this->input->post('nama');

    //     $data = array(
    //         'nama' => $nama,
    //     );

    //     $where = array(
    //         'id_user' => $id_user
    //     );

    //     $proc = $this->m_neraca->update_data_user($where, $data, 'user');
    //     redirect('user/set_profil');
    // }
}
