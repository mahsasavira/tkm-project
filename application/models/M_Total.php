<?php
class M_Total extends CI_Model
{
    public function get_noperk()
    {
        $this->db->database();
    }

    public function get_sum_aktiva()
    {
        $jumlah = "SELECT SUM('kas_kecil , kas_pada_bank , piutang_operasional,piutang_daya_makara,
        piutang_proyek,piutang_tvui,piutang_solar_car,komputer,akum_peny_komputer,fax,akum_peny_fax,
        ac,akum_peny_ac,furniture,akum_peny_furniture,notebook,akum_peny_notebook,kamera_digital,
        akum_peny_kamera,printer,akum_peny_printer,video_kamera,akum_peny_video') as jumlah FROM aktiva";
        $result = $this->db->query($jumlah);
        // return $result->row()->id;
        echo "<pre>";
        print_r($jumlah);
        echo "</pre>";
    }
}
