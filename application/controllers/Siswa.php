<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Siswa extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Siswa_model');
        $this->load->model('Rombel_model');
    }

    public function index()
    {
        // print_r($this->Siswa_model->getAllsiswa());
        // exit();
        $data['judul'] = 'Data Siswa';
        $data['contents'] = 'siswa/index';
        $data['siswa'] = $this->Siswa_model->getAllsiswa();
        $data['kelas'] = $this->Rombel_model->getAllrombel();
        $this->load->view('templates/index', $data);
    }

    public function tambah()
    {
        $data['judul'] = 'form tambah siswa';
        $data['contents'] = 'siswa/index';
        $this->load->view('templates/index', $data);
        $this->Siswa_model->tambahDataSiswa();
        // flashdata
        $this->session->set_flashdata(['status' => 'success', 'message' => 'Data berhasil ditambahkan!']);

        redirect('siswa');
    }

    public function edit($id)
    {
        // print_r($this->Siswa_model->getBy('datadirisiswa', ['id' => $id]));
        // exit();
        $data['judul'] = 'form edit siswa';
        $data['contents'] = 'siswa/edit';
        $data['datadirisiswa'] = $this->Siswa_model->getBy('datadirisiswa', ['id' => $id]);
        $data['prestasisiswa'] = $this->Siswa_model->getBy('prestasisiswa', ['id_datadirisiswa' => $id]);
        $data['regpdmasuk'] = $this->Siswa_model->getBy('regpdmasuk', ['id_datadirisiswa' => $id]);
        $data['regpdkeluar'] = $this->Siswa_model->getBy('regpdkeluar', ['id_datadirisiswa' => $id]);
        $data['orangtua'] = $this->Siswa_model->getBy('orangtua', ['id_datadirisiswa' => $id]);
        $this->load->view('templates/index', $data);
        // flashdata
        // $this->session->set_flashdata(['status' => 'success', 'message' => 'Data berhasil di Update!']);

        // redirect('edit');
    }

    public function hapus($id)
    {
        $this->Siswa_model->hapusDataSiswa($id);
        $this->session->set_flashdata(['status' => 'success', 'message' => 'Data berhasil dihapus!']);
        redirect('siswa');
    }
}
