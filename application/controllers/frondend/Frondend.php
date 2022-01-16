<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Frondend extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('frondend/M_frondend');
		$this->load->library('form_validation');
	}

	public function index()
	{
		//$show = $this->M_dashboard;
		// $Informasi_Penyakit="#Informasi_Penyakit";
		// $data = [
		// 	"Informasi_Penyakit" => $Informasi_Penyakit
		// ]; 
		// var_dump($data);
		// die();
		$this->load->view("frondend/index");
	}
	
    public function biodata()
	{
		//$show = $this->M_dashboard;

		// $data = [
		// 	"Informasi_Penyakit" => $Informasi_Penyakit
		// ];
		// var_dump($data);
		// die();
		$this->load->view("frondend/biodata");
	}

    public function konsultasi()
	{
		//$show = $this->M_dashboard;

		$data = [
			"data_kuisoner" => $this->M_frondend->get_data_kuisoner()
		];
		// var_dump($data);
		// die();
		$this->load->view("frondend/konsultasi", $data);
	}

    public function hasil_konsultasi()
	{
		//$show = $this->M_dashboard;

		// $data = [
		// 	"data_penyakit" => $show->hitung_data_penyakit()
		// ];
		// var_dump($data);
		// die();
		$this->load->view("frondend/hasil_konsultasi");
	}

	public function informasi_penyakit()
	{
		//$show = $this->M_dashboard;

		// $data = [
		// 	"data_penyakit" => $show->hitung_data_penyakit()
		// ];
		// var_dump($data);
		// die();
		$this->load->view("frondend/informasi_penyakit");
	}

	public function tambah_data_biodata()
	{
		$show = $this->M_frondend;

		if ($show->simpan_biodata()) {
			// $this->session->set_flashdata('success', 'Berhasil Menambah Data Faktor Penyakit');
			redirect(site_url('frondend/Frondend/konsultasi'));
		}
		// $data = [
		// 	"data_penyakit" => $show->hitung_data_penyakit()
		// ];
		// var_dump($data);
		// die();
		// $this->load->view("frondend/konsultasi");
	}
}