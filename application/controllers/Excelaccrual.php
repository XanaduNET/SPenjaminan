<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Excelaccrual extends CI_Controller
{

	//constructor class C_excel
	public function __construct()
	{
		parent::__construct();
		//load helper url
		$this->load->helper('url');
		//load model 'model_buku'
		$this->load->model('Model_excel_accrual');
	}

	//halaman awal untuk menampilkan tabel
	public function index()
	{

		$data = array('title' => 'Laporan Accrual',
			'accrual' => $this->Model_excel_accrual->getAll());

		$this->load->view('operasional/accrual', $data);
	}

	//export ke dalam format excel
	public function export_excel()
	{

		$this->load->model('Model_accrual');

		$data = array('title' => 'Laporan Accrual',
			'accrual' => $this->Model_excel_accrual->getAll());
		$data['table'] = $this->Model_excel_accrual->getAll();
		$this->load->view('operasional/vw_accrual_excel', $data);
	}

}