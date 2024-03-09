<?php

class Rombel_model extends CI_model
{
    public function getAllrombel()
    {
        return $this->db->get('kelas')->result_array();
    }
    public function tambahDataKelas()
    {
        $data = [
            "nama_kelas" => $this->input->post('nama_kelas', true),
            "nama_walikelas" => $this->input->post('nama_walikelas', true),

        ];
        $this->db->insert('kelas', $data);
    }
    public function hapusDataKelas($id_kelas)
    {
        $this->db->where('id_kelas', $id_kelas);
        $this->db->delete('kelas');
    }
    function update($id_kelas, $data)
    {
        $this->db->where($id_kelas);
        return $this->db->update('kelas', $data);
    }
}
