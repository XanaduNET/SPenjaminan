<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Lap_bul_excel extends CI_Controller
{

	//constructor class C_excel
	public function __construct()
	{
		parent::__construct();
		//load helper url
		$this->load->helper('url');
		//load model 'model_buku'
		$this->load->model('Model_excel_lap_bul');
	}

	//halaman awal untuk menampilkan tabel
	public function index()
	{

		$data = array('title' => 'Laporan Bulanan',
			'accrual' => $this->Model_excel_lap_bul->getAll());

		$this->load->view('operasional/lap_bul', $data);
	}

	//export ke dalam format excel
	public function export_excel()
	{

		$this->load->model('Model_lap_bul');

		$data = array('title' => 'Laporan Bulanan',
			'accrual' => $this->Model_excel_lap_bul->getAll());
		$data['table'] = $this->Model_excel_lap_bul->getAll();
		$this->load->view('operasional/vw_lap_bul_excel', $data);
	}

}