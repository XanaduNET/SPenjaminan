
<?php

defined('BASEPATH') or exit('No direct script access allowed');
require './application/third_party/phpoffice/vendor/autoload.php';

class Accrual_baru extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Model_accrual');
        $this->load->model('Model_table_accrual');

    }

    public function index()
    {

        $data['title'] = 'Accrual';
        $data['user'] = $this->db->get_where('user', ['nama' => $this->session->userdata('nama')])->row_array();
        $data['gpp'] = $this->Model_table_accrual->getGPP();
        $data['opk'] = $this->Model_table_accrual->getOPK();

        $data['menu'] = $this->db->get('user_menu')->result_array();

        $OPKchecked = array();
        $GPPchecked = array();
        $Monthchecked = array();
        $keyword = $this->input->post('keyword');

        if (!empty($this->input->post('Month')) && ($this->input->post('Month') == "00")) {

            if (!empty($this->input->post('GPPchecked')) && !empty($this->input->post('OPKchecked'))) {
                foreach ($this->input->post('GPPchecked') as $obj) {
                    $GPPchecked[] = $obj;
                }
                foreach ($this->input->post('OPKchecked') as $obj) {
                    $OPKchecked[] = $obj;
                }

                $data['ambilid'] = $this->Model_accrual->ambilid();
                $data['table'] = $this->Model_table_accrual->ambil_data_query_lengkap($keyword, $GPPchecked, $OPKchecked); // pass value to model fn
                $data['bulanmax'] = $this->Model_table_accrual->ambil_data_maxbulan($keyword);
            } else if (empty($this->input->post('GPPchecked')) && !empty($this->input->post('OPKchecked'))) {

                foreach ($this->input->post('OPKchecked') as $obj) {
                    $OPKchecked[] = $obj;
                }

                $data['ambilid'] = $this->Model_accrual->ambilid();

                $data['table'] = $this->Model_table_accrual->ambil_data_query_opk($keyword, $OPKchecked); // pass value to model fn
                $data['bulanmax'] = $this->Model_table_accrual->ambil_data_maxbulan($keyword);
            } else if (!empty($this->input->post('semuaGPP')) && !empty($this->input->post('OPKchecked'))) {

                foreach ($this->input->post('OPKchecked') as $obj) {
                    $OPKchecked[] = $obj;
                }

                $data['ambilid'] = $this->Model_accrual->ambilid();

                $data['table'] = $this->Model_table_accrual->ambil_data_query_opk($keyword, $OPKchecked); // pass value to model fn
                $data['bulanmax'] = $this->Model_table_accrual->ambil_data_maxbulan($keyword);
            } else if (!empty($this->input->post('semuaGPP')) && !empty($this->input->post('semuaOPK'))) {

                $data['ambilid'] = $this->Model_accrual->ambilid();
                $data['table'] = $this->Model_table_accrual->ambil_data($keyword);
                $data['bulanmax'] = $this->Model_table_accrual->ambil_data_maxbulan($keyword);
            } else if (!empty($this->input->post('GPPchecked')) && !empty($this->input->post('semuaOPK'))) {

                foreach ($this->input->post('GPPchecked') as $obj) {
                    $GPPchecked[] = $obj;
                }

                $data['ambilid'] = $this->Model_accrual->ambilid();

                $data['table'] = $this->Model_table_accrual->ambil_data_query($keyword, $GPPchecked); // pass value to model fn
                $data['bulanmax'] = $this->Model_table_accrual->ambil_data_maxbulan($keyword);
            } else {

                $data['ambilid'] = $this->Model_accrual->ambilid();
                $data['table'] = $this->Model_table_accrual->ambil_data($keyword);
                $data['bulanmax'] = $this->Model_table_accrual->ambil_data_maxbulan($keyword);
            }
        } else if (!empty($this->input->post('Month')) && ($this->input->post('Month') != "00")) {

            $Monthchecked[] = $this->input->post('Month');

            // MULAI
            if (!empty($this->input->post('GPPchecked')) && !empty($this->input->post('OPKchecked'))) {

                foreach ($this->input->post('GPPchecked') as $obj) {
                    $GPPchecked[] = $obj;
                }

                foreach ($this->input->post('OPKchecked') as $obj) {
                    $OPKchecked[] = $obj;
                }

                $data['ambilid'] = $this->Model_accrual->ambilid();

                $data['table'] = $this->Model_table_accrual->ambil_data_query_lengkap_bulan($keyword, $GPPchecked, $OPKchecked, $Monthchecked); // pass value to model fn
                $data['bulanmax'] = $this->Model_table_accrual->ambil_data_maxbulan_perbulan($keyword, $Monthchecked);
            } else if (empty($this->input->post('GPPchecked')) && !empty($this->input->post('OPKchecked'))) {

                foreach ($this->input->post('OPKchecked') as $obj) {
                    $OPKchecked[] = $obj;
                }

                $data['ambilid'] = $this->Model_accrual->ambilid();

                $data['table'] = $this->Model_table_accrual->ambil_data_query_opk_bulan($keyword, $OPKchecked, $Monthchecked); // pass value to model fn
                $data['bulanmax'] = $this->Model_table_accrual->ambil_data_maxbulan_perbulan($keyword, $Monthchecked);
            } else if (!empty($this->input->post('semuaGPP')) && !empty($this->input->post('OPKchecked'))) {

                foreach ($this->input->post('OPKchecked') as $obj) {
                    $OPKchecked[] = $obj;
                }

                $data['ambilid'] = $this->Model_accrual->ambilid();

                $data['table'] = $this->Model_table_accrual->ambil_data_query_opk_bulan($keyword, $OPKchecked, $Monthchecked); // pass value to model fn
                $data['bulanmax'] = $this->Model_table_accrual->ambil_data_maxbulan_perbulan($keyword, $Monthchecked);
            } else if (!empty($this->input->post('semuaGPP')) && !empty($this->input->post('semuaOPK'))) {

                $data['ambilid'] = $this->Model_accrual->ambilid();

                $data['table'] = $this->Model_table_accrual->ambil_data_bulan($keyword, $Monthchecked);
                $data['bulanmax'] = $this->Model_table_accrual->ambil_data_maxbulan_perbulan($keyword, $Monthchecked);
            } else if (!empty($this->input->post('GPPchecked')) && !empty($this->input->post('semuaOPK'))) {

                foreach ($this->input->post('GPPchecked') as $obj) {
                    $GPPchecked[] = $obj;
                }

                $data['ambilid'] = $this->Model_accrual->ambilid();

                $data['table'] = $this->Model_table_accrual->ambil_data_query_bulan($keyword, $GPPchecked, $Monthchecked); // pass value to model fn
                $data['bulanmax'] = $this->Model_table_accrual->ambil_data_maxbulan_perbulan($keyword, $Monthchecked);
            } else {

                $data['ambilid'] = $this->Model_accrual->ambilid();

                $data['table'] = $this->Model_table_accrual->ambil_data_bulan($keyword, $Monthchecked);
                $data['bulanmax'] = $this->Model_table_accrual->ambil_data_maxbulan_perbulan($keyword, $Monthchecked);
            }

            // END
        } else {

            $data['ambilid'] = $this->Model_accrual->ambilid();

            $data['table'] = $this->Model_table_accrual->ambil_data($keyword);
            $data['bulanmax'] = $this->Model_table_accrual->ambil_data_maxbulan($keyword);
        }

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

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('operasional/accrual_baru', $data);
        $this->load->view('templates/footer', $data);
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
        $bulan = $dataBulan;

        $spreadsheet = new Spreadsheet;

        $spreadsheet->setActiveSheetIndex(0)
            ->setCellValue('A1', 'No')
            ->setCellValue('B1', 'Nomor Sertifikat')
            ->setCellValue('C1', 'Nama Terjamin')
            ->setCellValue('D1', 'Tanggal Akad')
            ->setCellValue('E1', 'Jangka Waktu(Bulan)')
            ->setCellValue('F1', 'Tanggal Selesai')
            ->setCellValue('G1', 'Premi')
            ->setCellValue('H1', 'Angsuran / Bulan')
        // looping abcnya aja angkanya sih engga
            ->setcellValue('I1', '2021-Jan');

        $kolom = 2;
        $nomor = 1;
        if (!is_array($table_result || is_array($table_result))) {

        }
    }
}

?>
