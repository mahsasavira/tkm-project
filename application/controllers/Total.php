<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Total extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_neraca');
        $this->load->model('m_labarugi');
        $this->load->model('m_total');
    }
}
