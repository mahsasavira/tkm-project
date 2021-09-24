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
    public function tambah_aktiva($data)
    {
        return $this->db->insert('aktiva', $data);
    }

    public function hapus_aktiva($id)
    {
        $this->db->where('id_aktiva', $id);
        $this->db->delete('aktiva');
    }

    public function edit_aktiva($id)
    {
        $params['id_aktiva'] = $id['id_aktiva'];
        $params['kas_kecil'] = $id['kas_kecil'];
        $params['kas_pada_bank'] = $id['kas_pada_bank'];
        $this->db->where('id_aktiva', $id['id_aktiva']);
        $this->db->update('aktiva', $params);
    }

    public function get_data_aktiva($id_aktiva)
    {
        $this->db->where('id_aktiva', $id_aktiva);
        $query = $this->db->get('aktiva');
        return $query->row();
    }

    public function hapus_pasiva($id)
    {
        $this->db->where('id_pasiva', $id);
        $this->db->delete('pasiva');
    }
}
