<?php

defined('BASEPATH') or exit('No direct script access allowed');
require './application/third_party/phpoffice/vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

class Rekap extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Model_table');
        $this->load->model('Model_rekap');
    }

    public function index()
    {
        $clickEvent = 0;
        $OPKchecked = array();
        $GPPchecked = array();
        $Monthchecked = array();
        $halaman = "Rekap";

        if (!empty($this->input->post('semuaMonth'))) {

            if (!empty($this->input->post('GPPchecked')) && !empty($this->input->post('OPKchecked'))) {

                foreach ($this->input->post('GPPchecked') as $obj) {
                    $GPPchecked[] = $obj;
                }

                foreach ($this->input->post('OPKchecked') as $obj) {
                    $OPKchecked[] = $obj;
                }

                $keyword = $this->input->post('keyword');
                $data['ambilid'] = $this->Model_rekap->ambilid();

                $data['table'] = $this->Model_table->ambil_data_query_lengkap($keyword, $GPPchecked, $OPKchecked, $halaman); // pass value to model fn

            } else if (empty($this->input->post('GPPchecked')) && !empty($this->input->post('OPKchecked'))) {

                foreach ($this->input->post('OPKchecked') as $obj) {
                    $OPKchecked[] = $obj;
                }

                $keyword = $this->input->post('keyword');
                $data['ambilid'] = $this->Model_rekap->ambilid();

                $data['table'] = $this->Model_table->ambil_data_query_opk($keyword, $OPKchecked, $halaman); // pass value to model fn

            } else if (!empty($this->input->post('semuaGPP')) && !empty($this->input->post('OPKchecked'))) {

                foreach ($this->input->post('OPKchecked') as $obj) {
                    $OPKchecked[] = $obj;
                }

                $keyword = $this->input->post('keyword');
                $data['ambilid'] = $this->Model_rekap->ambilid();

                $data['table'] = $this->Model_table->ambil_data_query_opk($keyword, $OPKchecked, $halaman); // pass value to model fn

            } else if (!empty($this->input->post('semuaGPP')) && !empty($this->input->post('semuaOPK'))) {

                $keyword = $this->input->post('keyword');
                $data['ambilid'] = $this->Model_rekap->ambilid();
                $data['table'] = $this->Model_table->ambil_data($keyword, $halaman);

            } else if (!empty($this->input->post('GPPchecked')) && !empty($this->input->post('semuaOPK'))) {

                foreach ($this->input->post('GPPchecked') as $obj) {
                    $GPPchecked[] = $obj;
                }

                $keyword = $this->input->post('keyword');
                $data['ambilid'] = $this->Model_rekap->ambilid();

                $data['table'] = $this->Model_table->ambil_data_query($keyword, $GPPchecked, $halaman); // pass value to model fn

            } else {

                $keyword = $this->input->post('keyword');
                $data['ambilid'] = $this->Model_rekap->ambilid();
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
                $data['ambilid'] = $this->Model_rekap->ambilid();

                $data['table'] = $this->Model_table->ambil_data_query_lengkap_bulan($keyword, $GPPchecked, $OPKchecked, $Monthchecked, $halaman); // pass value to model fn

            } else if (empty($this->input->post('GPPchecked')) && !empty($this->input->post('OPKchecked'))) {

                foreach ($this->input->post('OPKchecked') as $obj) {
                    $OPKchecked[] = $obj;
                }

                $keyword = $this->input->post('keyword');
                $data['ambilid'] = $this->Model_rekap->ambilid();

                $data['table'] = $this->Model_table->ambil_data_query_opk_bulan($keyword, $OPKchecked, $Monthchecked, $halaman); // pass value to model fn

            } else if (!empty($this->input->post('semuaGPP')) && !empty($this->input->post('OPKchecked'))) {

                foreach ($this->input->post('OPKchecked') as $obj) {
                    $OPKchecked[] = $obj;
                }

                $keyword = $this->input->post('keyword');
                $data['ambilid'] = $this->Model_rekap->ambilid();

                $data['table'] = $this->Model_table->ambil_data_query_opk_bulan($keyword, $OPKchecked, $Monthchecked, $halaman); // pass value to model fn

            } else if (!empty($this->input->post('semuaGPP')) && !empty($this->input->post('semuaOPK'))) {

                $keyword = $this->input->post('keyword');
                $data['ambilid'] = $this->Model_rekap->ambilid();

                $data['table'] = $this->Model_table->ambil_data_bulan($keyword, $Monthchecked, $halaman);

            } else if (!empty($this->input->post('GPPchecked')) && !empty($this->input->post('semuaOPK'))) {

                foreach ($this->input->post('GPPchecked') as $obj) {
                    $GPPchecked[] = $obj;
                }

                $keyword = $this->input->post('keyword');
                $data['ambilid'] = $this->Model_rekap->ambilid();

                $data['table'] = $this->Model_table->ambil_data_query_bulan($keyword, $GPPchecked, $Monthchecked, $halaman); // pass value to model fn

            } else {
                $keyword = $this->input->post('keyword');
                $data['ambilid'] = $this->Model_rekap->ambilid();

                $data['table'] = $this->Model_table->ambil_data_bulan($keyword, $Monthchecked, $halaman);

            }

            // END
        } else {

            $keyword = $this->input->post('keyword');
            $data['ambilid'] = $this->Model_rekap->ambilid();

            $data['table'] = $this->Model_table->ambil_data($keyword, $halaman);

        }

        $data['title'] = 'Laporan Bulanan';
        $data['user'] = $this->db->get_where('user', ['nama' => $this->session->userdata('nama')])->row_array();
        $data['gpp'] = $this->Model_table->getGPP();
        $data['opk'] = $this->Model_table->getOPK();

        $data['menu'] = $this->db->get('user_menu')->result_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('operasional/rekap', $data);
        $this->load->view('templates/footer');

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
        $table_result2 = $this->Model_table->ambil_data($keyword);

        $spreadsheet = new Spreadsheet;

        $spreadsheet->setActiveSheetIndex(0)
            ->setCellValue('A1', 'NO')
            ->setCellValue('B1', 'CBG/CAPEM/KEDAI')
            ->setCellValue('C1', 'NO SERTIFIKAT')
            ->setCellValue('D1', 'TANGGAL SERTIFIKAT')
            ->setCellValue('E1', 'JUMLAH TERJAMIN')
            ->setCellValue('F1', 'NAMA TERJAMIN')
            ->setCellValue('G1', 'COVERAGE')
            ->setCellValue('H1', 'PLAFOND KREDIT')
            ->setCellValue('I1', 'JUMLAH JAMINAN')
            ->setCellValue('J1', 'JANGKA WAKTU')
            ->setCellValue('K1', '')
            ->setCellValue('L1', 'BULAN')
            ->setCellValue('M1', 'TARIF')
            ->setCellValue('N1', 'BIAYA PENJAMINAN')
            ->setCellValue('O1', '')
            ->setCellValue('P1', '')
            ->setCellValue('Q1', 'TOTAL')
            ->setCellValue('R1', 'FEE BANK')
            ->setCellValue('S1', 'TOTAL PENDAPATAN')
            ->mergeCells('J1:K1')
            ->mergeCells('N1:P1');

        $kolom = 2;
        $nomor = 1;
        $DJPnoreg = "";
        $flag = 1;
        if (!is_array($table_result) || is_array($table_result)) {
            foreach ($table_result as $u) {

                if ($u->DJPnoreg != $DJPnoreg) {
                    $spreadsheet->setActiveSheetIndex(0)
                        ->setCellValue('A' . $kolom, $nomor)
                        ->setCellValue('B' . $kolom, $u->PPnama)
                        ->setCellValue('C' . $kolom, $u->DJPnoreg)
                        ->setCellValue('D' . $kolom, $u->DJPtanggalverif)
                        ->setCellValue('E' . $kolom, 1)
                        ->setCellValue('F' . $kolom, $u->TRJMnama)
                        ->setCellValue('G' . $kolom, $u->DJPDcoverage)
                        ->setCellValue('H' . $kolom, "Rp." . number_format($u->DJPDplafondkredit, 0, ".", "."))
                        ->setCellValue('I' . $kolom, "Rp." . number_format($u->DJPDnilaipenjaminan, 0, ".", "."))
                        ->setCellValue('J' . $kolom, date('j F Y', strtotime($u->DJPDtanggalawal)))
                        ->setCellValue('K' . $kolom, date('j F Y', strtotime($u->DJPDtanggalakhir)))
                        ->setCellValue('L' . $kolom, $u->DJPDjangkawaktu)
                        ->setCellValue('M' . $kolom, $u->DJPDrate . "%")
                        ->setCellValue('N' . $kolom, "Rp." . number_format($u->DJPDimbaljasa, 0, ".", "."))
                        ->setCellValue('O' . $kolom, "Rp." . number_format($u->DJPfeeadmin, 0, ".", "."))
                        ->setCellValue('P' . $kolom, "Rp." . number_format($u->DJPfeematerai, 0, ".", "."))
                        ->setCellValue('Q' . $kolom, "Rp." . number_format((int) ($u->DJPDimbaljasa + $u->DJPfeeadmin + $u->DJPfeematerai), 0, ".", "."))
                        ->setCellValue('R' . $kolom, "Rp." . number_format((int) (($u->DJPDimbaljasa + $u->DJPfeeadmin + $u->DJPfeematerai) * (((int) $u->PKSratefee / 100))), 0, ".", "."))
                        ->setCellValue('S' . $kolom, "Rp." . number_format((int) (($u->DJPDimbaljasa + $u->DJPfeeadmin + $u->DJPfeematerai) - ((int) (($u->DJPDimbaljasa + $u->DJPfeeadmin + $u->DJPfeematerai) * (((int) $u->PKSratefee / 100))))), 0, ".", "."));
                    $kolom++;

                    if ($flag == $u->DJPjumlahpk) {
                        $spreadsheet->setActiveSheetIndex(0)
                            ->setCellValue('A' . $kolom, "")
                            ->setCellValue('B' . $kolom, "TOTAL")
                            ->setCellValue('C' . $kolom, "")
                            ->setCellValue('D' . $kolom, "")
                            ->setCellValue('E' . $kolom, $u->DJPjumlahpk)
                            ->setCellValue('F' . $kolom, "")
                            ->setCellValue('G' . $kolom, "")
                            ->setCellValue('H' . $kolom, "Rp." . number_format($u->DJPjumlahnilaipk, 0, ".", "."))
                            ->setCellValue('I' . $kolom, "Rp." . number_format($u->DJPnilaipenjaminan, 0, ".", "."))
                            ->setCellValue('J' . $kolom, "")
                            ->setCellValue('K' . $kolom, "")
                            ->setCellValue('L' . $kolom, "")
                            ->setCellValue('M' . $kolom, "")
                            ->setCellValue('N' . $kolom, "Rp." . number_format($u->DJPjumlahimbaljasa, 0, ".", "."))
                            ->setCellValue('O' . $kolom, "Rp." . number_format($u->DJPfeeadmin, 0, ".", "."))
                            ->setCellValue('P' . $kolom, "Rp." . number_format($u->DJPfeematerai, 0, ".", "."))
                            ->setCellValue('Q' . $kolom, "Rp." . number_format($u->DJPjumlahimbaljasa, 0, ".", "."))
                            ->setCellValue('R' . $kolom, "Rp." . number_format($u->DJPfeebank, 0, ".", "."))
                            ->setCellValue('S' . $kolom, "Rp." . number_format($u->DJPjumlahbiaya, 0, ".", "."));

                        $flag = 0;
                        $kolom++;
                    }

                    $nomor++;

                } else {
                    $spreadsheet->setActiveSheetIndex(0)
                        ->setCellValue('A' . $kolom, "")
                        ->setCellValue('B' . $kolom, "")
                        ->setCellValue('C' . $kolom, "")
                        ->setCellValue('D' . $kolom, "")
                        ->setCellValue('E' . $kolom, 1)
                        ->setCellValue('F' . $kolom, $u->TRJMnama)
                        ->setCellValue('G' . $kolom, $u->DJPDcoverage)
                        ->setCellValue('H' . $kolom, "Rp." . number_format($u->DJPDplafondkredit, 0, ".", "."))
                        ->setCellValue('I' . $kolom, "Rp." . number_format($u->DJPDnilaipenjaminan, 0, ".", "."))
                        ->setCellValue('J' . $kolom, date('j F Y', strtotime($u->DJPDtanggalawal)))
                        ->setCellValue('K' . $kolom, date('j F Y', strtotime($u->DJPDtanggalakhir)))
                        ->setCellValue('L' . $kolom, $u->DJPDjangkawaktu)
                        ->setCellValue('M' . $kolom, $u->DJPDrate . "%")
                        ->setCellValue('N' . $kolom, "Rp." . number_format($u->DJPDimbaljasa, 0, ".", "."))
                        ->setCellValue('O' . $kolom, "Rp." . number_format($u->DJPfeeadmin, 0, ".", "."))
                        ->setCellValue('P' . $kolom, "Rp." . number_format($u->DJPfeematerai, 0, ".", "."))
                        ->setCellValue('Q' . $kolom, "Rp." . number_format((int) ($u->DJPDimbaljasa + $u->DJPfeeadmin + $u->DJPfeematerai), 0, ".", "."))
                        ->setCellValue('R' . $kolom, "Rp." . number_format((int) (($u->DJPDimbaljasa + $u->DJPfeeadmin + $u->DJPfeematerai) * (((int) $u->PKSratefee / 100))), 0, ".", "."))
                        ->setCellValue('S' . $kolom, "Rp." . number_format((int) (($u->DJPDimbaljasa + $u->DJPfeeadmin + $u->DJPfeematerai) - ((int) (($u->DJPDimbaljasa + $u->DJPfeeadmin + $u->DJPfeematerai) * (((int) $u->PKSratefee / 100))))), 0, ".", "."));
                    $kolom++;
                    if ($flag == $u->DJPjumlahpk) {
                        $spreadsheet->setActiveSheetIndex(0)
                            ->setCellValue('A' . $kolom, "")
                            ->setCellValue('B' . $kolom, "TOTAL")
                            ->setCellValue('C' . $kolom, "")
                            ->setCellValue('D' . $kolom, "")
                            ->setCellValue('E' . $kolom, $u->DJPjumlahpk)
                            ->setCellValue('F' . $kolom, "")
                            ->setCellValue('G' . $kolom, "")
                            ->setCellValue('H' . $kolom, "Rp." . number_format($u->DJPjumlahnilaipk, 0, ".", "."))
                            ->setCellValue('I' . $kolom, "Rp." . number_format($u->DJPnilaipenjaminan, 0, ".", "."))
                            ->setCellValue('J' . $kolom, "")
                            ->setCellValue('K' . $kolom, "")
                            ->setCellValue('L' . $kolom, "")
                            ->setCellValue('M' . $kolom, "")
                            ->setCellValue('N' . $kolom, "Rp." . number_format($u->DJPjumlahimbaljasa, 0, ".", "."))
                            ->setCellValue('O' . $kolom, "Rp." . number_format($u->DJPfeeadmin, 0, ".", "."))
                            ->setCellValue('P' . $kolom, "Rp." . number_format($u->DJPfeematerai, 0, ".", "."))
                            ->setCellValue('Q' . $kolom, "Rp." . number_format($u->DJPjumlahimbaljasa, 0, ".", "."))
                            ->setCellValue('R' . $kolom, "Rp." . number_format($u->DJPfeebank, 0, ".", "."))
                            ->setCellValue('S' . $kolom, "Rp." . number_format($u->DJPjumlahbiaya, 0, ".", "."));

                        $flag = 0;
                        $kolom++;

                    }

                }$DJPnoreg = $u->DJPnoreg;
                $flag += 1;

            }
            $date = date("d-m-Y");
            $bulan = date("m");
            $namauser = $this->db->get_where('user', ['nama' => $this->session->userdata('nama')])->row_array();

            $log = "User: " . $_SERVER['REMOTE_ADDR'] . ' - ' . date("F j, Y, H:i:s") . PHP_EOL .
                "Attempt: " . ("Success Export Laporan Bulanan") . PHP_EOL .
                "User: " . $namauser['nama'] . PHP_EOL .
                "Aksi: " . ('Operasional Laporan Bulanan') . PHP_EOL .
                "-------------------------" . PHP_EOL;
            //-
            file_put_contents('logfile/' . $bulan . '/logfile' . $date . '/log_' . date("j.n.Y") . '.txt', $log, FILE_APPEND);

            $writer = new Xlsx($spreadsheet);
            header('Content-Type: application/vnd.ms-excel');
            header('Content-Disposition: attachment;filename="Laporan Bulanan.xls"');
            header('Cache-Control: max-age=0');
            $writer->save('php://output');

        }

    }

}
