<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_Dashboard');
    }

    public function index()
    {
        $data['pendapatan'] = $this->M_Dashboard->getSumPendapatan();
        $data['beban'] = $this->M_Dashboard->getSumBeban();
        $data['piutang'] = $this->M_Dashboard->getSumPiutang();
        $data['hutang'] = $this->M_Dashboard->getSumHutang();
        $data['penyusutan_alat_kantor'] = $this->M_Dashboard->getSumPenyusutanAlatKantor();
        $data['kas_kecil'] = $this->M_Dashboard->getSumKasKecil();
        $data['kas_pada_bank'] = $this->M_Dashboard->getSumKasPadaBank();

        $data['pendapatan_by_month'] = $this->M_Dashboard->getSumPendapatanByMonth();
        $data['beban_by_month'] = $this->M_Dashboard->getSumBebanByMonth();


        $this->load->view('template/header');
        $this->load->view('sidebartemplate/dashboard');
        $this->load->view('dashboard', $data);
    }
}
