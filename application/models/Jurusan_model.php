<?php

class Jurusan_model extends CI_model
{
    public function getAlljurusan()
    {
        return $this->db->get('jurusan')->result_array();
    }

    public function tambahDataJurusan()
    {
        $data = [
            "kode_jurusan" => $this->input->post('kode_jurusan', true),
            "nama_jurusan" => $this->input->post('nama_jurusan', true),
            "singkatan" => $this->input->post('singkatan', true),
        ];
        $this->db->insert('jurusan', $data);
    }
    public function hapusDataJurusan($id_jurusan)
    {
        $this->db->where('id_jurusan', $id_jurusan);
        $this->db->delete('jurusan');
    }
    public function getJurusanByid($id_jurusan)
    {
        return $this->db->get_where('jurusan', ['id_jurusan' => $id_jurusan])->row_array();
    }

    function update($id_jurusan, $data)
    {
        $this->db->where($id_jurusan);
        return $this->db->update('jurusan', $data);
    }
}
