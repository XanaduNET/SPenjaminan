<?php

defined('BASEPATH') or exit('No direct script access allowed');
require './application/third_party/phpoffice/vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

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
        $clickEvent = 0;
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

        $this->load->view('template/header', $data);
        $this->load->view('template/header_body', $data);
        $this->load->view('template/right_sidebar', $data);
        $this->load->view('template/left_sidebar', $data);
        $this->load->view('operasional/accrual_baru', $data);
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
        $bulanmax = $dataBulan;

        $alphabet = 'J';
        $alphabet2 = 'J';
        $spreadsheet = new Spreadsheet;
        $nomor = 1;
        $kolom = 2;

        $spreadsheet->setActiveSheetIndex(0)
            ->setCellValue('A1', 'No')
            ->setCellValue('B1', 'Bank x')
            ->setCellValue('C1', 'Nomor Sertifikat')
            ->setCellValue('D1', 'Nama Terjamin')
            ->setCellValue('E1', 'Tanggal Akad')
            ->setCellValue('F1', 'Jangka Waktu (Bulan)')
            ->setCellValue('G1', 'Tanggal Selesai')
            ->setCellValue('H1', 'Premi')
            ->setCellValue('I1', 'Angsuran / Bulan');

        // looping abcnya aja angkanya sih engga

        foreach ($bulanmax as $u) {
            $tglawal = date($u->DJPDtanggalawal);
            $date1 = $tglawal;
            $date2 = $u->DJPDtanggalakhir;

            $ts1 = strtotime($date1);
            $ts2 = strtotime($date2);

            $year1 = date('Y', $ts1);
            $year2 = date('Y', $ts2);

            $month1 = date('m', $ts1);
            $month2 = date('m', $ts2);

            $diff = (($year2 - $year1) * 12) + ($month2 - $month1);

            $flagtanggal = $u->DJPDjangkawaktu + $diff;

            for ($i = 0; $i <= $flagtanggal; $i++, ++$alphabet) {
                $tglakhir = date('Y-M', strtotime('+ ' . $i . 'month', strtotime($tglawal)));
                $spreadsheet->setActiveSheetIndex(0)->setcellValue($alphabet . "1", $tglakhir);
            }

        }

        // end looping

        foreach ($table_result as $u) {
            $spreadsheet->setActiveSheetIndex(0)
                ->setCellValue('A' . $kolom, $nomor)
                ->setCellValue('B' . $kolom, $u->PPnama)
                ->setCellValue('C' . $kolom, $u->DJPnoreg)
                ->setCellValue('D' . $kolom, $u->TRJMnama)
                ->setCellValue('E' . $kolom, $u->DJPDtanggalakad)
                ->setCellValue('F' . $kolom, $u->DJPDjangkawaktu)
                ->setCellValue('G' . $kolom, $u->DJPDtanggalakhir)
                ->setCellValue('H' . $kolom, "Rp." . number_format($u->DJPDimbaljasa, 0, ".", "."))
                ->setCellValue('I' . $kolom, "Rp." . number_format($angsuran = (int) ($u->DJPDimbaljasa / $u->DJPDjangkawaktu), 0, ".", "."));
            foreach ($bulanmax as $y) {
                $tglawal = date($y->DJPDtanggalawal);
            }
            for ($i = 0; $i <= $u->DJPDjangkawaktu; $i++) {
                $time = strtotime($u->DJPDtanggalawal);
                $newtime = date('Y-M', $time);
                $tglakhir = date('Y-M', strtotime('+ ' . $i . 'month', strtotime($tglawal)));

                if ($newtime == $tglakhir) {

                    for ($i = 0; $i <= $u->DJPDjangkawaktu; $i++) {
                        $spreadsheet->setActiveSheetIndex(0)->setCellValue($alphabet2 . $kolom, "Rp." . number_format($angsuran = (int) ($u->DJPDimbaljasa / $u->DJPDjangkawaktu), 0, ".", "."));

                        ++$alphabet2;
                    }
                } else {
                    $spreadsheet->setActiveSheetIndex(0)->setCellValue($alphabet2 . $kolom, "-");

                    $cells = $alphabet2 . $kolom;
                    $spreadsheet
                        ->getActiveSheet()
                        ->getStyle($cells)
                        ->getFill()
                        ->setFillType(\PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID)
                        ->getStartColor('FFCCCC')
                        ->setARGB('FFCCCC');

                    ++$alphabet2;
                }

            }
            $kolom++;
            $nomor++;
            $alphabet2 = 'J';
        }
        $writer = new Xlsx($spreadsheet);
        ob_end_clean();
        header('Content-Type: application/vnd.ms-excel');
        header('Content-Disposition: attachment;filename="Hello.xls"');
        header('Cache-Control: max-age=0');
        $writer->save('php://output');

    }

}
