<?php

class Data_klaim extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Model_klaim');

	}

	public function index()
	{

		$clickEvent = 0;
		$Tahunchecked = array();
		$Monthchecked = array();
		$Statuschecked = array();

		if (!empty($this->input->post('Tahunchecked')) && !empty($this->input->post('Monthchecked')) && !empty($this->input->post("Statuschecked"))) {

			foreach ($this->input->post('Tahunchecked') as $obj) {
				$Tahunchecked[] = $obj;
			}

			foreach ($this->input->post('Monthchecked') as $obj) {
				$Monthchecked[] = $obj;
			}

			foreach ($this->input->post('Statuschecked') as $obj) {
				$Statuschecked[] = $obj;
			}

			$data['table'] = $this->Model_klaim->ambil_data_query_lengkap($Tahunchecked, $Monthchecked, $Statuschecked); // pass value to model fn
		} elseif (!empty($this->input->post('Tahunchecked'))) {

			foreach ($this->input->post('Tahunchecked') as $obj) {
				$Tahunchecked[] = $obj;
			}

			if (empty($this->input->post('Monthchecked')) && empty($this->input->post("Statuschecked"))) {
				$data['table'] = $this->Model_klaim->ambil_data_query_tahun($Tahunchecked); // pass value to model fn
			} elseif (!empty($this->input->post('Monthchecked')) && empty($this->input->post("Statuschecked"))) {
				foreach ($this->input->post('Monthchecked') as $obj) {
					$Monthchecked[] = $obj;
				}
				$data['table'] = $this->Model_klaim->ambil_data_query_tahun_bulan($Tahunchecked, $Monthchecked); // pass value to model fn

			} elseif (empty($this->input->post('Monthchecked')) && !empty($this->input->post("Statuschecked"))) {
				foreach ($this->input->post('Statuschecked') as $obj) {
					$Statuschecked[] = $obj;
				}
				$data['table'] = $this->Model_klaim->ambil_data_query_tahun_status($Tahunchecked, $Statuschecked); // pass value to model fn
			}
		} elseif (!empty($this->input->post('Monthchecked'))) {
			foreach ($this->input->post('Monthchecked') as $obj) {
				$Monthchecked[] = $obj;
			}
			if (empty($this->input->post('Tahunchecked')) && empty($this->input->post('Statuschecked'))) {
				$data['table'] = $this->Model_klaim->ambil_data_query_bulan($Monthchecked); // pass value to model fn
			} elseif (!empty($this->input->post('Tahunchecked')) && empty($this->input->post('Statuschecked'))) {
				foreach ($this->input->post('Tahunchecked') as $obj) {
					$Tahunchecked[] = $obj;
				}
				$data['table'] = $this->Model_klaim->ambil_data_query_tahun_bulan($Tahunchecked, $Monthchecked); // pass value to model fn
			} elseif (empty($this->input->post('Tahunchecked')) && !empty($this->input->post('Statuschecked'))) {
				foreach ($this->input->post('Statuschecked') as $obj) {
					$Statuschecked[] = $obj;
				}
				$data['table'] = $this->Model_klaim->ambil_data_query_bulan_status($Monthchecked, $Statuschecked); // pass value to model fn
			}
		} elseif (!empty($this->input->post('Statuschecked'))) {
			foreach ($this->input->post('Statuschecked') as $obj) {
				$Statuschecked[] = $obj;
			}

			if (empty($this->input->post('Tahunchecked')) && empty($this->input->post('Monthchecked'))) {
				$data['table'] = $this->Model_klaim->ambil_data_query_status($Statuschecked);
			} elseif (!empty($this->input->post('Tahunchecked')) && empty($this->input->post('Monthchecked'))) {
				foreach ($this->input->post('Tahunchecked') as $obj) {
					$Tahunchecked[] = $obj;
				}
				$data['table'] = $this->Model_klaim->ambil_data_query_tahun_status($Tahunchecked, $Statuschecked); // pass value to model fn
			} elseif (empty($this->input->post('Tahunchecked')) && !empty($this->input->post('Monthchecked'))) {
				foreach ($this->input->post('Monthchecked') as $obj) {
					$Monthchecked[] = $obj;
				}
				$data['table'] = $this->Model_klaim->ambil_data_query_bulan_status($Monthchecked, $Statuschecked);
			}
		} else {

			$keyword = $this->input->post('keyword');
			$data['flag'] = $keyword;
			$data['table'] = $this->Model_klaim->ambil_data($keyword);
		}

		$keyword = $this->input->post('keyword');

		$data['title'] = 'Data Klaim';
		$data['user'] = $this->db->get_where('user', ['nama' => $this->session->userdata('nama')])->row_array();
		$data['flag'] = $keyword;
		//$data['table'] = $this->Model_klaim->ambil_data($keyword);
		$data['role'] = $this->db->get('user_role')->result_array();
		$this->load->view('template/header', $data);
		$this->load->view('template/header_body', $data);
		$this->load->view('template/right_sidebar', $data);
		$this->load->view('template/left_sidebar', $data);
		$this->load->view('operasional/data_klaim', $data);
		$this->load->view('template/footer');
	}

	public function cetak()
	{
		$this->load->model('Model_klaim');
		$id = $this->uri->segment(3);
		$data = array('title' => 'Laporan Klaim',
			'Klaim' => $this->Model_klaim->cetakexcel($id));
		if (!empty($this->uri->segment(3))) {
			$data['table'] = $this->Model_klaim->cetakexcel($id);
		} else {
			$data['table'] = $this->Model_klaim->cetakexcelsemua();
		}
		$data['user'] = $this->db->get_where('user', ['nama' => $this->session->userdata('nama')])->row_array();

		$date = date("d-m-Y");
		$namauser = $this->db->get_where('user', ['nama' => $this->session->userdata('nama')])->row_array();

		$log = "User: " . $_SERVER['REMOTE_ADDR'] . ' - ' . date("F j, Y, H:i:s") . PHP_EOL .
			"Attempt: " . ("Success Export Data Klaim") . PHP_EOL .
			"User: " . $namauser['nama'] . PHP_EOL .
			"Aksi: " . ('Operasional Klaim') . PHP_EOL .
			"-------------------------" . PHP_EOL;
//-
		file_put_contents('logfile' . $date . '/log_' . date("j.n.Y") . '.txt', $log, FILE_APPEND);

		$this->load->view('operasional/vw_klaim_excel', $data);

		$this->load->view('operasional/vw_klaim_excel', $data);

	}

	public function cetakfilter($dataTable)
	{
		$dataTable = $dataTable;
		$this->load->model('Model_klaim');
		$id = $this->uri->segment(3);
		$data = array('title' => 'Laporan Klaim',
			'Klaim' => $dataTable);
		$data['table'] = $dataTable;
		$namauser = $this->db->get_where('user', ['nama' => $this->session->userdata('nama')])->row_array();
		$data['user'] = $this->db->get_where('user', ['nama' => $this->session->userdata('nama')])->row_array();

		$date = date("d-m-Y");
		$bulan = date("m");
		$log = "User: " . $_SERVER['REMOTE_ADDR'] . ' - ' . date("F j, Y, H:i:s") . PHP_EOL .
			"Attempt: " . ("Success Export Data Klaim") . PHP_EOL .
			"User: " . $nama['nama'] . PHP_EOL .
			"Aksi: " . ('Operasional Klaim') . PHP_EOL .
			"-------------------------" . PHP_EOL;
		//-
		file_put_contents('logfile' . $date . '/log_' . date("j.n.Y") . '.txt', $log, FILE_APPEND);

		$this->load->view('operasional/vw_klaim_excel', $data);

	}

	public function triggeredExport()
	{
		if ($this->input->post('click') == 1) {
			$clickEvent = 1;
		} else {
			$clickEvent = 0;
		}

		if ($clickEvent == 1) {
			$clickEvent = 0;
			$data = $this->input->post('table');

			$dataTable = json_decode(htmlspecialchars_decode($data, true));

			$this->cetakfilter($dataTable);
		} else {

		}
	}

}