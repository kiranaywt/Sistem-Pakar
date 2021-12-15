<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengguna extends CI_Controller {

	public function tampil_pengguna()
	{
		$this->load->view('backend/Pengguna_view');
	}

	public function detail_pengguna()
	{
		$this->load->view('backend/detail_pengguna');
	}
}