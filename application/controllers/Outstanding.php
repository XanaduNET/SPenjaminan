<?php

defined('BASEPATH') or exit('No direct script access allowed');
require './application/third_party/phpoffice/vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

class Outstanding extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Model_outstanding');
        $this->load->model('Model_table');

    }

    public function index()
    {
        $clickEvent = 0;
        $OPKchecked = array();
        $GPPchecked = array();
        $Monthchecked = array();
        $halaman = "Accrual";

        if (!empty($this->input->post('semuaMonth'))) {

            if (!empty($this->input->post('GPPchecked')) && !empty($this->input->post('OPKchecked'))) {

                foreach ($this->input->post('GPPchecked') as $obj) {
                    $GPPchecked[] = $obj;
                }

                foreach ($this->input->post('OPKchecked') as $obj) {
                    $OPKchecked[] = $obj;
                }

                $keyword = $this->input->post('keyword');
                $data['ambilid'] = $this->Model_outstanding->ambilid();

                $data['table'] = $this->Model_table->ambil_data_query_lengkap($keyword, $GPPchecked, $OPKchecked, $halaman); // pass value to model fn

            } else if (empty($this->input->post('GPPchecked')) && !empty($this->input->post('OPKchecked'))) {

                foreach ($this->input->post('OPKchecked') as $obj) {
                    $OPKchecked[] = $obj;
                }

                $keyword = $this->input->post('keyword');
                $data['ambilid'] = $this->Model_outstanding->ambilid();

                $data['table'] = $this->Model_table->ambil_data_query_opk($keyword, $OPKchecked, $halaman); // pass value to model fn

            } else if (!empty($this->input->post('semuaGPP')) && !empty($this->input->post('OPKchecked'))) {

                foreach ($this->input->post('OPKchecked') as $obj) {
                    $OPKchecked[] = $obj;
                }

                $keyword = $this->input->post('keyword');
                $data['ambilid'] = $this->Model_outstanding->ambilid();

                $data['table'] = $this->Model_table->ambil_data_query_opk($keyword, $OPKchecked, $halaman); // pass value to model fn

            } else if (!empty($this->input->post('semuaGPP')) && !empty($this->input->post('semuaOPK'))) {

                $keyword = $this->input->post('keyword');
                $data['ambilid'] = $this->Model_outstanding->ambilid();
                $data['table'] = $this->Model_table->ambil_data($keyword, $halaman);

            } else if (!empty($this->input->post('GPPchecked')) && !empty($this->input->post('semuaOPK'))) {

                foreach ($this->input->post('GPPchecked') as $obj) {
                    $GPPchecked[] = $obj;
                }

                $keyword = $this->input->post('keyword');
                $data['ambilid'] = $this->Model_outstanding->ambilid();

                $data['table'] = $this->Model_table->ambil_data_query($keyword, $GPPchecked, $halaman); // pass value to model fn

            } else {

                $keyword = $this->input->post('keyword');
                $data['ambilid'] = $this->Model_outstanding->ambilid();
                $data['table'] = $this->Model_table->ambil_data($keyword, $halaman);

            }
        } else if (!empty($this->input->post('Monthchecked'))) {

            foreach ($this->input->post('Monthchecked') as $obj) {
                $Monthchecked[] = $obj;

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
                $data['ambilid'] = $this->Model_outstanding->ambilid();

                $data['table'] = $this->Model_table->ambil_data_query_lengkap_bulan($keyword, $GPPchecked, $OPKchecked, $Monthchecked, $halaman); // pass value to model fn

            } else if (empty($this->input->post('GPPchecked')) && !empty($this->input->post('OPKchecked'))) {

                foreach ($this->input->post('OPKchecked') as $obj) {
                    $OPKchecked[] = $obj;
                }

                $keyword = $this->input->post('keyword');
                $data['ambilid'] = $this->Model_outstanding->ambilid();

                $data['table'] = $this->Model_table->ambil_data_query_opk_bulan($keyword, $OPKchecked, $Monthchecked, $halaman); // pass value to model fn

            } else if (!empty($this->input->post('semuaGPP')) && !empty($this->input->post('OPKchecked'))) {

                foreach ($this->input->post('OPKchecked') as $obj) {
                    $OPKchecked[] = $obj;
                }

                $keyword = $this->input->post('keyword');
                $data['ambilid'] = $this->Model_outstanding->ambilid();

                $data['table'] = $this->Model_table->ambil_data_query_opk_bulan($keyword, $OPKchecked, $Monthchecked, $halaman); // pass value to model fn

            } else if (!empty($this->input->post('semuaGPP')) && !empty($this->input->post('semuaOPK'))) {

                $keyword = $this->input->post('keyword');
                $data['ambilid'] = $this->Model_outstanding->ambilid();

                $data['table'] = $this->Model_table->ambil_data_bulan($keyword, $Monthchecked, $halaman, $halaman);

            } else if (!empty($this->input->post('GPPchecked')) && !empty($this->input->post('semuaOPK'))) {

                foreach ($this->input->post('GPPchecked') as $obj) {
                    $GPPchecked[] = $obj;
                }

                $keyword = $this->input->post('keyword');
                $data['ambilid'] = $this->Model_outstanding->ambilid();

                $data['table'] = $this->Model_table->ambil_data_query_bulan($keyword, $GPPchecked, $Monthchecked, $halaman); // pass value to model fn

            } else {
                $keyword = $this->input->post('keyword');
                $data['ambilid'] = $this->Model_outstanding->ambilid();

                $data['table'] = $this->Model_table->ambil_data_bulan($keyword, $Monthchecked, $halaman);

            }

            // END
        } else {

            $keyword = $this->input->post('keyword');
            $data['ambilid'] = $this->Model_outstanding->ambilid();
            $data['table'] = $this->Model_table->ambil_data($keyword, $halaman);
        }

        $data['title'] = 'Outstanding';
        $data['user'] = $this->db->get_where('user', ['nama' => $this->session->userdata('nama')])->row_array();

        $data['gpp'] = $this->Model_table->getGPP();
        $data['opk'] = $this->Model_table->getOPK();

        $data['menu'] = $this->db->get('user_menu')->result_array();

        $this->load->view('template/header', $data);
        $this->load->view('template/header_body', $data);
        $this->load->view('template/right_sidebar', $data);
        $this->load->view('template/left_sidebar', $data);
        $this->load->view('operasional/outstanding', $data);
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
            $dataTable = json_decode(htmlspecialchars_decode($data, true));
            $this->export($dataTable);
        } else {

        }
    }

    public function export($dataTable)
    {
        $keyword = "";
        $table_result = $dataTable;

        $spreadsheet = new Spreadsheet;

        $spreadsheet->setActiveSheetIndex(0)
            ->setCellValue('A1', 'NO')
            ->setCellValue('B1', 'TANGGAL')
            ->setCellValue('C1', 'CABANG')
            ->setCellValue('D1', 'NASABAH')
            ->setCellValue('E1', 'ALAMAT')
            ->setCellValue('F1', 'PENGGUNAAN KREDIT')
            ->setCellValue('G1', 'PLAFOND KREDIT')
            ->setCellValue('H1', 'COVERAGE PENJAMINAN (%)')
            ->setCellValue('I1', 'NILAI PENJAMINAN')
            ->setCellValue('J1', 'SUKU BUNGA (BULAN)')
            ->setCellValue('K1', 'JANGKA WAKTU (BULAN)')
            ->setCellValue('L1', 'TANGGAL')
            ->setCellValue('M1', '')
            ->setCellValue('N1', 'TARIF')
            ->setCellValue('O1', 'IJP/PREMI')
            ->setCellValue('P1', 'FEE BASE')
            ->setCellValue('Q1', 'IJP - NET')
            ->setCellValue('R1', '')
            ->setCellValue('S1', 'NOMOR SERTIFIKAT PENJAMINAN')
            ->setCellValue('T1', 'LAMA KREDIT JALAN')
            ->setCellValue('U1', 'TAKSASI CICILAN (Rp.)')
            ->setCellValue('V1', 'TAKSASI O/s KREDIT (Rp.)')
            ->setCellValue('L2', 'REALISASI')
            ->setCellValue('M2', 'JATUH TEMPO')
            ->setCellValue('O2', 'Rp')

            ->mergeCells('L1:M1');

        $kolom = 3;
        $nomor = 1;
        $DJPnoreg = "";
        $flag = 1;
        if (!is_array($table_result) || is_array($table_result)) {
            foreach ($table_result as $u) {
                $date1 = $u->DJPDtanggalakad;
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

                $spreadsheet->setActiveSheetIndex(0)
                    ->setCellValue('A' . $kolom, $nomor)
                    ->setCellValue('B' . $kolom, $u->DJPDtanggalakad)
                    ->setCellValue('C' . $kolom, $u->PPnama)
                    ->setCellValue('D' . $kolom, $u->TRJMnama)
                    ->setCellValue('E' . $kolom, " ")
                    ->setCellValue('F' . $kolom, " ")
                    ->setCellValue('G' . $kolom, $u->DJPDplafondkredit)
                    ->setCellValue('H' . $kolom, $u->DJPDcoverage)
                    ->setCellValue('I' . $kolom, $u->DJPDnilaipenjaminan)
                    ->setCellValue('J' . $kolom, " ")
                    ->setCellValue('K' . $kolom, $u->DJPDjangkawaktu)
                    ->setCellValue('L' . $kolom, $u->DJPDtanggalawal)
                    ->setCellValue('M' . $kolom, $u->DJPDtanggalakhir)
                    ->setCellValue('N' . $kolom, $u->DJPDrate . "%")
                    ->setCellValue('O' . $kolom, $u->DJPDimbaljasa)
                    ->setCellValue('P' . $kolom, (int) (($u->DJPDimbaljasa + $u->DJPfeeadmin + $u->DJPfeematerai) * (((int) $u->PKSratefee / 100))))
                    ->setCellValue('Q' . $kolom, (int) (($u->DJPDimbaljasa + $u->DJPfeeadmin + $u->DJPfeematerai) - ((int) (($u->DJPDimbaljasa + $u->DJPfeeadmin + $u->DJPfeematerai) * (((int) $u->PKSratefee / 100))))))
                    ->setCellValue('R' . $kolom, " ")
                    ->setCellValue('S' . $kolom, $u->DJPnoreg)
                    ->setCellValue('T' . $kolom, $diff)
                    ->setCellValue('U' . $kolom, $taksasi = ($u->DJPDnilaipenjaminan / $u->DJPDjangkawaktu * $diff))
                    ->setCellValue('V' . $kolom, $u->DJPDnilaipenjaminan - $taksasi);

                $kolom++;
                $nomor++;

            }

            $date = date("d-m-Y");
            $bulan = date("m");
            $namauser = $this->db->get_where('user', ['nama' => $this->session->userdata('nama')])->row_array();

            $log = "User: " . $_SERVER['REMOTE_ADDR'] . ' - ' . date("F j, Y, H:i:s") . PHP_EOL .
                "Attempt: " . ("Success Export Operasional") . PHP_EOL .
                "User: " . $namauser['nama'] . PHP_EOL .
                "Aksi: " . ('Operasional Operasional') . PHP_EOL .
                "-------------------------" . PHP_EOL;
            //-
            file_put_contents('logfile/' . $bulan . '/logfile' . $date . '/log_' . date("j.n.Y") . '.txt', $log, FILE_APPEND);

            $writer = new Xlsx($spreadsheet);
            header('Content-Type: application/vnd.ms-excel');
            header('Content-Disposition: attachment;filename="Outstanding.xls"');
            header('Cache-Control: max-age=0');
            $writer->save('php://output');

        }
    }
}
