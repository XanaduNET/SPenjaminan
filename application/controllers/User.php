<?php

defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		is_logged_in();

	}
	public function index()
	{
		$data['title'] = 'Profile Saya';
		$data['user'] = $this->db->get_where('user', ['nama' => $this->session->userdata('nama')])->row_array();
		$this->load->view('template/header', $data);
		$this->load->view('template/header_body', $data);
		$this->load->view('template/right_sidebar', $data);
		$this->load->view('template/left_sidebar', $data);
		$this->load->view('user/index', $data);
		$this->load->view('template/footer');
	}
}