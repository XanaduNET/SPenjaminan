<?php

class Klaim extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Model_klaim');
		$this->load->model('Model_table');

	}

	public function index()
	{

		$data['title'] = 'Tambah Klaim';
		$data['user'] = $this->db->get_where('user', ['nama' => $this->session->userdata('nama')])->row_array();
		$data['role'] = $this->db->get('user_role')->result_array();
		$this->load->view('template/header', $data);
		$this->load->view('template/header_body', $data);
		$this->load->view('template/right_sidebar', $data);
		$this->load->view('template/left_sidebar', $data);
		$this->load->view('operasional/klaim', $data);
		$this->load->view('template/footer');

	}

	public function input()
	{
		$data['title'] = 'Tambah Klaim';
		$data['user'] = $this->db->get_where('user', ['nama' => $this->session->userdata('nama')])->row_array();

		$data['role'] = $this->db->get('user_role')->result_array();
		$idKlaim = $this->input->post('idKlaim');
		$tglmasuk = $this->input->post('tglmasuk');
		$tglberkas = $this->input->post('tglberkas');
		$tglklaimbayar = $this->input->post('tglklaimbayar');
		$PPnama = $this->input->post('PPnama');
		$PPalamat = $this->input->post('PPalamat');
		$produk = $this->input->post("produk");
		$sertifikat = $this->input->post('sertifikat');
		$nmterjamin = $this->input->post('nmterjamin');
		$plafond = $this->input->post('plafond');
		$nilai_jaminan = $this->input->post('nilai_jaminan');
		$coverage = $this->input->post('coverage');
		$nominal_klaim = $this->input->post('nominal_klaim');
		$subrogasi = $this->input->post('subrogasi');
		$agunan = $this->input->post('agunan');
		$taksasi_agunan = $this->input->post('taksasi_agunan');
		$Jkwaktu = $this->input->post('Jkwaktu');
		$tglawal = $this->input->post('tglawal');
		$tglakhir = $this->input->post('tglakhir');
		$macet = $this->input->post('macet');
		$sektor = $this->input->post('sektor');
		$cover_reas = $this->input->post('cover_reas');
		$klaim_reas = $this->input->post('klaim_reas');
		$broker = $this->input->post('broker');

		$date = date("d-m-Y");
		$bulan = date("m");
		$namauser = $this->db->get_where('user', ['nama' => $this->session->userdata('nama')])->row_array();

		$log = "User: " . $_SERVER['REMOTE_ADDR'] . ' - ' . date("F j, Y, H:i:s") . PHP_EOL .
			"Attempt: " . ("Success Add Data Klaim") . PHP_EOL .
			"User: " . $namauser['nama'] . PHP_EOL .
			"Aksi: " . ('Klaim') . PHP_EOL .
			"-------------------------" . PHP_EOL;
//-
		file_put_contents('logfile' . $date . '/log_' . date("j.n.Y") . '.txt', $log, FILE_APPEND);

		$this->Model_klaim->tambah($idKlaim, $tglmasuk, $tglberkas, $tglklaimbayar, $PPnama, $PPalamat, $produk, $sertifikat, $nmterjamin, $plafond, $nilai_jaminan, $coverage, $nominal_klaim, $subrogasi, $agunan, $taksasi_agunan, $Jkwaktu, $tglawal, $tglakhir, $macet, $sektor, $cover_reas, $klaim_reas, $broker);

		/*$insert_id = $this->db->insert_id();*/
		echo '<script type="text/javascript">';
		echo 'alert("data sukses disimpan");';
		echo "window.location.href = '" . base_url() . "klaim';";
		/*    redirect('klaim');*/
		echo '</script>';

	}

}