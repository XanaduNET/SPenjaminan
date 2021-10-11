<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		is_logged_in();
	}
	public function index()
	{
		$data['title'] = 'Data Penjaminan';
		$data['user'] = $this->db->get_where('user', ['nama' => $this->session->userdata('nama')])->row_array();
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/topbar', $data);
		$this->load->view('penjaminan/index', $data);
		$this->load->view('templates/footer');
	}
}