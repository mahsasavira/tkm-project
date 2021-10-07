<?php
class M_neraca extends CI_Model
{
    public function get_noperk()
    {
        $this->db->database();
    }

    public function get_limit_aktiva($limit, $start)
    {
        return $this->db->get('aktiva', $limit, $start)->result_array();
    }
    //menampilkan AKTIVA
    public function tampil_aktiva()
    {
        $query = $this->db->query('SELECT id_aktiva,tanggal_masuk,kas_kecil,kas_pada_bank,jaminan_bank,piutang_operasional,piutang_daya_makara,
        piutang_proyek,piutang_tvui,piutang_solar_car,komputer,akum_peny_komputer,fax,akum_peny_fax,
        ac,akum_peny_ac,furniture,akum_peny_furniture,notebook,akum_peny_notebook,kamera_digital,
        akum_peny_kamera,printer,akum_peny_printer,video_kamera,akum_peny_video FROM aktiva');
        return $query->result();
    }

    public function tampil_aktiva_filter_by_date($tgl_awal, $tgl_akhir)
    {
        $query = $this->db->query("SELECT id_aktiva,tanggal_masuk,kas_kecil,kas_pada_bank,jaminan_bank,piutang_operasional,piutang_daya_makara,
        piutang_proyek,piutang_tvui,piutang_solar_car,komputer,akum_peny_komputer,fax,akum_peny_fax,
        ac,akum_peny_ac,furniture,akum_peny_furniture,notebook,akum_peny_notebook,kamera_digital,
        akum_peny_kamera,printer,akum_peny_printer,video_kamera,akum_peny_video FROM aktiva WHERE tanggal_masuk BETWEEN '$tgl_awal' AND '$tgl_akhir'");
        return $query->result();
    }

    public function cetak_aktiva_filter_by_date($tgl_awal, $tgl_akhir)
    {
        $query = $this->db->query("SELECT SUM(kas_kecil) AS 'kas_kecil', SUM(kas_pada_bank) AS 'kas_pada_bank', SUM(jaminan_bank) AS 'jaminan_bank',
        SUM(piutang_operasional) AS 'piutang_operasional', SUM(piutang_daya_makara) AS 'piutang_daya_makara' , SUM(piutang_proyek) AS 'piutang_proyek',
        SUM(piutang_tvui) AS 'piutang_tvui', SUM(piutang_solar_car) AS 'piutang_solar_car', SUM(komputer) AS 'komputer', SUM(akum_peny_komputer) AS 'akum_peny_komputer' ,
        SUM(fax) AS 'fax' , SUM(akum_peny_fax) AS 'akum_peny_fax', SUM(ac) AS 'ac', SUM(akum_peny_ac) AS 'akum_peny_ac',
        SUM(furniture) AS 'furniture' , SUM(akum_peny_furniture) AS 'akum_peny_furniture' , SUM(notebook) AS 'notebook',
        SUM(akum_peny_notebook) AS 'akum_peny_notebook' , SUM(kamera_digital) AS 'kamera_digital' , SUM(akum_peny_kamera) AS 'akum_peny_kamera',
        SUM(printer) AS 'printer' , SUM(akum_peny_printer) AS 'akum_peny_printer' , SUM(video_kamera) AS 'video_kamera' ,
        SUM(akum_peny_video) AS 'akum_peny_video' FROM aktiva WHERE tanggal_masuk BETWEEN '$tgl_awal' AND '$tgl_akhir'");
        return $query->result();
    }

    public function cetak_aktiva()
    {
        $query = $this->db->query("SELECT SUM(kas_kecil) AS 'kas_kecil', SUM(kas_pada_bank) AS 'kas_pada_bank', SUM(jaminan_bank) AS 'jaminan_bank',
        SUM(piutang_operasional) AS 'piutang_operasional', SUM(piutang_daya_makara) AS 'piutang_daya_makara' , SUM(piutang_proyek) AS 'piutang_proyek',
        SUM(piutang_tvui) AS 'piutang_tvui', SUM(piutang_solar_car) AS 'piutang_solar_car', SUM(komputer) AS 'komputer',
        SUM(akum_peny_komputer) AS 'akum_peny_komputer' , SUM(fax) AS 'fax' , SUM(akum_peny_fax) AS 'akum_peny_fax',
        SUM(ac) AS 'ac', SUM(akum_peny_ac) AS 'akum_peny_ac', SUM(furniture) AS 'furniture' , SUM(akum_peny_furniture) AS 'akum_peny_furniture' ,
        SUM(notebook) AS 'notebook', SUM(akum_peny_notebook) AS 'akum_peny_notebook' , SUM(kamera_digital) AS 'kamera_digital' ,
        SUM(akum_peny_kamera) AS 'akum_peny_kamera', SUM(printer) AS 'printer' , SUM(akum_peny_printer) AS 'akum_peny_printer' , SUM(video_kamera) AS 'video_kamera' ,
        SUM(akum_peny_video) AS 'akum_peny_video' FROM aktiva");
        return $query->result();
    }

    //menampilkan pasiva
    public function tampil_pasiva()
    {
        $query = $this->db->query('SELECT id_pasiva,tanggal_masuk,hutang_operasional,hutang_gaji,hutang_proyek,hutang_pada_rtv FROM pasiva');
        return $query->result();
    }

    public function tampil_pasiva_filter_by_date($tgl_awal, $tgl_akhir)
    {
        $query = $this->db->query("SELECT id_pasiva,tanggal_masuk,hutang_operasional,hutang_gaji,hutang_proyek,hutang_pada_rtv FROM pasiva WHERE tanggal_masuk BETWEEN '$tgl_awal' AND '$tgl_akhir'");
        return $query->result();
    }

    public function cetak_pasiva_filter_by_date($tgl_awal, $tgl_akhir)
    {
        $query = $this->db->query("SELECT SUM(hutang_operasional) AS 'hutang_operasional', SUM(hutang_gaji) AS 'hutang_gaji', SUM(hutang_proyek) AS 'hutang_proyek',
        SUM(hutang_pada_rtv) AS 'hutang_pada_rtv' FROM pasiva WHERE tanggal_masuk BETWEEN '$tgl_awal' AND '$tgl_akhir'");
        return $query->result();
    }

    public function cetak_pasiva()
    {
        $query = $this->db->query("SELECT SUM(hutang_operasional) AS 'hutang_operasional', SUM(hutang_gaji) AS 'hutang_gaji', SUM(hutang_proyek) AS 'hutang_proyek',
        SUM(hutang_pada_rtv) AS 'hutang_pada_rtv' FROM pasiva");
        return $query->result();
    }

    // tambah aktiva
    public function tambah_aktiva()
    {
        $tanggal_masuk = $this->input->post('tanggal_masuk');
        $kas_kecil = $this->input->post('kas_kecil');
        $kas_pada_bank = $this->input->post('kas_pada_bank');
        $jaminan_bank = $this->input->post('jaminan_bank');
        $piutang_operasional = $this->input->post('piutang_operasional');
        $piutang_daya_makara = $this->input->post('piutang_daya_makara');
        $piutang_proyek = $this->input->post('piutang_proyek');
        $piutang_tvui = $this->input->post('piutang_tvui');
        $piutang_solar_car = $this->input->post('piutang_solar_car');
        $komputer = $this->input->post('komputer');
        $akum_peny_komputer = $this->input->post('akum_peny_komputer');
        $ac = $this->input->post('ac');
        $akum_peny_ac = $this->input->post('akum_peny_ac');
        $fax = $this->input->post('fax');
        $akum_peny_fax = $this->input->post('akum_peny_fax');
        $furniture = $this->input->post('furniture');
        $akum_peny_furniture = $this->input->post('akum_peny_furniture');
        $notebook = $this->input->post('notebook');
        $akum_peny_notebook = $this->input->post('akum_peny_notebook');
        $kamera_digital = $this->input->post('kamera_digital');
        $akum_peny_kamera = $this->input->post('akum_peny_kamera');
        $printer = $this->input->post('printer');
        $akum_peny_printer = $this->input->post('akum_peny_printer');
        $video_kamera = $this->input->post('video_kamera');
        $akum_peny_video = $this->input->post('akum_peny_video');

        $data = array(
            'tanggal_masuk' => $tanggal_masuk,
            'kas_kecil' => $kas_kecil,
            'kas_pada_bank' => $kas_pada_bank,
            'jaminan_bank' => $jaminan_bank,
            'piutang_operasional' => $piutang_operasional,
            'piutang_daya_makara' => $piutang_daya_makara,
            'piutang_proyek' => $piutang_proyek,
            'piutang_tvui' => $piutang_tvui,
            'piutang_solar_car' => $piutang_solar_car,
            'komputer' => $komputer,
            'akum_peny_komputer' => $akum_peny_komputer,
            'ac' => $ac,
            'akum_peny_ac' => $akum_peny_ac,
            'fax' => $fax,
            'akum_peny_fax' => $akum_peny_fax,
            'furniture' => $furniture,
            'akum_peny_furniture' => $akum_peny_furniture,
            'notebook' => $notebook,
            'akum_peny_notebook' => $akum_peny_notebook,
            'kamera_digital' => $kamera_digital,
            'akum_peny_kamera' => $akum_peny_kamera,
            'printer' => $printer,
            'akum_peny_printer' => $akum_peny_printer,
            'video_kamera' => $video_kamera,
            'akum_peny_video' => $akum_peny_video,
        );
        return $this->db->insert('aktiva', $data);
    }

    public function hapus_aktiva($id)
    {
        $this->db->where('id_aktiva', $id);
        $this->db->delete('aktiva');
    }

    public function get_data_aktiva($id)
    {
        $this->db->where('id_aktiva', $id);
        $query = $this->db->get('aktiva');
        return $query->row();
    }

    function update_data_aktiva($where, $data, $table)
    {
        return $this->db->update($table, $data, $where);
    }

    public function tambah_pasiva()
    {
        $tanggal_masuk = $this->input->post('tanggal_masuk');
        $hutang_operasional = $this->input->post('hutang_operasional');
        $hutang_gaji = $this->input->post('hutang_gaji');
        $hutang_proyek = $this->input->post('hutang_proyek');
        $hutang_pada_rtv = $this->input->post('hutang_pada_rtv');

        $data = array(
            'tanggal_masuk' => $tanggal_masuk,
            'hutang_operasional' => $hutang_operasional,
            'hutang_gaji' => $hutang_gaji,
            'hutang_proyek' => $hutang_proyek,
            'hutang_pada_rtv' => $hutang_pada_rtv,
        );
        return $this->db->insert('pasiva', $data);
    }

    public function hapus_pasiva($id)
    {
        $this->db->where('id_pasiva', $id);
        $this->db->delete('pasiva');
    }

    public function get_data_pasiva($id)
    {
        $this->db->where('id_pasiva', $id);
        $query = $this->db->get('pasiva');
        return $query->row();
    }

    function update_data_pasiva($where, $data, $table)
    {
        return $this->db->update($table, $data, $where);
    }
}
