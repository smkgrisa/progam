<?php

class Siswa_model extends CI_model
{
    public function getAllsiswa()
    {
        // return $this->db->get('datadirisiswa')->result_array();

        $this->db->select('datadirisiswa.id, datadirisiswa.namalengkap, datadirisiswa.tanggallahir, datadirisiswa.nik, kelas.nama_kelas, regpdmasuk.nisn, regpdmasuk.nis');
        $this->db->from('datadirisiswa');
        $this->db->join('kelas', 'kelas.id_kelas = datadirisiswa.id_kelas', 'left');
        $this->db->join('regpdmasuk', 'regpdmasuk.id = datadirisiswa.id_regpdmasuk', 'left');
        $query = $this->db->get()->result_array();
        return $query;
    }

    public function getBy($data)
    {
        return $this->db->get_where($data)->row_array();
    }

    // public function getSiswaByid($id_siswa)
    // {
    //     $this->db->select('
    //         datadirisiswa.id_kelas,
    //         datadirisiswa.id_regpdmasuk,
    //         datadirisiswa.namalengkap,
    //         datadirisiswa.namapanggilan,
    //         datadirisiswa.jk,
    //         datadirisiswa.nokk,
    //         datadirisiswa.nik,
    //         datadirisiswa.tempatlahir,
    //         datadirisiswa.tanggallahir,
    //         datadirisiswa.agama,
    //         datadirisiswa.akte,
    //         datadirisiswa.anakkeberapa,
    //         datadirisiswa.saudarakandung,
    //         datadirisiswa.alamat,
    //         datadirisiswa.dusun,
    //         datadirisiswa.rtrw,
    //         datadirisiswa.desa,
    //         datadirisiswa.kecamatan,
    //         datadirisiswa.kabupaten,
    //         datadirisiswa.provinsi,
    //         datadirisiswa.kewarganegaraan,
    //         datadirisiswa.tempattinggal,
    //         datadirisiswa.moda,
    //         datadirisiswa.jarak,
    //         datadirisiswa.tinggibadan,
    //         datadirisiswa.beratbadan,

    //         kelas.id_jurusan,
    //         kelas.nama_kelas,
    //         kelas.nama_walikelas,

    //         regpdmasuk.diterima,
    //         regpdmasuk.jurusan_,
    //         regpdmasuk.pendaftaran,
    //         regpdmasuk.nisn,
    //         regpdmasuk.nis,
    //         regpdmasuk.tglmasuk,
    //         regpdmasuk.asalsekolahmutasi,
    //         regpdmasuk.asalsekolahsmp,
    //         regpdmasuk.noijazahsmp,
    //         regpdmasuk.tglijazahsmp,
    //         regpdmasuk.kelassekarang,

    //         orangtua.ayah,
    //         orangtua.nikayah,
    //         orangtua.tahunlahirayah,
    //         orangtua.pendidikanayah,
    //         orangtua.pekerjaanayah,
    //         orangtua.penghasilanayah,
    //         orangtua.kebutuhankhususayah,
    //         orangtua.namaibu,
    //         orangtua.nikibu,
    //         orangtua.tahunlahiribu,
    //         orangtua.pendidikanibu,
    //         orangtua.pekerjaanibu,
    //         orangtua.penghasilanibu,
    //         orangtua.kebutuhankhususibu,
    //         orangtua.namawali,
    //         orangtua.nikwali,
    //         orangtua.tahunlahirwali,
    //         orangtua.pendidikanwali,
    //         orangtua.pekerjaanwali,
    //         orangtua.penghasilanwali,



    //     datadirisiswa.id, datadirisiswa.namalengkap, datadirisiswa.tanggallahir, datadirisiswa.nik, kelas.nama_kelas, regpdmasuk.nisn, regpdmasuk.nis');
    //     // $this->db->from('datadirisiswa');
    //     $this->db->join('kelas', 'kelas.id_kelas = datadirisiswa.id_kelas', 'left');
    //     $this->db->join('regpdmasuk', 'regpdmasuk.id = datadirisiswa.id_regpdmasuk', 'left');
    //     $query = $this->db->get_where('datadirisiswa', ['datadirisiswa.id' => $id_siswa])->row_array();
    //     return $query;
    // }

    public function tambahDataSiswa()
    {
        $data = [
            "namalengkap" => $this->input->post('namalengkap', true),
            "tanggallahir" => $this->input->post('tanggallahir', true),
            "nik" => $this->input->post('nik', true),
            "id_kelas" => $this->input->post('id_kelas', true)

        ];

        $this->db->insert('datadirisiswa', $data);

        $this->db->where(['nik' => $this->input->post('nik', true)]);
        $datadirisiswa = $this->db->get('datadirisiswa')->row();

        $data2 = [
            "id_regpdmasuk" => $datadirisiswa->id,
            "nisn" => $this->input->post('nisn', true),
            "nis" => $this->input->post('nis', true),
        ];

        $this->db->insert('regpdmasuk', $data2);
    }

    public function hapusDataSiswa($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('datadirisiswa');
    }
}
