<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Menu extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		is_logged_in();
		$this->load->model('Menu_model');
	}

	public function index()
	{
		$data['title'] = 'Menu Management';
		$data['user'] = $this->db->get_where('user', ['nama' => $this->session->userdata('nama')])->row_array();

		$data['menu'] = $this->db->get('user_menu')->result_array();

		$date = date("d-m-Y");
		$bulan = date("m");

		$this->form_validation->set_rules('menu', 'Menu', 'required');

		if ($this->form_validation->run() == false) {
			$this->load->view('template/header', $data);
			$this->load->view('template/header_body', $data);
			$this->load->view('template/right_sidebar', $data);
			$this->load->view('template/left_sidebar', $data);
			$this->load->view('menu/index', $data);
			$this->load->view('template/footer');
		} else {
			$user = $this->db->get_where('user', ['nama' => $this->session->userdata('nama')])->row_array();

			$log = "User: " . $_SERVER['REMOTE_ADDR'] . ' - ' . date("F j, Y, H:i:s") . PHP_EOL .
				"Attempt: " . ("Success Add Menu") . PHP_EOL .
				"User: " . $user['nama'] . PHP_EOL .
				"Aksi: " . ('Menu Management') . PHP_EOL .
				"-------------------------" . PHP_EOL;
			//-
			file_put_contents('logfile/' . $bulan . '/logfile' . $date . '/log_' . date("j.n.Y") . '.txt', $log, FILE_APPEND);
			$this->db->insert('user_menu', ['menu' => $this->input->post('menu')]);
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> Menu berhasil ditambahkan! </div>');
			redirect('menu');
		}
	}
	public function delete($id)
	{$user = $this->db->get_where('user', ['nama' => $this->session->userdata('nama')])->row_array();

		$log = "User: " . $_SERVER['REMOTE_ADDR'] . ' - ' . date("F j, Y, H:i:s") . PHP_EOL .
			"Attempt: " . ("Delete Menu") . PHP_EOL .
			"User: " . $user['nama'] . PHP_EOL .
			"Aksi: " . ('Menu Management') . PHP_EOL .
			"-------------------------" . PHP_EOL;
//-
		// file_put_contents('logfile/' . $bulan . '/logfile' . $date . '/log_' . date("j.n.Y") . '.txt', $log, FILE_APPEND);
		$this->Menu_model->deleteDataMenu($id);
		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Menu berhasil dihapus ! !</div>');
		redirect('menu');
	}
	public function edit($id)
	{
		$data['title'] = 'Menu Management (Edit)';
		$data['user'] = $this->db->get_where('user', ['nama' => $this->session->userdata('nama')])->row_array();

		$data['menu'] = $this->db->get('user_menu')->result_array();
		$data['menu'] = $this->Menu_model->getMenuById($id);

		$this->form_validation->set_rules('menu', 'Menu', 'required');

		if ($this->form_validation->run() == false) {
			$this->load->view('template/header', $data);
			$this->load->view('template/header_body', $data);
			$this->load->view('template/right_sidebar', $data);
			$this->load->view('template/left_sidebar', $data);
			$this->load->view('menu/edit', $data);
			$this->load->view('template/footer');
		} else {
			$user = $this->db->get_where('user', ['nama' => $this->session->userdata('nama')])->row_array();

			$log = "User: " . $_SERVER['REMOTE_ADDR'] . ' - ' . date("F j, Y, H:i:s") . PHP_EOL .
				"Attempt: " . ("Success Edit") . PHP_EOL .
				"User: " . $user['nama'] . PHP_EOL .
				"Aksi: " . ('Menu Management') . PHP_EOL .
				"-------------------------" . PHP_EOL;
			//-
			//file_put_contents('logfile/' . $bulan . '/logfile' . $date . '/log_' . date("j.n.Y") . '.txt', $log, FILE_APPEND);
			$this->Menu_model->editMenu($id);
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Menu berhasil diedit !</div>');
			redirect('menu');
		}
	}

	public function subMenu()
	{
		$data['title'] = 'Submenu Management';
		$data['user'] = $this->db->get_where('user', ['nama' => $this->session->userdata('nama')])->row_array();
		$this->load->model('Menu_model', 'menu');
		$data['submenu'] = $this->menu->getSubMenu();
		$data['menu'] = $this->db->get('user_menu')->result_array();
		$this->form_validation->set_rules('title', 'Title', 'required');
		$this->form_validation->set_rules('menu_id', 'Menu', 'required');
		$this->form_validation->set_rules('url', 'URL', 'required');
		$this->form_validation->set_rules('icon', 'Icon', 'required');

		if ($this->form_validation->run() == false) {
			$this->load->view('template/header', $data);
			$this->load->view('template/header_body', $data);
			$this->load->view('template/right_sidebar', $data);
			$this->load->view('template/left_sidebar', $data);
			$this->load->view('menu/submenu', $data);
			$this->load->view('template/footer');
		} else {
			$data = [
				'title' => $this->input->post('title'),
				'menu_id' => $this->input->post('menu_id'),
				'url' => $this->input->post('url'),
				'icon' => $this->input->post('icon'),
				'is_active' => $this->input->post('is_active'),
			];

			$user = $this->db->get_where('user', ['nama' => $this->session->userdata('nama')])->row_array();

			$log = "User: " . $_SERVER['REMOTE_ADDR'] . ' - ' . date("F j, Y, H:i:s") . PHP_EOL .
				"Attempt: " . ("Success Add SubMenu") . PHP_EOL .
				"User: " . $user['nama'] . PHP_EOL .
				"Aksi: " . ('SubMenu Management') . PHP_EOL .
				"-------------------------" . PHP_EOL;
			//-
			//file_put_contents('logfile/' . $bulan . '/logfile' . $date . '/log_' . date("j.n.Y") . '.txt', $log, FILE_APPEND);

			$this->db->insert('user-sub_menu', $data);
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Sub Menu berhasil ditambahkan! </div>');
			redirect('menu/submenu');
		}
	}
	public function deletesubMenu($id)
	{
		$user = $this->db->get_where('user', ['nama' => $this->session->userdata('nama')])->row_array();
		$log = "User: " . $_SERVER['REMOTE_ADDR'] . ' - ' . date("F j, Y, H:i:s") . PHP_EOL .
			"Attempt: " . ("Delete SubMenu") . PHP_EOL .
			"User: " . $user['nama'] . PHP_EOL .
			"Aksi: " . ('SubMenu Management') . PHP_EOL .
			"-------------------------" . PHP_EOL;
//-
		// file_put_contents('logfile/' . $bulan . '/logfile' . $date . '/log_' . date("j.n.Y") . '.txt', $log, FILE_APPEND);
		$this->Menu_model->deleteDataSubMenu($id);
		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Sub Menu has been deleted !</div>');
		redirect('menu/subMenu');
	}
	public function editsubMenu($id)
	{
		$data['title'] = 'Menu Management (Edit)';
		$data['user'] = $this->db->get_where('user', ['nama' => $this->session->userdata('nama')])->row_array();

		$data['menu'] = $this->db->get('user_menu')->result_array();
		$data['subMenu'] = $this->Menu_model->getSubMenu();
		$data['subMenu'] = $this->Menu_model->getSubMenuById($id);

		$this->form_validation->set_rules('title', 'Title', 'required');
		$this->form_validation->set_rules('url', 'URL', 'required');
		$this->form_validation->set_rules('icon', 'Icon', 'required');

		if ($this->form_validation->run() == false) {
			$this->load->view('template/header', $data);
			$this->load->view('template/header_body', $data);
			$this->load->view('template/right_sidebar', $data);
			$this->load->view('template/left_sidebar', $data);
			$this->load->view('menu/editSubmenu', $data);
			$this->load->view('template/footer');
		} else {

			$user = $this->db->get_where('user', ['nama' => $this->session->userdata('nama')])->row_array();
			$ids = $id;
			$title = $this->input->post('title');
			$menuid = $this->input->post('menu_id');
			$url = $this->input->post('url');
			$icon = $this->input->post('icon');
			$isactive = $this->input->post('is_active');

			$log = "User: " . $_SERVER['REMOTE_ADDR'] . ' - ' . date("F j, Y, H:i:s") . PHP_EOL .
				"Attempt: " . ("Success Edit SubMenu") . PHP_EOL .
				"User: " . $user['nama'] . PHP_EOL .
				"Aksi: " . ('SubMenu Management') . PHP_EOL .
				"-------------------------" . PHP_EOL;
			//-
			//file_put_contents('logfile/' . $bulan . '/logfile' . $date . '/log_' . date("j.n.Y") . '.txt', $log, FILE_APPEND);
			$this->Menu_model->editsubMenu($ids, $title, $menuid, $url, $icon, $isactive);
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Menu has been edited! !</div>');
			redirect('menu/submenu');
		}
	}
}