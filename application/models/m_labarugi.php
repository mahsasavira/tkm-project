<?php
class m_labarugi extends CI_Model
{
    public function get_noperk()
    {
        $this->db->database();
    }

    //menampilkan pendapatan
    public function tampil_pendapatan()
    {
        $query = $this->db->query('SELECT jenis_pendapatan FROM pendapatan');
        return $query->result();
    }

    //menampilkan pasiva
    public function tampil_beban()
    {
        $query = $this->db->query('SELECT jenis_beban FROM beban');
        return $query->result();
    }



    public function input_labarugi($id)
    {
        $data['nilai'] = $id['nilai'];
        $query = $this->db->get_where('pendapatan', array(
            'id_pendapatan' =>  $id['id_pendapatan']

        ));
        $count  = $query->num_rows();
        if ($count === 0) {
            $data = array(
                'id_pendapatan' => $id['id_pendapatan'],
                'nilai' => $id['nilai']

            );
            $this->db->insert('pendapatan', $data);
        } else {
            echo "Hayolo tidak boleh sama!";
        }
    }

    // function input_labarugi($post_data)
    // {
    //     $this->db->insert('pendapatan', $post_data);
    //     $insert_id = $this->db->insert_id();

    //     return  $insert_id;
    // }
}
