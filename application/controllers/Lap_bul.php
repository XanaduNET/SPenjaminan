<?php

class Lap_bul extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Model_lap_bul');

	}

	public function index()
	{
		// $keyword    =   $this->input->post('keyword');
		// $data ['ambilid'] = $this->Model_nasabah->ambilid();
		//   $data['autogen'] = $this->Model_Kredit->noregis();
		$data['title'] = 'Laporan Bulanan';
		$data['user'] = $this->db->get_where('user', ['nama' => $this->session->userdata('nama')])->row_array();
		$data['table'] = $this->Model_lap_bul->ambil_data();
		$data['role'] = $this->db->get('user_role')->result_array();
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/topbar', $data);
		$this->load->view('operasional/lap_bul', $data);
		$this->load->view('templates/footer');

	}
}