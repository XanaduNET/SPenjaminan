<?php

defined('BASEPATH') or exit('No direct script access allowed');
require './application/third_party/phpoffice/vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

class Fee extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Model_fee');
        $this->load->model('Model_table_fee');

    }

    public function index()
    {

        $clickEvent = 0;
        $OPKchecked = array();
        $GPPchecked = array();
        $Monthchecked = array();
        $Tahunchecked = array();

        if (!empty($this->input->post('Month')) && ($this->input->post('Month') == "00")) {

            if (!empty($this->input->post('GPPchecked')) && !empty($this->input->post('OPKchecked'))) {

                foreach ($this->input->post('GPPchecked') as $obj) {
                    $GPPchecked[] = $obj;
                }

                foreach ($this->input->post('OPKchecked') as $obj) {
                    $OPKchecked[] = $obj;
                }

                $Tahunchecked[] = $this->input->post('Tahun');

                $keyword = $this->input->post('keyword');
                $data['ambilid'] = $this->Model_fee->ambilid();

                $data['table'] = $this->Model_table_fee->ambil_data_query_lengkap($keyword, $GPPchecked, $OPKchecked, $Tahunchecked); // pass value to model fn

            } else if (empty($this->input->post('GPPchecked')) && !empty($this->input->post('OPKchecked'))) {

                foreach ($this->input->post('OPKchecked') as $obj) {
                    $OPKchecked[] = $obj;
                }

                $Tahunchecked[] = $this->input->post('Tahun');

                $keyword = $this->input->post('keyword');
                $data['ambilid'] = $this->Model_fee->ambilid();

                $data['table'] = $this->Model_table_fee->ambil_data_query_opk($keyword, $OPKchecked, $Tahunchecked); // pass value to model fn

            } else if (!empty($this->input->post('semuaGPP')) && !empty($this->input->post('OPKchecked'))) {

                foreach ($this->input->post('OPKchecked') as $obj) {
                    $OPKchecked[] = $obj;
                }

                $Tahunchecked[] = $this->input->post('Tahun');

                $keyword = $this->input->post('keyword');
                $data['ambilid'] = $this->Model_fee->ambilid();

                $data['table'] = $this->Model_table_fee->ambil_data_query_opk($keyword, $OPKchecked, $Tahunchecked); // pass value to model fn

            } else if (!empty($this->input->post('semuaGPP')) && !empty($this->input->post('semuaOPK'))) {

                $keyword = $this->input->post('keyword');
                $data['ambilid'] = $this->Model_fee->ambilid();
                $data['table'] = $this->Model_table_fee->ambil_data($keyword);

            } else if (!empty($this->input->post('GPPchecked')) && !empty($this->input->post('semuaOPK'))) {

                foreach ($this->input->post('GPPchecked') as $obj) {
                    $GPPchecked[] = $obj;
                }

                $Tahunchecked[] = $this->input->post('Tahun');

                $keyword = $this->input->post('keyword');
                $data['ambilid'] = $this->Model_fee->ambilid();

                $data['table'] = $this->Model_table_fee->ambil_data_query($keyword, $GPPchecked, $Tahunchecked); // pass value to model fn

            } else {

                $keyword = $this->input->post('keyword');
                $data['ambilid'] = $this->Model_fee->ambilid();
                $data['table'] = $this->Model_table_fee->ambil_data($keyword);

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

                $Tahunchecked[] = $this->input->post('Tahun');

                $keyword = $this->input->post('keyword');
                $data['ambilid'] = $this->Model_fee->ambilid();

                $data['table'] = $this->Model_table_fee->ambil_data_query_lengkap_bulan($keyword, $GPPchecked, $OPKchecked, $totalBulan, $Tahunchecked); // pass value to model fn

            } else if (empty($this->input->post('GPPchecked')) && !empty($this->input->post('OPKchecked'))) {

                foreach ($this->input->post('OPKchecked') as $obj) {
                    $OPKchecked[] = $obj;
                }
                $Tahunchecked[] = $this->input->post('Tahun');

                $keyword = $this->input->post('keyword');
                $data['ambilid'] = $this->Model_fee->ambilid();

                $data['table'] = $this->Model_table_fee->ambil_data_query_opk_bulan($keyword, $OPKchecked, $totalBulan, $Tahunchecked); // pass value to model fn

            } else if (!empty($this->input->post('semuaGPP')) && !empty($this->input->post('OPKchecked'))) {

                foreach ($this->input->post('OPKchecked') as $obj) {
                    $OPKchecked[] = $obj;
                }

                $Tahunchecked[] = $this->input->post('Tahun');

                $keyword = $this->input->post('keyword');
                $data['ambilid'] = $this->Model_fee->ambilid();

                $data['table'] = $this->Model_table_fee->ambil_data_query_opk_bulan($keyword, $OPKchecked, $totalBulan, $Tahunchecked); // pass value to model fn

            } else if (!empty($this->input->post('semuaGPP')) && !empty($this->input->post('semuaOPK'))) {

                $Tahunchecked[] = $this->input->post('Tahun');

                $keyword = $this->input->post('keyword');
                $data['ambilid'] = $this->Model_fee->ambilid();
                $data['table'] = $this->Model_table_fee->ambil_data_bulan($keyword, $totalBulan, $Tahunchecked);

            } else if (!empty($this->input->post('GPPchecked')) && !empty($this->input->post('semuaOPK'))) {

                foreach ($this->input->post('GPPchecked') as $obj) {
                    $GPPchecked[] = $obj;
                }
                $Tahunchecked[] = $this->input->post('Tahun');

                $keyword = $this->input->post('keyword');
                $data['ambilid'] = $this->Model_fee->ambilid();

                $data['table'] = $this->Model_table_fee->ambil_data_query_bulan($keyword, $GPPchecked, $totalBulan, $Tahunchecked); // pass value to model fn

            } else {

                $Tahunchecked[] = $this->input->post('Tahun');

                $keyword = $this->input->post('keyword');
                $data['ambilid'] = $this->Model_fee->ambilid();

                $data['table'] = $this->Model_table_fee->ambil_data_bulan($keyword, $totalBulan, $Tahunchecked);

            }

            // END
        } else {

            $keyword = $this->input->post('keyword');
            $data['ambilid'] = $this->Model_fee->ambilid();

            $data['table'] = $this->Model_table_fee->ambil_data($keyword);

        }

        $data['bulan'] = $Monthchecked;

        $data['title'] = 'Fee';
        $data['user'] = $this->db->get_where('user', ['nama' => $this->session->userdata('nama')])->row_array();
        $data['gpp'] = $this->Model_table_fee->getGPP();
        $data['opk'] = $this->Model_table_fee->getOPK();
        $data['tahun'] = $this->Model_table_fee->getYear();
        $data['menu'] = $this->db->get('user_menu')->result_array();

        $date = date("d-m-Y");
        $bulan = date("m");
        $namauser = $this->db->get_where('user', ['nama' => $this->session->userdata('nama')])->row_array();

        $log = "User: " . $_SERVER['REMOTE_ADDR'] . ' - ' . date("F j,Y, H:i:s") . PHP_EOL .
            "Attempt: " . ("Success Masuk Halaman") . PHP_EOL .
            "User: " . $namauser['nama'] . PHP_EOL .
            "Aksi: " . ('Fee Penjaminan') . PHP_EOL .
            "-------------------------" . PHP_EOL;
        //-
        file_put_contents('logfile/' . $bulan . '/logfile' . $date . '/log_' . date("j.n.Y") . '.txt', $log, FILE_APPEND);

        $this->load->view('template/header', $data);
        $this->load->view('template/header_body', $data);
        $this->load->view('template/right_sidebar', $data);
        $this->load->view('template/left_sidebar', $data);
        $this->load->view('operasional/fee', $data);
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
                "Attempt: " . ("Success Export Fee Bank") . PHP_EOL .
                "User: " . $namauser['nama'] . PHP_EOL .
                "Aksi: " . ('Operasional Fee') . PHP_EOL .
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
        $year = date("Y");

        foreach ($table_result as $a) {
            $year = date("Y", strtotime($a->DJPtanggaldeklarasi));
        }
        foreach ($bulan as $u) {

            if ($u == 01) {
                $bulanini[1] = "JANUARI $year";
                $bulandepan[1] = "FEB-JAN " . $year + 1;
                $bulanjumlah = $u;
                $awal = 0;

                $kalibulan[1] = (20 / 100);
                $flagkali = 1;
                $flagkaliawal = 1;
                $flagbulan[1] = 0;

            } else if ($u == 02) {
                $bulanini[1] = "JAN-FEB $year";
                $bulandepan[1] = "MAR-FEB " . $year + 1;

                $bulanini[2] = "FEBRUARI $year";
                $bulandepan[2] = "MAR-FEB " . $year + 1;

                $kalibulan[1] = (20 / 100);
                $kalibulan[2] = (20 / 100);

                $flagbulan[2] = 0;
                $flagbulan[1] = 1;
                $bulanjumlah = $u;
                $awal = 0;
                $flagkali = 2;
                $flagkaliawal = 1;

            } else if ($u == 03) {
                $bulanini[1] = "JAN-MAR $year";
                $bulandepan[1] = "APR-MAR " . $year + 1;
                $bulanini[2] = "FEB-MAR $year";
                $bulandepan[2] = "APR-MAR " . $year + 1;
                $bulanini[3] = "MARET $year";
                $bulandepan[3] = "APR-MAR " . $year + 1;

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
                $bulanini[1] = "JAN-APR $year";
                $bulandepan[1] = "MEI-APR " . $year + 1;
                $bulanini[2] = "FEB-APR $year";
                $bulandepan[2] = "MEI-APR " . $year + 1;
                $bulanini[3] = "MAR-APR $year";
                $bulandepan[3] = "MEI-APR " . $year + 1;
                $bulanini[4] = "APRIL $year";
                $bulandepan[4] = "MEI-APR " . $year + 1;

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
                $bulanini[1] = "JAN-MEI $year";
                $bulandepan[1] = "JUN-MEI " . $year + 1;
                $bulanini[2] = "FEB-MEI $year";
                $bulandepan[2] = "JUN-MEI " . $year + 1;
                $bulanini[3] = "MAR-MEI $year";
                $bulandepan[3] = "JUN-MEI " . $year + 1;
                $bulanini[4] = "APR-MEI $year";
                $bulandepan[4] = "JUN-MEI " . $year + 1;
                $bulanini[5] = "MEI $year";
                $bulandepan[5] = "JUN-MEI " . $year + 1;

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
                $bulanini[1] = "JAN-JUN $year";
                $bulandepan[1] = "JUL-JUN " . $year + 1;
                $bulanini[2] = "FEB-JUN $year";
                $bulandepan[2] = "JUL-JUN " . $year + 1;
                $bulanini[3] = "MAR-JUN $year";
                $bulandepan[3] = "JUL-JUN " . $year + 1;
                $bulanini[4] = "APR-JUN $year";
                $bulandepan[4] = "JUL-JUN " . $year + 1;
                $bulanini[5] = "MEI-JUN $year";
                $bulandepan[5] = "JUL-JUN " . $year + 1;
                $bulanini[6] = "JUNI $year";
                $bulandepan[6] = "JUL-JUN " . $year + 1;

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
                $bulanini[1] = "JAN-JUL $year";
                $bulandepan[1] = "AGU-JUL " . $year + 1;
                $bulanini[2] = "FEB-JUL $year";
                $bulandepan[2] = "AGU-JUL " . $year + 1;
                $bulanini[3] = "MAR-JUL $year";
                $bulandepan[3] = "AGU-JUL " . $year + 1;
                $bulanini[4] = "APR-JUL $year";
                $bulandepan[4] = "AGU-JUL " . $year + 1;
                $bulanini[5] = "MEI-JUL $year";
                $bulandepan[5] = "AGU-JUL " . $year + 1;
                $bulanini[6] = "JUNI-JUL $year";
                $bulandepan[6] = "AGU-JUL " . $year + 1;
                $bulanini[7] = "JULI $year";
                $bulandepan[7] = "AGU-JUL " . $year + 1;

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
                $bulanini[1] = "JAN-AGU $year";
                $bulandepan[1] = "SEP-AGU " . $year + 1;
                $bulanini[2] = "FEB-AGU $year";
                $bulandepan[2] = "SEP-AGU " . $year + 1;
                $bulanini[3] = "MAR-AGU $year";
                $bulandepan[3] = "SEP-AGU " . $year + 1;
                $bulanini[4] = "APR-AGU $year";
                $bulandepan[4] = "SEP-AGU " . $year + 1;
                $bulanini[5] = "MEI-AGU $year";
                $bulandepan[5] = "SEP-AGU " . $year + 1;
                $bulanini[6] = "JUN-AGU $year";
                $bulandepan[6] = "SEP-AGU " . $year + 1;
                $bulanini[7] = "JUL-AGU $year";
                $bulandepan[7] = "SEP-AGU " . $year + 1;
                $bulanini[8] = "AGUSTUS $year";
                $bulandepan[8] = "SEP-AGU " . $year + 1;

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
                $bulanini[1] = "JAN-SEP $year";
                $bulandepan[1] = "OKT-SEP " . $year + 1;
                $bulanini[2] = "FEB-SEP $year";
                $bulandepan[2] = "OKT-SEP " . $year + 1;
                $bulanini[3] = "MAR-SEP $year";
                $bulandepan[3] = "OKT-SEP " . $year + 1;
                $bulanini[4] = "APR-SEP $year";
                $bulandepan[4] = "OKT-SEP " . $year + 1;
                $bulanini[5] = "MEI-SEP $year";
                $bulandepan[5] = "OKT-SEP " . $year + 1;
                $bulanini[6] = "JUN-SEP $year";
                $bulandepan[6] = "OKT-SEP " . $year + 1;
                $bulanini[7] = "JUL-SEP $year";
                $bulandepan[7] = "OKT-SEP " . $year + 1;
                $bulanini[8] = "AGUS-SEP $year";
                $bulandepan[8] = "OKT-SEP " . $year + 1;
                $bulanini[9] = "SEPTEMBER $year";
                $bulandepan[9] = "OKT-SEP " . $year + 1;

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
                $bulanini[1] = "JAN-OKT $year";
                $bulandepan[1] = "NOV-OKT " . $year + 1;
                $bulanini[2] = "FEB-OKT $year";
                $bulandepan[2] = "NOV-OKT " . $year + 1;
                $bulanini[3] = "MAR-OKT $year";
                $bulandepan[3] = "NOV-OKT " . $year + 1;
                $bulanini[4] = "APR-OKT $year";
                $bulandepan[4] = "NOV-OKT " . $year + 1;
                $bulanini[5] = "MEI-OKT $year";
                $bulandepan[5] = "NOV-OKT " . $year + 1;
                $bulanini[6] = "JUN-OKT $year";
                $bulandepan[6] = "NOV-OKT " . $year + 1;
                $bulanini[7] = "JUL-OKT $year";
                $bulandepan[7] = "NOV-OKT " . $year + 1;
                $bulanini[8] = "AGU-OKT $year";
                $bulandepan[8] = "NOV-OKT " . $year + 1;
                $bulanini[9] = "SEP-OKT $year";
                $bulandepan[9] = "NOV-OKT " . $year + 1;
                $bulanini[10] = "OKTOBER $year";
                $bulandepan[10] = "NOV-OKT " . $year + 1;

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
                $bulanini[1] = "JAN-NOV $year";
                $bulandepan[1] = "DES-NOV " . $year + 1;
                $bulanini[2] = "FEB-NOV $year";
                $bulandepan[2] = "DES-NOV " . $year + 1;
                $bulanini[3] = "MAR-NOV $year";
                $bulandepan[3] = "DES-NOV " . $year + 1;
                $bulanini[4] = "APR-NOV $year";
                $bulandepan[4] = "DES-NOV " . $year + 1;
                $bulanini[5] = "MEI-NOV $year";
                $bulandepan[5] = "DES-NOV " . $year + 1;
                $bulanini[6] = "JUN-NOV $year";
                $bulandepan[6] = "DES-NOV " . $year + 1;
                $bulanini[7] = "JUL-NOV $year";
                $bulandepan[7] = "DES-NOV " . $year + 1;
                $bulanini[8] = "AGU-NOV $year";
                $bulandepan[8] = "DES-NOV " . $year + 1;
                $bulanini[9] = "SEP-NOV $year";
                $bulandepan[9] = "DES-NOV " . $year + 1;
                $bulanini[10] = "OKT-NOV $year";
                $bulandepan[10] = "DES-NOV " . $year + 1;
                $bulanini[11] = "NOVEMBER $year";
                $bulandepan[11] = "DES-NOV " . $year + 1;

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
                $bulanini[1] = "JAN-DES $year";
                $bulandepan[1] = " " . $year + 1;
                $bulanini[2] = "FEB-DES $year";
                $bulandepan[2] = " " . $year + 1;
                $bulanini[3] = "MAR-DES $year";
                $bulandepan[3] = " " . $year + 1;
                $bulanini[4] = "APR-DES $year";
                $bulandepan[4] = " " . $year + 1;
                $bulanini[5] = "MEI-DES $year";
                $bulandepan[5] = " " . $year + 1;
                $bulanini[6] = "JUN-DES $year";
                $bulandepan[6] = " " . $year + 1;
                $bulanini[7] = "JUL-DES $year";
                $bulandepan[7] = " " . $year + 1;
                $bulanini[8] = "AGU-DES $year";
                $bulandepan[8] = " " . $year + 1;
                $bulanini[9] = "SEP-DES $year";
                $bulandepan[9] = " " . $year + 1;
                $bulanini[10] = "OKT-DES $year";
                $bulandepan[10] = " " . $year + 1;
                $bulanini[11] = "NOV-DES $year";
                $bulandepan[11] = " " . $year + 1;
                $bulanini[12] = "DESEMBER $year";
                $bulandepan[12] = " " . $year + 1;

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
                    $bulansekarang = date('m', strtotime($u->DJPtanggalverif));
                    if (($u->DJPnoreg != $DJPnoreg) && ($bulansekarang == $i)) {

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

                        if ($bulanjumlah == 01 || $bulanjumlah == 02) {
                            $hasilbulanakhir = (($u->DJPDfeebank - ($u->DJPDfeebank * $kalibulan[$i])) / ($u->DJPDjangkawaktu - $flagkaliawal) * $a);
                        } else {
                            $hasilbulanakhir = $u->DJPDfeebank / $u->DJPDjangkawaktu * $a;
                        }

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
                            ->setCellValue('T' . $kolom, (int) ($hasilbulanawal = (($u->DJPDfeebank * $kalibulan[$i]) + (($u->DJPDfeebank - ($u->DJPDfeebank * $kalibulan[$i])) / ($u->DJPDjangkawaktu - $flagkaliawal) * $flagbulan[$i]))))
                            ->setCellValue('U' . $kolom, (int) $hasilbulanakhir)
                            ->setCellValue('V' . $kolom, (int) $sisa = ($u->DJPDfeebank - $hasilbulanawal - $hasilbulanakhir))
                            ->setCellValue('W' . $kolom, (int) $totalakhir = ($hasilbulanawal + $hasilbulanakhir + $sisa))
                            ->setCellValue('X' . $kolom, "--")
                            ->setCellValue('Y' . $kolom, $bayarminmal = (($u->DJPDfeebank - ($u->DJPDfeebank * $kalibulan[$i])) / ($u->DJPDjangkawaktu - $flagkaliawal)));
                        $kolom++;
                        $sumbulanawal += $hasilbulanawal;
                        $sumbulanakhir += $hasilbulanakhir;
                        $sumsisa += $sisa;
                        $sumbayar += $bayarminmal;
                        $sumtotal += $totalakhir;
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

                        if ($bulanjumlah == 01 || $bulanjumlah == 02) {
                            $hasilbulanakhir = (($u->DJPDfeebank - ($u->DJPDfeebank * $kalibulan[$i])) / ($u->DJPDjangkawaktu - $flagkaliawal) * $a);
                        } else {
                            $hasilbulanakhir = $u->DJPDfeebank / $u->DJPDjangkawaktu * $a;
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
                            ->setCellValue('T' . $kolom, (int) ($hasilbulanawal = (($u->DJPDfeebank * $kalibulan[$i]) + (($u->DJPDfeebank - ($u->DJPDfeebank * $kalibulan[$i])) / ($u->DJPDjangkawaktu - $flagkaliawal) * $flagbulan[$i]))))
                            ->setCellValue('U' . $kolom, (int) $hasilbulanakhir)
                            ->setCellValue('V' . $kolom, (int) $sisa = ($u->DJPDfeebank - $hasilbulanawal - $hasilbulanakhir))
                            ->setCellValue('W' . $kolom, (int) $totalakhir = ($hasilbulanawal + $hasilbulanakhir + $sisa))
                            ->setCellValue('X' . $kolom, "--")
                            ->setCellValue('Y' . $kolom, $bayarminmal = (($u->DJPDfeebank - ($u->DJPDfeebank * $kalibulan[$i])) / ($u->DJPDjangkawaktu - $flagkaliawal)));

                        $sumbulanawal += $hasilbulanawal;
                        $sumbulanakhir += $hasilbulanakhir;
                        $sumsisa += $sisa;
                        $sumbayar += $bayarminmal;
                        $sumtotal += $totalakhir;
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
        header('Content-Disposition: attachment;filename="IJPfee.Xlsx"');
        header('Cache-Control: max-age=0');
        $writer->save('php://output');
    }

}
