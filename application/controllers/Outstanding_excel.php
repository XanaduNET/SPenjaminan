<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Outstanding_excel extends CI_Controller
{

	//constructor class C_excel
	public function __construct()
	{
		parent::__construct();
		//load helper url
		$this->load->helper('url');
		//load model 'model_buku'
		$this->load->model('Model_excel_outstanding');
	}

	//halaman awal untuk menampilkan tabel
	public function index()
	{

		$data = array('title' => 'Laporan Outstanding',
			'accrual' => $this->Model_excel_outstanding->getAll());

		$this->load->view('operasional/lap_bul', $data);
	}

	//export ke dalam format excel
	public function export_excel()
	{

		$this->load->model('Model_outstanding');

		$data = array('title' => 'Laporan Bulanan',
			'accrual' => $this->Model_excel_outstanding->getAll());
		$data['table'] = $this->Model_excel_outstanding->getAll();
		$this->load->view('operasional/vw_outstanding_excel', $data);
	}

}