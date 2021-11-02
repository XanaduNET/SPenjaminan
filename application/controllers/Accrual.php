<?php

defined('BASEPATH') or exit('No direct script access allowed');
require './application/third_party/phpoffice/vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

class Accrual extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Model_accrual');
		$this->load->model('Model_table_accrual');

	}

	public function index()
	{

		$clickEvent = 0;
		$OPKchecked = array();
		$GPPchecked = array();
		$Monthchecked = array();

		if (!empty($this->input->post('Month')) && ($this->input->post('Month') == "00")) {

			if (!empty($this->input->post('GPPchecked')) && !empty($this->input->post('OPKchecked'))) {

				foreach ($this->input->post('GPPchecked') as $obj) {
					$GPPchecked[] = $obj;
				}

				foreach ($this->input->post('OPKchecked') as $obj) {
					$OPKchecked[] = $obj;
				}

				$keyword = $this->input->post('keyword');
				$data['ambilid'] = $this->Model_accrual->ambilid();

				$data['table'] = $this->Model_table_accrual->ambil_data_query_lengkap($keyword, $GPPchecked, $OPKchecked); // pass value to model fn

			} else if (empty($this->input->post('GPPchecked')) && !empty($this->input->post('OPKchecked'))) {

				foreach ($this->input->post('OPKchecked') as $obj) {
					$OPKchecked[] = $obj;
				}

				$keyword = $this->input->post('keyword');
				$data['ambilid'] = $this->Model_accrual->ambilid();

				$data['table'] = $this->Model_table_accrual->ambil_data_query_opk($keyword, $OPKchecked); // pass value to model fn

			} else if (!empty($this->input->post('semuaGPP')) && !empty($this->input->post('OPKchecked'))) {

				foreach ($this->input->post('OPKchecked') as $obj) {
					$OPKchecked[] = $obj;
				}

				$keyword = $this->input->post('keyword');
				$data['ambilid'] = $this->Model_accrual->ambilid();

				$data['table'] = $this->Model_table_accrual->ambil_data_query_opk($keyword, $OPKchecked); // pass value to model fn

			} else if (!empty($this->input->post('semuaGPP')) && !empty($this->input->post('semuaOPK'))) {

				$keyword = $this->input->post('keyword');
				$data['ambilid'] = $this->Model_accrual->ambilid();
				$data['table'] = $this->Model_table_accrual->ambil_data($keyword);

			} else if (!empty($this->input->post('GPPchecked')) && !empty($this->input->post('semuaOPK'))) {

				foreach ($this->input->post('GPPchecked') as $obj) {
					$GPPchecked[] = $obj;
				}

				$keyword = $this->input->post('keyword');
				$data['ambilid'] = $this->Model_accrual->ambilid();

				$data['table'] = $this->Model_table_accrual->ambil_data_query($keyword, $GPPchecked); // pass value to model fn

			} else {

				$keyword = $this->input->post('keyword');
				$data['ambilid'] = $this->Model_accrual->ambilid();
				$data['table'] = $this->Model_table_accrual->ambil_data($keyword);

			}
		} else if (!empty($this->input->post('Month')) && ($this->input->post('Month') != "00")) {

			$Monthchecked[] = $this->input->post('Month');

			for ($i = 01; $i <= $Monthchecked[0]; $i++) {
				$totalBulan[] = $i;
			}

			// MULAI
			if (!empty($this->input->post('GPPchecked')) && !empty($this->input->post('OPKchecked'))) {

				foreach ($this->input->post('GPPchecked') as $obj) {
					$GPPchecked[] = $obj;
				}

				foreach ($this->input->post('OPKchecked') as $obj) {
					$OPKchecked[] = $obj;
				}

				$keyword = $this->input->post('keyword');
				$data['ambilid'] = $this->Model_accrual->ambilid();

				$data['table'] = $this->Model_table_accrual->ambil_data_query_lengkap_bulan($keyword, $GPPchecked, $OPKchecked, $totalBulan); // pass value to model fn

			} else if (empty($this->input->post('GPPchecked')) && !empty($this->input->post('OPKchecked'))) {

				foreach ($this->input->post('OPKchecked') as $obj) {
					$OPKchecked[] = $obj;
				}

				$keyword = $this->input->post('keyword');
				$data['ambilid'] = $this->Model_accrual->ambilid();

				$data['table'] = $this->Model_table_accrual->ambil_data_query_opk_bulan($keyword, $OPKchecked, $totalBulan); // pass value to model fn

			} else if (!empty($this->input->post('semuaGPP')) && !empty($this->input->post('OPKchecked'))) {

				foreach ($this->input->post('OPKchecked') as $obj) {
					$OPKchecked[] = $obj;
				}

				$keyword = $this->input->post('keyword');
				$data['ambilid'] = $this->Model_accrual->ambilid();

				$data['table'] = $this->Model_table_accrual->ambil_data_query_opk_bulan($keyword, $OPKchecked, $totalBulan); // pass value to model fn

			} else if (!empty($this->input->post('semuaGPP')) && !empty($this->input->post('semuaOPK'))) {

				$keyword = $this->input->post('keyword');
				$data['ambilid'] = $this->Model_accrual->ambilid();

				$data['table'] = $this->Model_table_accrual->ambil_data_bulan($keyword, $totalBulan);

			} else if (!empty($this->input->post('GPPchecked')) && !empty($this->input->post('semuaOPK'))) {

				foreach ($this->input->post('GPPchecked') as $obj) {
					$GPPchecked[] = $obj;
				}

				$keyword = $this->input->post('keyword');
				$data['ambilid'] = $this->Model_accrual->ambilid();

				$data['table'] = $this->Model_table_accrual->ambil_data_query_bulan($keyword, $GPPchecked, $totalBulan); // pass value to model fn

			} else {
				$keyword = $this->input->post('keyword');
				$data['ambilid'] = $this->Model_accrual->ambilid();

				$data['table'] = $this->Model_table_accrual->ambil_data_bulan($keyword, $totalBulan);

			}

			// END
		} else {

			$keyword = $this->input->post('keyword');
			$data['ambilid'] = $this->Model_accrual->ambilid();

			$data['table'] = $this->Model_table_accrual->ambil_data($keyword);

		}

		$data['bulan'] = $Monthchecked;

		$data['title'] = 'Accrual';
		$data['user'] = $this->db->get_where('user', ['nama' => $this->session->userdata('nama')])->row_array();
		$data['gpp'] = $this->Model_table_accrual->getGPP();
		$data['opk'] = $this->Model_table_accrual->getOPK();

		$data['menu'] = $this->db->get('user_menu')->result_array();

		$date = date("d-m-Y");
		$bulan = date("m");
		$namauser = $this->db->get_where('user', ['nama' => $this->session->userdata('nama')])->row_array();

		$log = "User: " . $_SERVER['REMOTE_ADDR'] . ' - ' . date("F j,Y, H:i:s") . PHP_EOL .
			"Attempt: " . ("Success Masuk Halaman") . PHP_EOL .
			"User: " . $namauser['nama'] . PHP_EOL .
			"Aksi: " . ('Accrual Penjaminan') . PHP_EOL .
			"-------------------------" . PHP_EOL;
		//-
		file_put_contents('logfile/' . $bulan . '/logfile' . $date . '/log_' . date("j.n.Y") . '.txt', $log, FILE_APPEND);

		$this->load->view('template/header', $data);
		$this->load->view('template/header_body', $data);
		$this->load->view('template/right_sidebar', $data);
		$this->load->view('template/left_sidebar', $data);
		$this->load->view('operasional/accrual', $data);
		$this->load->view('template/footer');
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
			$data2 = $this->input->post('bulan');
			$dataTable = json_decode(htmlspecialchars_decode($data, true));
			$dataBulan = json_decode(htmlspecialchars_decode($data2, true));

			$date = date("d-m-Y");
			$bulan = date("m");
			$namauser = $this->db->get_where('user', ['nama' => $this->session->userdata('nama')])->row_array();

			$log = "User: " . $_SERVER['REMOTE_ADDR'] . ' - ' . date("F j, Y, H:i:s") . PHP_EOL .
				"Attempt: " . ("Success Export Accrual") . PHP_EOL .
				"User: " . $namauser['nama'] . PHP_EOL .
				"Aksi: " . ('Operasional Accrual') . PHP_EOL .
				"-------------------------" . PHP_EOL;
			//-
			file_put_contents('logfile/' . $bulan . '/logfile' . $date . '/log_' . date("j.n.Y") . '.txt', $log, FILE_APPEND);

			$this->export($dataTable, $dataBulan);
		} else {

		}
	}

	public function export($dataTable, $dataBulan)
	{

		$table_result = $dataTable;

		$bulanini[1] = "BULAN INI";
		$bulandepan[1] = "BULAN DEPAN";
		$bulanjumlah = 00;
		$bulan = $dataBulan;

		foreach ($bulan as $u) {
			if ($u == 01) {
				$bulanini[1] = "JANUARI 2021";
				$bulandepan[1] = "FEB-JAN 2022";
				$bulanjumlah = $u;
				$awal = 0;

				$kalibulan[1] = (20 / 100);
				$flagkali = 1;
				$flagkaliawal = 1;
				$flagbulan[1] = 0;

			} else if ($u == 02) {
				$bulanini[1] = "JAN-FEB 2021";
				$bulandepan[1] = "MAR-FEB 2022";

				$bulanini[2] = "FEBRUARI 2021";
				$bulandepan[2] = "MAR-FEB 2022";

				$kalibulan[1] = (20 / 100);
				$kalibulan[2] = (20 / 100);

				$flagbulan[2] = 0;
				$flagbulan[1] = 1;
				$bulanjumlah = $u;
				$awal = 0;
				$flagkali = 2;
				$flagkaliawal = 1;

			} else if ($u == 03) {
				$bulanini[1] = "JAN-MAR 2021";
				$bulandepan[1] = "APR-MAR 2022";
				$bulanini[2] = "FEB-MAR 2021";
				$bulandepan[2] = "APR-MAR 2022";
				$bulanini[3] = "MARET 2021";
				$bulandepan[3] = "APR-MAR 2022";

				$kalibulan[1] = (20 / 100);
				$kalibulan[2] = (20 / 100);
				$kalibulan[3] = (20 / 100);

				$flagbulan[3] = 0;
				$flagbulan[2] = 1;
				$flagbulan[1] = 2;
				$bulanjumlah = $u;
				$awal = 0;
				$flagkali = 3;

				$flagkaliawal = 1;
			} else if ($u == 04) {
				$bulanini[1] = "JAN-APR 2021";
				$bulandepan[1] = "MEI-APR 2022";
				$bulanini[2] = "FEB-APR 2021";
				$bulandepan[2] = "MEI-APR 2022";
				$bulanini[3] = "MAR-APR 2021";
				$bulandepan[3] = "MEI-APR 2022";
				$bulanini[4] = "APRIL 2021";
				$bulandepan[4] = "MEI-APR 2022";

				$kalibulan[1] = (20 / 100);
				$kalibulan[2] = (20 / 100);
				$kalibulan[3] = (20 / 100);
				$kalibulan[4] = (20 / 100);

				$flagbulan[4] = 0;
				$flagbulan[3] = 1;
				$flagbulan[2] = 2;
				$flagbulan[1] = 3;
				$bulanjumlah = $u;
				$awal = 0;
				$flagkali = 4;

				$flagkaliawal = 1;
			} else if ($u == 05) {
				$bulanini[1] = "JAN-MEI 2021";
				$bulandepan[1] = "JUN-MEI 2022";
				$bulanini[2] = "FEB-MEI 2021";
				$bulandepan[2] = "JUN-MEI 2022";
				$bulanini[3] = "MAR-MEI 2021";
				$bulandepan[3] = "JUN-MEI 2022";
				$bulanini[4] = "APR-MEI 2021";
				$bulandepan[4] = "JUN-MEI 2022";
				$bulanini[5] = "MEI 2021";
				$bulandepan[5] = "JUN-MEI 2022";

				$kalibulan[1] = (20 / 100);
				$kalibulan[2] = (20 / 100);
				$kalibulan[3] = (20 / 100);
				$kalibulan[4] = (20 / 100);
				$kalibulan[5] = (20 / 100);

				$flagbulan[5] = 0;
				$flagbulan[4] = 1;
				$flagbulan[3] = 2;
				$flagbulan[2] = 3;
				$flagbulan[1] = 4;
				$bulanjumlah = $u;
				$awal = 0;
				$flagkali = 5;

				$flagkaliawal = 1;
			} else if ($u == 06) {
				$bulanini[1] = "JAN-JUN 2021";
				$bulandepan[1] = "JUL-JUN 2022";
				$bulanini[2] = "FEB-JUN 2021";
				$bulandepan[2] = "JUL-JUN 2022";
				$bulanini[3] = "MAR-JUN 2021";
				$bulandepan[3] = "JUL-JUN 2022";
				$bulanini[4] = "APR-JUN 2021";
				$bulandepan[4] = "JUL-JUN 2022";
				$bulanini[5] = "MEI-JUN 2021";
				$bulandepan[5] = "JUL-JUN 2022";
				$bulanini[6] = "JUNI 2021";
				$bulandepan[6] = "JUL-JUN 2022";

				$kalibulan[1] = (20 / 100);
				$kalibulan[2] = (20 / 100);
				$kalibulan[3] = (20 / 100);
				$kalibulan[4] = (20 / 100);
				$kalibulan[5] = (20 / 100);
				$kalibulan[6] = (20 / 100);

				$flagbulan[6] = 0;
				$flagbulan[5] = 1;
				$flagbulan[4] = 2;
				$flagbulan[3] = 3;
				$flagbulan[2] = 4;
				$flagbulan[1] = 5;
				$bulanjumlah = $u;
				$awal = 0;
				$flagkali = 6;

				$flagkaliawal = 1;
			} else if ($u == 07) {
				$bulanini[1] = "JAN-JUL 2021";
				$bulandepan[1] = "AGU-JUL 2022";
				$bulanini[2] = "FEB-JUL 2021";
				$bulandepan[2] = "AGU-JUL 2022";
				$bulanini[3] = "MAR-JUL 2021";
				$bulandepan[3] = "AGU-JUL 2022";
				$bulanini[4] = "APR-JUL 2021";
				$bulandepan[4] = "AGU-JUL 2022";
				$bulanini[5] = "MEI-JUL 2021";
				$bulandepan[5] = "AGU-JUL 2022";
				$bulanini[6] = "JUNI-JUL 2021";
				$bulandepan[6] = "AGU-JUL 2022";
				$bulanini[7] = "JULI 2021";
				$bulandepan[7] = "AGU-JUL 2022";

				$kalibulan[1] = (20 / 100);
				$kalibulan[2] = (20 / 100);
				$kalibulan[3] = (20 / 100);
				$kalibulan[4] = (20 / 100);
				$kalibulan[5] = (20 / 100);
				$kalibulan[6] = (20 / 100);
				$kalibulan[7] = (20 / 100);

				$flagbulan[7] = 0;
				$flagbulan[6] = 1;
				$flagbulan[5] = 2;
				$flagbulan[4] = 3;
				$flagbulan[3] = 4;
				$flagbulan[2] = 5;
				$flagbulan[1] = 6;

				$bulanjumlah = $u;
				$awal = 0;
				$flagkali = 7;

				$flagkaliawal = 1;
			} else if ($u == '08') {
				$bulanini[1] = "JAN-AGU 2021";
				$bulandepan[1] = "SEP-AGU 2022";
				$bulanini[2] = "FEB-AGU 2021";
				$bulandepan[2] = "SEP-AGU 2022";
				$bulanini[3] = "MAR-AGU 2021";
				$bulandepan[3] = "SEP-AGU 2022";
				$bulanini[4] = "APR-AGU 2021";
				$bulandepan[4] = "SEP-AGU 2022";
				$bulanini[5] = "MEI-AGU 2021";
				$bulandepan[5] = "SEP-AGU 2022";
				$bulanini[6] = "JUN-AGU 2021";
				$bulandepan[6] = "SEP-AGU 2022";
				$bulanini[7] = "JUL-AGU 2021";
				$bulandepan[7] = "SEP-AGU 2022";
				$bulanini[8] = "AGUSTUS 2021";
				$bulandepan[8] = "SEP-AGU 2022";

				$kalibulan[1] = (20 / 100);
				$kalibulan[2] = (20 / 100);
				$kalibulan[3] = (20 / 100);
				$kalibulan[4] = (20 / 100);
				$kalibulan[5] = (20 / 100);
				$kalibulan[6] = (20 / 100);
				$kalibulan[7] = (20 / 100);
				$kalibulan[8] = (20 / 100);

				$flagbulan[8] = 0;
				$flagbulan[7] = 1;
				$flagbulan[6] = 2;
				$flagbulan[5] = 3;
				$flagbulan[4] = 4;
				$flagbulan[3] = 5;
				$flagbulan[2] = 6;
				$flagbulan[1] = 7;
				$bulanjumlah = $u;
				$awal = 0;
				$flagkali = 8;

				$flagkaliawal = 1;

			} else if ($u == '09') {
				$bulanini[1] = "JAN-SEP 2021";
				$bulandepan[1] = "OKT-SEP 2022";
				$bulanini[2] = "FEB-SEP 2021";
				$bulandepan[2] = "OKT-SEP 2022";
				$bulanini[3] = "MAR-SEP 2021";
				$bulandepan[3] = "OKT-SEP 2022";
				$bulanini[4] = "APR-SEP 2021";
				$bulandepan[4] = "OKT-SEP 2022";
				$bulanini[5] = "MEI-SEP 2021";
				$bulandepan[5] = "OKT-SEP 2022";
				$bulanini[6] = "JUN-SEP 2021";
				$bulandepan[6] = "OKT-SEP 2022";
				$bulanini[7] = "JUL-SEP 2021";
				$bulandepan[7] = "OKT-SEP 2022";
				$bulanini[8] = "AGUS-SEP 2021";
				$bulandepan[8] = "OKT-SEP 2022";
				$bulanini[9] = "SEPTEMBER 2021";
				$bulandepan[9] = "OKT-SEP 2022";

				$kalibulan[1] = (20 / 100);
				$kalibulan[2] = (20 / 100);
				$kalibulan[3] = (20 / 100);
				$kalibulan[4] = (20 / 100);
				$kalibulan[5] = (20 / 100);
				$kalibulan[6] = (20 / 100);
				$kalibulan[7] = (20 / 100);
				$kalibulan[8] = (20 / 100);
				$kalibulan[9] = (20 / 100);

				$flagbulan[9] = 0;
				$flagbulan[8] = 1;
				$flagbulan[7] = 2;
				$flagbulan[6] = 3;
				$flagbulan[5] = 4;
				$flagbulan[4] = 5;
				$flagbulan[3] = 6;
				$flagbulan[2] = 7;
				$flagbulan[1] = 8;
				$bulanjumlah = $u;
				$awal = 0;
				$flagkali = 9;
				$flagkaliawal = 1;
			} else if ($u == 10) {
				$bulanini[1] = "JAN-OKT 2021";
				$bulandepan[1] = "NOV-OKT 2022";
				$bulanini[2] = "FEB-OKT 2021";
				$bulandepan[2] = "NOV-OKT 2022";
				$bulanini[3] = "MAR-OKT 2021";
				$bulandepan[3] = "NOV-OKT 2022";
				$bulanini[4] = "APR-OKT 2021";
				$bulandepan[4] = "NOV-OKT 2022";
				$bulanini[5] = "MEI-OKT 2021";
				$bulandepan[5] = "NOV-OKT 2022";
				$bulanini[6] = "JUN-OKT 2021";
				$bulandepan[6] = "NOV-OKT 2022";
				$bulanini[7] = "JUL-OKT 2021";
				$bulandepan[7] = "NOV-OKT 2022";
				$bulanini[8] = "AGU-OKT 2021";
				$bulandepan[8] = "NOV-OKT 2022";
				$bulanini[9] = "SEP-OKT 2021";
				$bulandepan[9] = "NOV-OKT 2022";
				$bulanini[10] = "OKTOBER 2021";
				$bulandepan[10] = "NOV-OKT 2022";

				$kalibulan[1] = (20 / 100);
				$kalibulan[2] = (20 / 100);
				$kalibulan[3] = (20 / 100);
				$kalibulan[4] = (20 / 100);
				$kalibulan[5] = (20 / 100);
				$kalibulan[6] = (20 / 100);
				$kalibulan[7] = (20 / 100);
				$kalibulan[8] = (20 / 100);
				$kalibulan[9] = (20 / 100);
				$kalibulan[10] = (20 / 100);

				$flagbulan[10] = 0;
				$flagbulan[9] = 1;
				$flagbulan[8] = 2;
				$flagbulan[7] = 3;
				$flagbulan[6] = 4;
				$flagbulan[5] = 5;
				$flagbulan[4] = 6;
				$flagbulan[3] = 7;
				$flagbulan[2] = 8;
				$flagbulan[1] = 9;
				$bulanjumlah = $u;
				$awal = 0;
				$flagkali = 10;
				$flagkaliawal = 1;

			} else if ($u == 11) {
				$bulanini[1] = "JAN-NOV 2021";
				$bulandepan[1] = "DES-NOV 2022";
				$bulanini[2] = "FEB-NOV 2021";
				$bulandepan[2] = "DES-NOV 2022";
				$bulanini[3] = "MAR-NOV 2021";
				$bulandepan[3] = "DES-NOV 2022";
				$bulanini[4] = "APR-NOV 2021";
				$bulandepan[4] = "DES-NOV 2022";
				$bulanini[5] = "MEI-NOV 2021";
				$bulandepan[5] = "DES-NOV 2022";
				$bulanini[6] = "JUN-NOV 2021";
				$bulandepan[6] = "DES-NOV 2022";
				$bulanini[7] = "JUL-NOV 2021";
				$bulandepan[7] = "DES-NOV 2022";
				$bulanini[8] = "AGU-NOV 2021";
				$bulandepan[8] = "DES-NOV 2022";
				$bulanini[9] = "SEP-NOV 2021";
				$bulandepan[9] = "DES-NOV 2022";
				$bulanini[10] = "OKT-NOV 2021";
				$bulandepan[10] = "DES-NOV 2022";
				$bulanini[11] = "NOVEMBER 2021";
				$bulandepan[11] = "DES-NOV 2022";

				$kalibulan[1] = (20 / 100);
				$kalibulan[2] = (20 / 100);
				$kalibulan[3] = (20 / 100);
				$kalibulan[4] = (20 / 100);
				$kalibulan[5] = (20 / 100);
				$kalibulan[6] = (20 / 100);
				$kalibulan[7] = (20 / 100);
				$kalibulan[8] = (20 / 100);
				$kalibulan[9] = (20 / 100);
				$kalibulan[10] = (20 / 100);
				$kalibulan[11] = (20 / 100);

				$flagbulan[11] = 0;
				$flagbulan[10] = 1;
				$flagbulan[9] = 2;
				$flagbulan[8] = 3;
				$flagbulan[7] = 4;
				$flagbulan[6] = 5;
				$flagbulan[5] = 6;
				$flagbulan[4] = 7;
				$flagbulan[3] = 8;
				$flagbulan[2] = 9;
				$flagbulan[1] = 10;
				$bulanjumlah = $u;
				$awal = 0;
				$flagkali = 11;
				$flagkaliawal = 1;

			} else if ($u == 12) {
				$bulanini[1] = "JAN-DES 2021";
				$bulandepan[1] = "2022";
				$bulanini[2] = "FEB-DES 2021";
				$bulandepan[2] = "2022";
				$bulanini[3] = "MAR-DES 2021";
				$bulandepan[3] = "2022";
				$bulanini[4] = "APR-DES 2021";
				$bulandepan[4] = "2022";
				$bulanini[5] = "MEI-DES 2021";
				$bulandepan[5] = "2022";
				$bulanini[6] = "JUN-DES 2021";
				$bulandepan[6] = "2022";
				$bulanini[7] = "JUL-DES 2021";
				$bulandepan[7] = "2022";
				$bulanini[8] = "AGU-DES 2021";
				$bulandepan[8] = "2022";
				$bulanini[9] = "SEP-DES 2021";
				$bulandepan[9] = "2022";
				$bulanini[10] = "OKT-DES 2021";
				$bulandepan[10] = "2022";
				$bulanini[11] = "NOV-DES 2021";
				$bulandepan[11] = "2022";
				$bulanini[12] = "DESEMBER 2021";
				$bulandepan[12] = "2022";

				$kalibulan[1] = (20 / 100);
				$kalibulan[2] = (20 / 100);
				$kalibulan[3] = (20 / 100);
				$kalibulan[4] = (20 / 100);
				$kalibulan[5] = (20 / 100);
				$kalibulan[6] = (20 / 100);
				$kalibulan[7] = (20 / 100);
				$kalibulan[8] = (20 / 100);
				$kalibulan[9] = (20 / 100);
				$kalibulan[10] = (20 / 100);
				$kalibulan[11] = (20 / 100);
				$kalibulan[12] = (20 / 100);

				$flagbulan[12] = 0;
				$flagbulan[11] = 1;
				$flagbulan[10] = 2;
				$flagbulan[9] = 3;
				$flagbulan[8] = 4;
				$flagbulan[7] = 5;
				$flagbulan[6] = 6;
				$flagbulan[5] = 7;
				$flagbulan[4] = 8;
				$flagbulan[3] = 9;
				$flagbulan[2] = 10;
				$flagbulan[1] = 11;
				$bulanjumlah = $u;
				$awal = 0;
				$flagkali = 12;
				$flagkaliawal = 1;

			} else {
				$bulanini[1] = "BULAN INI";
				$bulandepan[1] = "BULAN DEPAN";
				$bulanjumlah = 01;

			}}

		// antara masuk dan tidak masuk
		$kolom = 2;
		$nomor = 1;

		$y = 1;
		// end
		$spreadsheet = new Spreadsheet;
		for ($i = 01; $i <= $bulanjumlah; $i++) {

			$spreadsheet->setActiveSheetIndex(0)
				->setCellValue("A$y", 'NO')
				->setCellValue("B$y", 'CBG/CAPEM/KEDAI')
				->setCellValue("C$y", 'NO SERTIFIKAT')
				->setCellValue("D$y", 'TANGGAL SERTIFIKAT')
				->setCellValue("E$y", 'JUMLAH TERJAMIN')
				->setCellValue("F$y", 'NAMA TERJAMIN')
				->setCellValue("G$y", 'COVERAGE')
				->setCellValue("H$y", 'PLAFOND')
				->setCellValue("I$y", 'JML JAMINAN')
				->setCellValue("J$y", 'AWAL')
				->setCellValue("K$y", 'AKHIR')
				->setCellValue("L$y", 'BLN')
				->setCellValue("M$y", 'TARIF')
				->setCellValue("N$y", 'IJP')
				->setCellValue("O$y", 'ADM')
				->setCellValue("P$y", 'MATERAI')
				->setCellValue("Q$y", 'TOTAL')
				->setCellValue("R$y", 'FEE BANK')
				->setCellValue("S$y", 'TOTAL PENDAPATAN')
				->setCellValue("T$y", $bulanini[$i])
				->setCellValue("U$y", $bulandepan[$i])
				->setCellValue("V$y", 'SISA')
				->setCellValue("W$y", '')
				->setCellValue("X$y", '')
				->setCellValue("Y$y", '');

			$DJPnoreg = "";
			$flag = 1;
			$sumbulanawal = 0;
			$sumbulanakhir = 0;
			$sumsisa = 0;
			$sumbayar = 0;
			$sumtotal = 0;
			$y++;

			if (!is_array($table_result) || is_array($table_result)) {
				foreach ($table_result as $u) {

					$date1 = $u->DJPtanggalverif;
					$date2 = date('Y-m-d');

					$ts1 = strtotime($date1);
					$ts2 = strtotime($date2);

					$year1 = date('Y', $ts1);
					$year2 = date('Y', $ts2);

					$month1 = date('m', $ts1);
					$month2 = date('m', $ts2);

					$day1 = date('d', $ts1);
					$day2 = date('d', $ts2);

					$diff = (($year2 - $year1) * 12) + ($month2 - $month1);
					if ($u->DJPDjangkawaktu - $diff <= 12) {
						$a = 12;
						$a -= $bulanjumlah;
					} else {
						$a = 12;
					}

					$bulansekarang = date('m', strtotime($u->DJPtanggalverif));
					if (($u->DJPnoreg != $DJPnoreg) && ($bulansekarang == $i)) {
						$spreadsheet->setActiveSheetIndex(0)
							->setCellValue('A' . $kolom, $nomor)
							->setCellValue('B' . $kolom, $u->PPnama)
							->setCellValue('C' . $kolom, $u->DJPnoreg)
							->setCellValue('D' . $kolom, $u->DJPtanggalverif)
							->setCellValue('E' . $kolom, 1)
							->setCellValue('F' . $kolom, $u->TRJMnama)
							->setCellValue('G' . $kolom, $u->DJPDcoverage)
							->setCellValue('H' . $kolom, $u->DJPDplafondkredit)
							->setCellValue('I' . $kolom, $u->DJPDnilaipenjaminan)
							->setCellValue('J' . $kolom, date('j F Y', strtotime($u->DJPDtanggalawal)))
							->setCellValue('K' . $kolom, date('j F Y', strtotime($u->DJPDtanggalakhir)))
							->setCellValue('L' . $kolom, $u->DJPDjangkawaktu)
							->setCellValue('M' . $kolom, $u->DJPDrate . "%")
							->setCellValue('N' . $kolom, $u->DJPDimbaljasa)
							->setCellValue('O' . $kolom, $u->DJPDfeeadm)
							->setCellValue('P' . $kolom, $u->DJPDfeematerai, 0, ".", ".")
							->setCellValue('Q' . $kolom, (int) ($total = $u->DJPDimbaljasa + $u->DJPDfeeadm + $u->DJPDfeematerai))
							->setCellValue('R' . $kolom, (int) $u->DJPDfeebank)
							->setCellValue('S' . $kolom, (int) $total - $u->DJPDfeebank)
							->setCellValue('T' . $kolom, (int) ($hasilbulanawal = (($u->DJPDimbaljasa * $kalibulan[$i]) + (($u->DJPDimbaljasa - ($u->DJPDimbaljasa * $kalibulan[$i])) / ($u->DJPDjangkawaktu - $flagkaliawal) * $flagbulan[$i]))))
							->setCellValue('U' . $kolom, (int) ($hasilbulanakhir = (($u->DJPDimbaljasa - ($u->DJPDimbaljasa * $kalibulan[$i])) / ($u->DJPDjangkawaktu - $flagkaliawal) * $a)))
							->setCellValue('V' . $kolom, (int) $sisa = ($u->DJPDimbaljasa - $hasilbulanawal - $hasilbulanakhir))
							->setCellValue('W' . $kolom, (int) $totalakhir = ($hasilbulanawal + $hasilbulanakhir + $sisa))
							->setCellValue('X' . $kolom, "--")
							->setCellValue('Y' . $kolom, $bayarminmal = (($u->DJPDimbaljasa - ($u->DJPDimbaljasa * $kalibulan[$i])) / ($u->DJPDjangkawaktu - $flagkaliawal)));
						$kolom++;
						$sumbulanawal += $hasilbulanawal;
						$sumbulanakhir += $hasilbulanakhir;
						$sumsisa += $sisa;
						$sumbayar += $bayarminmal;
						$sumtotal += $total;
						$y++;

						if ($flag == $u->DJPjumlahpk) {
							$spreadsheet->setActiveSheetIndex(0)
								->setCellValue('A' . $kolom, "")
								->setCellValue('B' . $kolom, "")
								->setCellValue('C' . $kolom, "")
								->setCellValue('D' . $kolom, "")
								->setCellValue('E' . $kolom, $u->DJPjumlahpk)
								->setCellValue('F' . $kolom, "")
								->setCellValue('G' . $kolom, "")
								->setCellValue('H' . $kolom, $u->DJPjumlahnilaipk)
								->setCellValue('I' . $kolom, $u->DJPnilaipenjaminan)
								->setCellValue('J' . $kolom, "")
								->setCellValue('K' . $kolom, "")
								->setCellValue('L' . $kolom, "")
								->setCellValue('M' . $kolom, "")
								->setCellValue('N' . $kolom, $u->DJPjumlahimbaljasa)
								->setCellValue('O' . $kolom, $u->DJPfeeadmin)
								->setCellValue('P' . $kolom, $u->DJPfeematerai, 0, ".", ".")
								->setCellValue('Q' . $kolom, (int) ($total = $u->DJPjumlahimbaljasa + $u->DJPfeeadmin + $u->DJPfeematerai))
								->setCellValue('R' . $kolom, (int) $u->DJPfeebank)
								->setCellValue('S' . $kolom, (int) $total - $u->DJPfeebank)
								->setCellValue('T' . $kolom, (int) $sumbulanawal)
								->setCellValue('U' . $kolom, (int) $sumbulanakhir)
								->setCellValue('V' . $kolom, (int) $sumsisa)
								->setCellValue('W' . $kolom, (int) $sumtotal)
								->setCellValue('X' . $kolom, "--")
								->setCellValue('Y' . $kolom, "--");

							$y++;
							$kolom++;
							$flag = 0;

							$sumbulanawal = 0;
							$sumbulanakhir = 0;
							$sumsisa = 0;
							$sumbayar = 0;
							$sumtotal = 0;
						}

						$nomor++;
					} else if ($bulansekarang == $i) {

						$date1 = $u->DJPtanggalverif;
						$date2 = date('Y-m-d');

						$ts1 = strtotime($date1);
						$ts2 = strtotime($date2);

						$year1 = date('Y', $ts1);
						$year2 = date('Y', $ts2);

						$month1 = date('m', $ts1);
						$month2 = date('m', $ts2);

						$day1 = date('d', $ts1);
						$day2 = date('d', $ts2);

						$diff = (($year2 - $year1) * 12) + ($month2 - $month1);
						if ($u->DJPDjangkawaktu - $diff <= 12) {
							$a = 12;
							$a -= $bulanjumlah;
						} else {
							$a = 12;
						}

						$spreadsheet->setActiveSheetIndex(0)
							->setCellValue('A' . $kolom, "")
							->setCellValue('B' . $kolom, "")
							->setCellValue('C' . $kolom, "")
							->setCellValue('D' . $kolom, $u->DJPtanggalverif)
							->setCellValue('E' . $kolom, 1)
							->setCellValue('F' . $kolom, $u->TRJMnama)
							->setCellValue('G' . $kolom, $u->DJPDcoverage)
							->setCellValue('H' . $kolom, $u->DJPDplafondkredit)
							->setCellValue('I' . $kolom, $u->DJPDnilaipenjaminan)
							->setCellValue('J' . $kolom, date('j F Y', strtotime($u->DJPDtanggalawal)))
							->setCellValue('K' . $kolom, date('j F Y', strtotime($u->DJPDtanggalakhir)))
							->setCellValue('L' . $kolom, $u->DJPDjangkawaktu)
							->setCellValue('M' . $kolom, $u->DJPDrate . "%")
							->setCellValue('N' . $kolom, $u->DJPDimbaljasa)
							->setCellValue('O' . $kolom, $u->DJPDfeeadm)
							->setCellValue('P' . $kolom, $u->DJPDfeematerai, 0, ".", ".")
							->setCellValue('Q' . $kolom, (int) ($total = $u->DJPDimbaljasa + $u->DJPDfeeadm + $u->DJPDfeematerai))
							->setCellValue('R' . $kolom, (int) $u->DJPDfeebank)
							->setCellValue('S' . $kolom, (int) $total - $u->DJPDfeebank)
							->setCellValue('T' . $kolom, (int) ($hasilbulanawal = (($u->DJPDimbaljasa * $kalibulan[$i]) + (($u->DJPDimbaljasa - ($u->DJPDimbaljasa * $kalibulan[$i])) / ($u->DJPDjangkawaktu - $flagkaliawal) * $flagbulan[$i]))))
							->setCellValue('U' . $kolom, (int) ($hasilbulanakhir = (($u->DJPDimbaljasa - ($u->DJPDimbaljasa * $kalibulan[$i])) / ($u->DJPDjangkawaktu - $flagkaliawal) * $a)))
							->setCellValue('V' . $kolom, (int) $sisa = ($u->DJPDimbaljasa - $hasilbulanawal - $hasilbulanakhir))
							->setCellValue('W' . $kolom, (int) $totalakhir = ($hasilbulanawal + $hasilbulanakhir + $sisa))
							->setCellValue('X' . $kolom, "--")
							->setCellValue('Y' . $kolom, $bayarminmal = (($u->DJPDimbaljasa - ($u->DJPDimbaljasa * $kalibulan[$i])) / ($u->DJPDjangkawaktu - $flagkaliawal)));

						$sumbulanawal += $hasilbulanawal;
						$sumbulanakhir += $hasilbulanakhir;
						$sumsisa += $sisa;
						$sumbayar += $bayarminmal;
						$sumtotal += $total;
						$kolom++;
						$y++;

						if ($flag == $u->DJPjumlahpk) {

							$spreadsheet->setActiveSheetIndex(0)
								->setCellValue('A' . $kolom, "")
								->setCellValue('B' . $kolom, "")
								->setCellValue('C' . $kolom, "")
								->setCellValue('D' . $kolom, "")
								->setCellValue('E' . $kolom, $u->DJPjumlahpk)
								->setCellValue('F' . $kolom, "")
								->setCellValue('G' . $kolom, "")
								->setCellValue('H' . $kolom, $u->DJPjumlahnilaipk)
								->setCellValue('I' . $kolom, $u->DJPnilaipenjaminan)
								->setCellValue('J' . $kolom, "")
								->setCellValue('K' . $kolom, "")
								->setCellValue('L' . $kolom, "")
								->setCellValue('M' . $kolom, "")
								->setCellValue('N' . $kolom, $u->DJPjumlahimbaljasa)
								->setCellValue('O' . $kolom, $u->DJPfeeadmin)
								->setCellValue('P' . $kolom, $u->DJPfeematerai, 0, ".", ".")
								->setCellValue('Q' . $kolom, (int) ($u->DJPjumlahimbaljasa + $u->DJPfeeadmin + $u->DJPfeematerai))
								->setCellValue('R' . $kolom, (int) $u->DJPfeebank)
								->setCellValue('S' . $kolom, (int) $total - $u->DJPfeebank)
								->setCellValue('T' . $kolom, (int) $sumbulanawal)
								->setCellValue('U' . $kolom, (int) $sumbulanakhir)
								->setCellValue('V' . $kolom, (int) $sumsisa)
								->setCellValue('W' . $kolom, (int) $sumtotal)
								->setCellValue('X' . $kolom, "--")
								->setCellValue('Y' . $kolom, "--");

							$flag = 0;
							$kolom++;
							$sumbulanawal = 0;
							$sumbulanakhir = 0;
							$sumsisa = 0;
							$sumbayar = 0;
							$sumtotal = 0;
							$y++;

						}

					} else {

						continue;
					}

					$DJPnoreg = $u->DJPnoreg;
					$flag += 1;

				}
			}

			$kolom++;

		}

		$writer = new Xlsx($spreadsheet);
		header('Content-Type: application/vnd.ms-excel');
		header('Content-Disposition: attachment;filename="IJPAccrual.xls"');
		header('Cache-Control: max-age=0');
		$writer->save('php://output');
	}

}