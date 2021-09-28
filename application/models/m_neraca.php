<?php
class M_neraca extends CI_Model
{
    public function get_noperk()
    {
        $this->db->database();
    }

    //menampilkan AKTIVA
    public function tampil_aktiva()
    {
        $query = $this->db->query('SELECT id_aktiva,tanggal_masuk,kas_kecil,kas_pada_bank,piutang_operasional,piutang_daya_makara,
        piutang_proyek,piutang_tvui,piutang_solar_car,komputer,akum_peny_komputer,fax,akum_peny_fax,
        ac,akum_peny_ac,furniture,akum_peny_furniture,notebook,akum_peny_notebook,kamera_digital,
        akum_peny_kamera,printer,akum_peny_printer,video_kamera,akum_peny_video FROM aktiva');

        return $query->result();
    }

    //menampilkan pasiva
    public function tampil_pasiva()
    {
        $query = $this->db->query('SELECT id_pasiva,tanggal_masuk,hutang_operasional,hutang_gaji,hutang_proyek,hutang_pada_rtv FROM pasiva');
        return $query->result();
    }

    // tambah aktiva
    public function tambah_aktiva()
    {
        $tanggal_masuk = $this->input->post('tanggal_masuk');
        $kas_kecil = $this->input->post('kas_kecil');
        $kas_pada_bank = $this->input->post('kas_pada_bank');
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

    public function edit_aktiva($where, $table)
    {
        // <<<<<<< Updated upstream
        return $this->db->get_where($table, $where);
        // $params['id_aktiva'] = $id['id_aktiva'];
        // $params['kas_kecil'] = $id['kas_kecil'];
        // $params['kas_pada_bank'] = $id['kas_pada_bank'];
        // $this->db->where('id_aktiva', $id['id_aktiva']);
        // $this->db->update('aktiva', $params);
    }

    //     function update_data($where, $data, $table)
    //     {
    //         $this->db->where($where);
    //         $this->db->update($table, $data);
    // =======
    //         $params = array(
    //             'id_aktiva' => $id['id_aktiva'],
    //             'kas_kecil' => $id['kas_kecil'],
    //             'kas_pada_bank' => $id['kas_pada_bank'],
    //         );
    //         $this->db->set($params);
    //         $this->db->where('id_aktiva', $id['id_aktiva']);
    //         $this->db->update('aktiva', $params);
    // >>>>>>> Stashed changes
    //     }

    public function get_data_aktiva($id)
    {
        $this->db->where('id_aktiva', $id);
        $query = $this->db->get('aktiva');
        return $query->row();
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

    public function edit_pasiva($id)
    {
        $params = array(
            'id_pasiva' => $id['id_pasiva'],
            'hutang_operasional' => $id['hutang_operaional'],
            // 'kas_kecil' => $id['kas_kecil'],
            // 'kas_pada_bank' => $id['kas_pada_bank'],
        );
        $this->db->where('id_pasiva', $id['id_pasiva']);
        $this->db->update('aktiva', $params);
    }
}
