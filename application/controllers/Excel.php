<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Excel extends CI_Controller
{

	//constructor class C_excel
	public function __construct()
	{
		parent::__construct();
		is_logged_in();
		//load model 'model_buku'
		$this->load->model('operasional/Model_excel');
	}

	//halaman awal untuk menampilkan tabel
	public function index()
	{

		$data = array('title' => 'Laporan Accrual',
			'accrual' => $this->Model_excel->getAll());

		$this->load->view('operasional/accrual', $data);
	}

	//export ke dalam format excel
	public function export_excel()
	{

		$this->load->model('operasional/Model_accrual');

		$data = array('title' => 'Laporan Accrual',
			'accrual' => $this->Model_excel->getAll());
		$data['table'] = $this->Model_excel->getAll();
		$this->load->view('operasional/vw_laporan_excel', $data);
	}

}