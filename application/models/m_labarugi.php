<?php
class M_labarugi extends CI_Model
{
    public function get_noperk()
    {
        $this->db->database();
    }

    //menampilkan pendapatan
    public function tampil_pendapatan()
    {
        $query = $this->db->query('SELECT id_pendapatan,tanggal_masuk,pendapatan_proyek,pendapatan_giro,bonus,
        pendapatan_lainlain,laba_selisih_kurs FROM pendapatan');
        return $query->result();
    }

    //menampilkan pasiva
    public function tampil_beban()
    {
        $query = $this->db->query('SELECT id_beban,tanggal_masuk,beban_proyek,beban_gaji,tunjangan_hari_raya,beban_operasional,
        beban_setoran_ui,beban_penyusutan,beban_bonus,beban_perlengkapan_kantor,beban_pengelolaan_rek,beban_buku_cek,beban_pajak,
        rugi_penjualan_aset,beban_lainlain,rugi_selisih_kurs FROM beban');
        return $query->result();
    }

    public function tambah_pendapatan()
    {
        $tanggal_masuk = $this->input->post('tanggal_masuk');
        $pendapatan_proyek = $this->input->post('pendapatan_proyek');
        $pendapatan_giro = $this->input->post('pendapatan_giro');
        $bonus = $this->input->post('bonus');
        $pendapatan_lainlain = $this->input->post('pendapatan_lainlain');
        $laba_selisih_kurs = $this->input->post('laba_selisih_kurs');

        $data = array(
            'tanggal_masuk' => $tanggal_masuk,
            'pendapatan_proyek' => $pendapatan_proyek,
            'pendapatan_giro' => $pendapatan_giro,
            'bonus' => $bonus,
            'pendapatan_lainlain' => $pendapatan_lainlain,
            'laba_selisih_kurs' => $laba_selisih_kurs,
        );
        return $this->db->insert('pendapatan', $data);
    }

    public function hapus_pendapatan($id)
    {
        $this->db->where('id_pendapatan', $id);
        $this->db->delete('pendapatan');
    }

    public function get_data_pendapatan($id)
    {
        $this->db->where('id_pendapatan', $id);
        $query = $this->db->get('pendapatan');
        return $query->row();
    }

    function update_data_pendapatan($where, $data, $table)
    {
        return $this->db->update($table, $data, $where);
    }

    public function tambah_beban()
    {
        $tanggal_masuk = $this->input->post('tanggal_masuk');
        $beban_proyek = $this->input->post('beban_proyek');
        $beban_gaji = $this->input->post('beban_gaji');
        $tunjangan_hari_raya = $this->input->post('tunjangan_hari_raya');
        $beban_operasional = $this->input->post('beban_operasional');
        $beban_setoran_ui = $this->input->post('beban_setoran_ui');
        $beban_penyusutan = $this->input->post('beban_penyusutan');
        $beban_bonus = $this->input->post('beban_bonus');
        $beban_perlengkapan_kantor = $this->input->post('beban_perlengkapan_kantor');
        $beban_pengelolaan_rek = $this->input->post('beban_pengelolaan_rek');
        $beban_buku_cek = $this->input->post('beban_buku_cek');
        $beban_pajak = $this->input->post('beban_pajak');
        $beban_lainlain = $this->input->post('beban_lainlain');
        $rugi_penjualan_aset = $this->input->post('rugi_penjualan_aset');
        $rugi_selisih_kurs = $this->input->post('rugi_selisih_kurs');

        $data = array(
            'tanggal_masuk' => $tanggal_masuk,
            'beban_proyek' => $beban_proyek,
            'beban_gaji' => $beban_gaji,
            'tunjangan_hari_raya' => $tunjangan_hari_raya,
            'beban_operasional' => $beban_operasional,
            'beban_setoran_ui' => $beban_setoran_ui,
            'beban_penyusutan' => $beban_penyusutan,
            'beban_bonus' => $beban_bonus,
            'beban_perlengkapan_kantor' => $beban_perlengkapan_kantor,
            'beban_pengelolaan_rek' => $beban_pengelolaan_rek,
            'beban_buku_cek' => $beban_buku_cek,
            'beban_pajak' => $beban_pajak,
            'beban_lainlain' => $beban_lainlain,
            'rugi_penjualan_aset' => $rugi_penjualan_aset,
            'rugi_selisih_kurs' => $rugi_selisih_kurs,
        );
        return $this->db->insert('beban', $data);
    }

    public function hapus_beban($id)
    {
        $this->db->where('id_beban', $id);
        $this->db->delete('beban');
    }

    public function get_data_beban($id)
    {
        $this->db->where('id_beban', $id);
        $query = $this->db->get('beban');
        return $query->row();
    }

    function update_data_beban($where, $data, $table)
    {
        return $this->db->update($table, $data, $where);
    }
}
