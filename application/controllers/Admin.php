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
		$data['title'] = 'Dashboard';
		$data['user'] = $this->db->get_where('user', ['nama' => $this->session->userdata('nama')])->row_array();
		$this->load->view('template/header', $data);
		$this->load->view('template/header_body', $data);
		$this->load->view('template/right_sidebar', $data);
		$this->load->view('template/left_sidebar', $data);
		$this->load->view('admin/index', $data);
		$this->load->view('template/footer');
	}
	public function role()
	{
		$data['title'] = 'Role';
		$data['user'] = $this->db->get_where('user', ['nama' => $this->session->userdata('nama')])->row_array();

		$data['role'] = $this->db->get('user_role')->result_array();
		$this->form_validation->set_rules('role', 'Role', 'required');

		if ($this->form_validation->run() == false) {
			$this->load->view('template/header', $data);
			$this->load->view('template/header_body', $data);
			$this->load->view('template/right_sidebar', $data);
			$this->load->view('template/left_sidebar', $data);
			$this->load->view('admin/role', $data);
			$this->load->view('template/footer');
		} else {
			$this->db->insert('user_role', ['role' => $this->input->post('role')]);
			$date = date("d-m-Y");
			$bulan = date("m");
			$namauser = $this->db->get_where('user', ['nama' => $this->session->userdata('nama')])->row_array();

			$log = "User: " . $_SERVER['REMOTE_ADDR'] . ' - ' . date("F j, Y, H:i:s") . PHP_EOL .
				"Attempt: " . ("Success Add Role") . PHP_EOL .
				"User: " . $namauser['nama'] . PHP_EOL .
				"Aksi: " . ('Role') . PHP_EOL .
				"-------------------------" . PHP_EOL;
			//-
			file_put_contents('logfile/' . $bulan . '/logfile' . $date . '/log_' . date("j.n.Y") . '.txt', $log, FILE_APPEND);

			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> Role berhasil ditambahkan! </div>');
			redirect('admin/role');
		}
	}
	public function roleaccess($role_id)
	{
		$data['title'] = 'Role Akses';
		$data['user'] = $this->db->get_where('user', ['nama' => $this->session->userdata('nama')])->row_array();

		$data['role'] = $this->db->get_where('user_role', ['id' => $role_id])->row_array();

		$this->db->where('id !=', 1);
		$data['menu'] = $this->db->get('user_menu')->result_array();
		$this->load->view('template/header', $data);
		$this->load->view('template/header_body', $data);
		$this->load->view('template/right_sidebar', $data);
		$this->load->view('template/left_sidebar', $data);
		$this->load->view('admin/role-access', $data);
		$this->load->view('template/footer');
	}
	public function changeAccess()
	{
		$menu_id = $this->input->post('menuId');
		$role_id = $this->input->post('roleId');

		$date = date("d-m-Y");
		$namauser = $this->db->get_where('user', ['nama' => $this->session->userdata('nama')])->row_array();

		$data = [
			'role_id' => $role_id,
			'menu_id' => $menu_id,
		];

		$result = $this->db->get_where('user_access_menu', $data);

		if ($result->num_rows() < 1) {

			$log = "User: " . $_SERVER['REMOTE_ADDR'] . ' - ' . date("F j, Y, H:i:s") . PHP_EOL .
				"Attempt: " . ("Success Change Access Role") . PHP_EOL .
				"User: " . $namauser['nama'] . PHP_EOL .
				"Aksi: " . ('Change Access Role') . PHP_EOL .
				"-------------------------" . PHP_EOL;
			//-
			// file_put_contents('logfile/' . $bulan . '/logfile' . $date . '/log_' . date("j.n.Y") . '.txt', $log, FILE_APPEND);

			$this->db->insert('user_access_menu', $data);
		} else {

			$log = "User: " . $_SERVER['REMOTE_ADDR'] . ' - ' . date("F j, Y, H:i:s") . PHP_EOL .
				"Attempt: " . ("Delete Access Role") . PHP_EOL .
				"User: " . $namauser['nama'] . PHP_EOL .
				"Aksi: " . ('Delete Access Role') . PHP_EOL .
				"-------------------------" . PHP_EOL;

			$this->db->delete('user_access_menu', $data);
		}
		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> Akses berubah !</div>');
	}
	public function pengguna()
	{
		$data['title'] = 'Pengguna';
		$data['user'] = $this->db->get_where('user', ['nama' => $this->session->userdata('nama')])->row_array();

		$this->load->model('Menu_model', 'menu');
		$data['pengguna'] = $this->menu->getRole();
		$this->load->view('template/header', $data);
		$this->load->view('template/header_body', $data);
		$this->load->view('template/right_sidebar', $data);
		$this->load->view('template/left_sidebar', $data);
		$this->load->view('admin/pengguna', $data);
		$this->load->view('template/footer');
	}
}