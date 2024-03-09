<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Jurusan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Jurusan_model');
    }
    public function index()
    {
        $data['judul'] = 'Jurusan';
        $data['contents'] = 'kompetensi/jurusan';
        $data['jurusan'] = $this->Jurusan_model->getAlljurusan();
        $this->load->view('templates/index', $data);
    }

    public function tambah()
    {
        $data['judul'] = 'form tambah jurusan';
        $data['contents'] = 'kompetensi/jurusan';
        $this->load->view('templates/index', $data);

        $this->Jurusan_model->tambahDataJurusan();
        // flashdata
        $this->session->set_flashdata(['status' => 'success', 'message' => 'Data berhasil ditambahkan!']);

        redirect('jurusan');
    }

    public function hapus($id_jurusan)
    {
        $this->Jurusan_model->hapusDataJurusan($id_jurusan);
        $this->session->set_flashdata(['status' => 'success', 'message' => 'Data berhasil dihapus!']);
        redirect('jurusan');
    }
    // public function ubah($id_jurusan)
    // {
    //     $data['judul'] = 'form ubah jurusan';
    //     $data['jurusan'] = $this->Jurusan_model->getJurusanByid($id_jurusan);
    //     $data['contents'] = 'kompetensi/jurusan';
    //     $this->load->view('templates/index', $data);

    //     $this->Jurusan_model->ubahDataJurusan();
    //     // flashdata
    //     $this->session->set_flashdata(['status' => 'success', 'message' => 'Data berhasil di ubah']);

    //     redirect('jurusan');
    // }
    // public function update()
    // {
    //     $id_jurusan = $this->uri->segment(3);
    //     $data = $this->db->get_where('jurusan', ['id_jurusan' => $id_jurusan])->row_array();
    //     var_dump($data);
    // }

    public function edit($id_jurusan)
    {
        $data = $this->db->get_where('jurusan', ['id_jurusan' => $id_jurusan])->row_array();
        echo json_encode($data);
    }

    public function update()
    {
        $id_jurusan = $this->input->post('id_jurusan');

        $data = [
            'kode_jurusan'  => $this->input->post('kode_jurusan'),
            'nama_jurusan'  => $this->input->post('nama_jurusan'),
            'singkatan'    => $this->input->post('edit_singkatan')
        ];
        // print_r($id_jurusan);
        // exit();
        if ($this->Jurusan_model->update(['id_jurusan' => $id_jurusan], $data)) {
            $this->session->set_flashdata(['status' => 'success', 'message' => 'Data berhasil diupdate']);
            redirect('jurusan');
        }
    }
}
