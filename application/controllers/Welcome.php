<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{

	public function index()
	{
		$data['judul'] = 'smkgrisa';
		$data['contents'] = 'admin/dashboard';
		$this->load->view('templates/index', $data);
	}
}
