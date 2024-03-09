<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Rombel extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Rombel_model');
    }
    public function index()
    {
        $data['judul'] = 'Rombel';
        $data['rombel'] = $this->Rombel_model->getAllrombel();
        $data['contents'] = 'rombel/index';
        $this->load->view('templates/index', $data);
    }
    public function tambah()
    {
        $data['judul'] = 'form tambah rombel';
        $data['contents'] = 'rombel/index';
        $this->load->view('templates/index', $data);

        $this->Rombel_model->tambahDataKelas();
        // flashdata
        $this->session->set_flashdata(['status' => 'success', 'message' => 'Data berhasil ditambahkan!']);

        redirect('rombel/index');
    }
    public function hapus($id_kelas)
    {
        $this->Rombel_model->hapusDataKelas($id_kelas);
        $this->session->set_flashdata(['status' => 'success', 'message' => 'Data berhasil dihapus!']);
        redirect('rombel/index');
    }

    public function edit($id_kelas)
    {
        $data = $this->db->get_where('kelas', ['id_kelas' => $id_kelas])->row_array();
        echo json_encode($data);
    }

    public function update()
    {
        $id_kelas = $this->input->post('id_kelas');

        $data = [
            'nama_kelas'  => $this->input->post('nama_kelas'),
            'nama_walikelas'  => $this->input->post('nama_walikelas')

        ];
        // print_r($data);
        // exit();
        if ($this->Rombel_model->update(['id_kelas' => $id_kelas], $data)) {
            $this->session->set_flashdata(['status' => 'success', 'message' => 'Data berhasil diupdate']);
            redirect('rombel/index');
        }
    }
}
