<?php

defined('BASEPATH') or exit('No direct script access allowed');
require './application/third_party/phpoffice/vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

class Kur extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        $this->load->model('Model_kur');
        $this->load->helper('tgl_indo');
    }

    public function lapbul_bulan()
    {
        $Month = array();

        if ($this->input->post('Month') == "--") {

            $data['dataKur'] = $this->Model_kur->getAll();
        } else if (!empty($this->input->post('Month'))) {
            $Month[] = $this->input->post('Month');

            $data['dataKur'] = $this->Model_kur->getDataBulan($Month);
        } else {
            $data['dataKur'] = $this->Model_kur->getAll();
        }
        $data['title'] = 'Rekap Lapbul Bulan';
        $data['user'] = $this->db->get_where('user', ['nama' => $this->session->userdata('nama')])->row_array();

        $this->load->view('template/header', $data);
        $this->load->view('template/header_body', $data);
        $this->load->view('template/right_sidebar', $data);
        $this->load->view('template/left_sidebar', $data);
        $this->load->view('kur/lapbul_bulan', $data);
        $this->load->view('template/footer');
    }

    public function uploaddata()
    {
        include APPPATH . 'third_party/PHPExcel/PHPExcel.php';

        $config['upload_path'] = realpath('uploads');
        $config['allowed_types'] = 'xlsx|xls|csv';
        $config['max_size'] = '10000';
        $config['encrypt_name'] = true;

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('file')) {
            //upload gagal

            echo "<script>
            alert('<b> IMPORT GAGAL!! </b>');
            window.location.href='../kur/lapbul_bulan';
            </script>";

        } else {
            $data_upload = $this->upload->data();
            $excelreader = new PHPExcel_Reader_Excel2007();
            $loadexcel = $excelreader->load('uploads/' . $data_upload['file_name']);
            $sheet = $loadexcel->getActiveSheet()->toArray(null);
            $data = array();

            $numrow = 1;
            foreach ($sheet as $row) {
                array_push($data, array(
                    'nama' => $row['B'],
                    'alamat' => $row['C'],
                    'nomor_akad' => $row['D'],
                    'tanggal_akad' => $row['E'],
                    'tgl_jatuh_tempo' => $row['F'],
                    'nilai_akad' => $row['G'],
                    'nomor_penjaminan' => $row['H'],
                    'kode_cabang' => $row['I'],
                    'date_created' => time(),
                    'date_modified' => time(),
                    'status' => true,
                ));
            }
            $numrow++;
        }
        $this->db->insert_batch('tblkur', $data);
        unlink(realpath('uploads/' . $data_upload['file_name']));
        //upload success

        //redirect halaman
        $date = date("d-m-Y");
        $bulan = date("m");
        $namauser = $this->db->get_where('user', ['nama' => $this->session->userdata('nama')])->row_array();

        $log = "User: " . $_SERVER['REMOTE_ADDR'] . ' - ' . date("F j, Y, H:i:s") . PHP_EOL .
            "Attempt: " . ("Success Import Kur") . PHP_EOL .
            "User: " . $namauser['nama'] . PHP_EOL .
            "Aksi: " . ('Kur') . PHP_EOL .
            "-------------------------" . PHP_EOL;
        //-
        file_put_contents('logfile/' . $bulan . '/logfile' . $date . '/log_' . date("j.n.Y") . '.txt', $log, FILE_APPEND);

        echo "<script>
        alert('IMPORT BERHASIL!');
        window.location.href='../kur/lapbul_bulan';
        </script>";
    }

    public function aksi()
    {
        $file_mimes = array('application/octet-stream', 'application/vnd.ms-excel', 'application/x-csv', 'text/x-csv', 'text/csv', 'application/csv', 'application/excel', 'application/vnd.msexcel', 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');

        if (isset($_FILES['file']['name']) && in_array($_FILES['file']['type'], $file_mimes)) {

            $arr_file = explode('.', $_FILES['file']['name']);
            $extension = end($arr_file);

            if ('csv' == $extension) {
                $reader = new \PhpOffice\PhpSpreadsheet\Reader\Csv();
            } else {
                $reader = new \PhpOffice\PhpSpreadsheet\Reader\Xlsx();
            }

            $spreadsheet = $reader->load($_FILES['file']['tmp_name']);

            $sheetData = $spreadsheet->getActiveSheet()->toArray();

            for ($i = 1; $i < count($sheetData); $i++) {
                $nama = $sheetData[$i]['1'];
                $alamat = $sheetData[$i]['2'];
                $nomor_akad = $sheetData[$i]['3'];
                $tanggal_akad = $sheetData[$i]['4'];
                $tgl_jatuh_tempo = $sheetData[$i]['5'];
                $nilai_akad = $sheetData[$i]['6'];
                $nomor_penjaminan = $sheetData[$i]['7'];
                $kode_cabang = $sheetData[$i]['8'];
                $bulan = $sheetData[$i]['9'];
                $date_created = time();
                $date_modified = time();
                $status = 0;

                $ar = array(
                    'nama' => $nama,
                    'alamat' => $alamat,
                    'nomor_akad' => $nomor_akad,
                    'tanggal_akad' => $tanggal_akad,
                    'tgl_jatuh_tempo' => $tgl_jatuh_tempo,
                    'nilai_akad' => $nilai_akad,
                    'nomor_penjaminan' => $nomor_penjaminan,
                    'kode_cabang' => $kode_cabang,
                    'bulan' => $bulan,
                    'date_created' => $date_created,
                    'date_modified' => $date_modified,
                    'status' => $status,
                );
                $a = $this->Model_kur->get('tblkur', "nomor_penjaminan='$nomor_penjaminan'")->result_array();
                if (count($a) == 0) {

                    $date = date("d-m-Y");
                    $bulan = date("m");
                    $namauser = $this->db->get_where('user', ['nama' => $this->session->userdata('nama')])->row_array();

                    $log = "User: " . $_SERVER['REMOTE_ADDR'] . ' - ' . date("F j, Y, H:i:s") . PHP_EOL .
                        "Attempt: " . ("Success Tambah Data Kur") . PHP_EOL .
                        "User: " . $namauser['nama'] . PHP_EOL .
                        "Aksi: " . ('Kur') . PHP_EOL .
                        "-------------------------" . PHP_EOL;
                    //-
                    file_put_contents('logfile/' . $bulan . '/logfile' . $date . '/log_' . date("j.n.Y") . '.txt', $log, FILE_APPEND);

                    $this->Model_kur->insert('tblkur', $ar);

                    // Send Notifikasi Kadiv Operasional
                    $data = array(
                        'comment_subject' => 'Input Data Kur',
                        'comment_text' => "Data Kur Baru Berhasil Ditambahkan",
                        'comment_status' => 0,
                        'roleId_sender' => 3,
                        'roleId_receiver' => 3, // Kadiv Operasional
                    );
                    $this->db->insert('tbl_comments', $data);
                }

            }

        }

        echo "<script>
        alert('IMPORT BERHASIL!');
        window.location.href='='../kur/lapbul_bulan';
        </script>";
    }
    public function lapbul()
    {

        if ($this->input->post('Year') == "--") {

            $data['dataKur'] = $this->Model_kur->getAll();
        } else if (!empty($this->input->post('Year'))) {
            $Year = $this->input->post('Year');

            $data['dataKur'] = $this->Model_kur->get_year($Year);
        } else {
            $data['dataKur'] = $this->Model_kur->getAll();
        }

        $data['title'] = 'Rekap Lapbul';
        $data['user'] = $this->db->get_where('user', ['nama' => $this->session->userdata('nama')])->row_array();

        $this->load->view('template/header', $data);
        $this->load->view('template/header_body', $data);
        $this->load->view('template/right_sidebar', $data);
        $this->load->view('template/left_sidebar', $data);
        $this->load->view('kur/lapbul', $data);
        $this->load->view('template/footer');
    }
    public function outstanding()
    {
        $data['title'] = 'Rekap Outstanding';
        $data['user'] = $this->db->get_where('user', ['nama' => $this->session->userdata('nama')])->row_array();
        $data['dataKur'] = $this->db->get_where('tblkur')->result_array();
        $this->load->view('template/header', $data);
        $this->load->view('template/header_body', $data);
        $this->load->view('template/right_sidebar', $data);
        $this->load->view('template/left_sidebar', $data);
        $this->load->view('kur/outstanding', $data);
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
            $data = $this->input->post('datakur');
            $dataKur = json_decode(htmlspecialchars_decode($data, true));
            $this->export($dataKur);
        } else {

        }
    }

    public function triggeredExportOutstanding()
    {
        if ($this->input->post('click') == 1) {
            $clickEvent = 1;
        } else {
            $clickEvent = 0;
        }

        if ($clickEvent == 1) {
            $clickEvent = 0;
            $data = $this->input->post('datakur');
            $dataKur = json_decode(htmlspecialchars_decode($data, true));
            $this->exportkur($dataKur);
        } else {

        }
    }

    public function export($dataKur)
    {

        $table_result = $dataKur;

        $spreadsheet = new Spreadsheet;

        $spreadsheet->setActiveSheetIndex(0)
            ->setCellValue('A1', 'No')
            ->setCellValue('B1', 'Nama')
            ->setCellValue('C1', 'Alamat')
            ->setCellValue('D1', 'Nomor Akad')
            ->setCellValue('E1', 'Tanggal Akad')
            ->setCellValue('F1', 'Tanggal Jatuh Tempo')
            ->setCellValue('G1', 'Nilai Akad')
            ->setCellValue('H1', 'Nomor Penjaminan')
            ->setCellValue('I1', 'Kode Cabang')
            ->setCellValue('J1', 'Nama Cabang')
            ->setCellValue('K1', 'Nilai Dijamin')
            ->setCellValue('L1', 'Jangka Waktu (BLN)')
            ->setCellValue('M1', 'Jangka Waktu (THN)')
            ->setCellValue('N1', 'Tahun Pertama')
            ->setCellValue('O1', 'Tahun Kedua')
            ->setCellValue('P1', 'Tahun Ketiga')
            ->setCellValue('Q1', 'Tahun Keempat')
            ->setCellValue('R1', 'Tahun Kelima')
            ->setCellValue('S1', 'Rate')
            ->setCellValue('T1', 'Total IJP');

        $kolom = 2;
        $nomor = 1;
        $flag = 1;
        if (!is_array($table_result) || is_array($table_result)) {
            foreach ($table_result as $u) {
                $a = $u->tanggal_akad;
                $b = $u->tgl_jatuh_tempo;
                $c = $u->nilai_akad;
                $timeStart = strtotime($a);
                $timeEnd = strtotime($b);

                // Menambah bulan ini + semua bulan pada tahun sebelumnya
                $numBulan = (date("Y", $timeEnd) - date("Y", $timeStart)) * 12;
                // hitung selisih bulan
                $numBulan += date("m", $timeEnd) - date("m", $timeStart);

                $numTahun = (date("Y", $timeEnd) - date("Y", $timeStart));
                // hitung selisih bulan
                $numTahun += date("m", $timeEnd) - date("m", $timeStart);

                $hasil = (int) (($numTahun / $numTahun) * $c);
                if ($hasil < 0) {
                    $total = 0;
                } else {
                    $total = $hasil;
                }

                $hasil2 = (int) ((($numTahun - 1) / $numTahun) * $c);
                if ($hasil2 < 0) {
                    $total2 = 0;
                } else {
                    $total2 = $hasil2;
                }
                $hasil3 = (int) ((($numTahun - 2) / $numTahun) * $c);
                if ($hasil3 < 0) {
                    $total3 = 0;
                } else {
                    $total3 = $hasil3;
                }
                $hasil4 = (int) ((($numTahun - 3) / $numTahun) * $c);
                if ($hasil4 < 0) {
                    $total4 = 0;
                } else {
                    $total4 = $hasil4;
                }
                $hasil5 = (int) ((($numTahun - 4) / $numTahun) * $c);
                if ($hasil5 < 0) {
                    $total5 = 0;
                } else {
                    $total5 = $hasil5;
                }

                if ($u->nilai_akad <= 50000000) {
                    $rate = 1.75;
                } else {
                    $rate = 1.50;
                }

                $totalall = ($total + $total2 + $total3 + $total4 + $total5) * $rate;

                $spreadsheet->setActiveSheetIndex(0)
                    ->setCellValue('A' . $kolom, $nomor)
                    ->setCellValue('B' . $kolom, $u->nama)
                    ->setCellValue('C' . $kolom, $u->alamat)
                    ->setCellValue('D' . $kolom, $u->nomor_akad)
                    ->setCellValue('E' . $kolom, $u->tanggal_akad)
                    ->setCellValue('F' . $kolom, $u->tgl_jatuh_tempo)
                    ->setCellValue('G' . $kolom, number_format($u->nilai_akad, 0, ".", "."))
                    ->setCellValue('H' . $kolom, $u->nomor_penjaminan)
                    ->setCellValue('I' . $kolom, $u->kode_cabang)
                    ->setCellValue('J' . $kolom, " ")
                    ->setCellValue('K' . $kolom, number_format(($u->nilai_akad * 0.75), 0, ".", "."))
                    ->setCellValue('L' . $kolom, $numBulan)
                    ->setCellValue('M' . $kolom, $numTahun)
                    ->setCellValue('N' . $kolom, number_format($total, 0, ".", "."))
                    ->setCellValue('O' . $kolom, number_format($total2, 0, ".", "."))
                    ->setCellValue('P' . $kolom, number_format($total3, 0, ".", "."))
                    ->setCellValue('Q' . $kolom, number_format($total4, 0, ".", "."))
                    ->setCellValue('R' . $kolom, number_format($total5, 0, ".", "."))
                    ->setCellValue('S' . $kolom, $rate . "%")
                    ->setCellValue('T' . $kolom, number_format($totalall, 0, ".", "."));

                $kolom++;
                $nomor++;

            }

            $date = date("d-m-Y");
            $bulan = date("m");
            $namauser = $this->db->get_where('user', ['nama' => $this->session->userdata('nama')])->row_array();

            $log = "User: " . $_SERVER['REMOTE_ADDR'] . ' - ' . date("F j, Y, H:i:s") . PHP_EOL .
                "Attempt: " . ("Success Export Data Lapbul Kur") . PHP_EOL .
                "User: " . $namauser['nama'] . PHP_EOL .
                "Aksi: " . ('Kur') . PHP_EOL .
                "-------------------------" . PHP_EOL;
            //-
            file_put_contents('logfile/' . $bulan . '/logfile' . $date . '/log_' . date("j.n.Y") . '.txt', $log, FILE_APPEND);

            $writer = new Xlsx($spreadsheet);
            header('Content-Type: application/vnd.ms-excel');
            header('Content-Disposition: attachment;filename="lapbul.xlsx"');
            header('Cache-Control: max-age=0');
            $writer->save('php://output');

        }

    }

    public function exportkur($dataTable)
    {
        $keyword = "";
        $table_result = $dataTable;

        $spreadsheet = new Spreadsheet;

        $spreadsheet->setActiveSheetIndex(0)
            ->setCellValue('A1', 'NO')
            ->setCellValue('B1', 'CABANG')
            ->setCellValue('C1', 'NASABAH')
            ->setCellValue('D1', 'ALAMAT')
            ->setCellValue('E1', 'PENGGUNAAN KREDIT')
            ->setCellValue('F1', 'PLAFOND KREDIT')
            ->setCellValue('G1', 'COVERAGE PENJAMINAN (%)')
            ->setCellValue('H1', 'NILAI PENJAMINAN')
            ->setCellValue('I1', 'SUKU BUNGA (BULAN)')
            ->setCellValue('J1', 'JANGKA WAKTU (BULAN)')
            ->setCellValue('K1', 'TANGGAL')
            ->setCellValue('L1', '')
            ->setCellValue('M1', 'TARIF')
            ->setCellValue('N1', 'IJP/PREMI')
            ->setCellValue('O1', 'FEE BASE')
            ->setCellValue('P1', 'IJP - NET')
            ->setCellValue('Q1', 'NOMOR SERTIFIKAT PENJAMINAN')
            ->setCellValue('R1', 'LAMA KREDIT JALAN')
            ->setCellValue('S1', 'TAKSASI CICILAN (Rp.)')
            ->setCellValue('T1', 'TAKSASI O/s KREDIT (Rp.)')
            ->setCellValue('K2', 'REALISASI')
            ->setCellValue('L2', 'JATUH TEMPO')
            ->setCellValue('N2', 'Rp')

            ->mergeCells('K1:L1');

        $kolom = 3;
        $nomor = 1;
        $DJPnoreg = "";
        $flag = 1;
        if (!is_array($table_result) || is_array($table_result)) {
            foreach ($table_result as $u) {

                $a = $u->tanggal_akad;
                $b = $u->tgl_jatuh_tempo;
                $c = $u->nilai_akad;
                $nilai_jamin = ((int) $u->nilai_akad) * 0.75;

                $timeStart = strtotime($a);
                $timeEnd = strtotime($b);

                $date2 = date('Y-m-d');
                $ts2 = strtotime($date2);

                $year1 = date('Y', $timeStart);
                $year2 = date('Y', $ts2);

                $month1 = date('m', $timeStart);
                $month2 = date('m', $ts2);

                $day1 = date('d', $timeStart);
                $day2 = date('d', $ts2);

                $numBulan = (date("Y", $timeEnd) - date("Y", $timeStart)) * 12;
                $numBulan += date("m", $timeEnd) - date("m", $timeStart);

                if ($u->nilai_akad <= 50000000) {
                    $rate = 1.75;
                } else {
                    $rate = 1.50;
                };
                if ($u->nilai_akad <= 50000000) {
                    $ratekali = 0.0175;
                } else {
                    $ratekali = 0.015;
                };

                $hasil1 = (int) (($numBulan / $numBulan) * $c);
                $hasil2 = (int) ((($numBulan - 1) / $numBulan) * $c);
                if ($hasil2 < 0) {
                    $hasil7 = 0;
                } else {
                    $hasil7 = $hasil2;
                }
                $hasil3 = (int) ((($numBulan - 2) / $numBulan) * $c);
                if ($hasil3 < 0) {
                    $hasil8 = 0;
                } else {
                    $hasil8 = $hasil3;
                }
                $hasil4 = (int) ((($numBulan - 3) / $numBulan) * $c);
                if ($hasil4 < 0) {
                    $hasil9 = 0;
                } else {
                    $hasil9 = $hasil4;
                }
                $hasil5 = (int) ((($numBulan - 4) / $numBulan) * $c);
                if ($hasil5 < 0) {
                    $hasil6 = 0;
                } else {
                    $hasil6 = $hasil5;
                }
                $ijp = (int) ($hasil1 + $hasil7 + $hasil8 + $hasil9 + $hasil6) * $rate;
                $diff = (($year2 - $year1) * 12) + ($month2 - $month1);
                $taksasi = ($nilai_jamin / $numBulan * $diff);

                $spreadsheet->setActiveSheetIndex(0)
                    ->setCellValue('A' . $kolom, $nomor)
                    ->setCellValue('B' . $kolom, " ")
                    ->setCellValue('C' . $kolom, $u->nama)
                    ->setCellValue('D' . $kolom, $u->alamat)
                    ->setCellValue('E' . $kolom, " ")
                    ->setCellValue('F' . $kolom, number_format($u->nilai_akad, 0, ".", "."))
                    ->setCellValue('G' . $kolom, "75%")
                    ->setCellValue('H' . $kolom, number_format(((int) $u->nilai_akad) * 0.75, 0, ".", "."))
                    ->setCellValue('I' . $kolom, " ")
                    ->setCellValue('J' . $kolom, $numBulan)
                    ->setCellValue('K' . $kolom, $u->tanggal_akad)
                    ->setCellValue('L' . $kolom, $u->tgl_jatuh_tempo)
                    ->setCellValue('M' . $kolom, $rate . "%")
                    ->setCellValue('N' . $kolom, number_format($ijp, 0, ".", "."))
                    ->setCellValue('O' . $kolom, " ")
                    ->setCellValue('P' . $kolom, " ")
                    ->setCellValue('Q' . $kolom, $u->nomor_penjaminan)
                    ->setCellValue('R' . $kolom, $diff)
                    ->setCellValue('S' . $kolom, "IDR " . number_format($taksasi, 0, ".", "."))
                    ->setCellValue('T' . $kolom, "IDR " . number_format($nilai_jamin - $taksasi, 0, ".", "."));

                $kolom++;
                $nomor++;

            }
            $date = date("d-m-Y");
            $bulan = date("m");
            $namauser = $this->db->get_where('user', ['nama' => $this->session->userdata('nama')])->row_array();

            $log = "User: " . $_SERVER['REMOTE_ADDR'] . ' - ' . date("F j, Y, H:i:s") . PHP_EOL .
                "Attempt: " . ("Success Export Outstanding Data Kur") . PHP_EOL .
                "User: " . $namauser['nama'] . PHP_EOL .
                "Aksi: " . ('Kur') . PHP_EOL .
                "-------------------------" . PHP_EOL;
            //-
            file_put_contents('logfile/' . $bulan . '/logfile' . $date . '/log_' . date("j.n.Y") . '.txt', $log, FILE_APPEND);

            $writer = new Xlsx($spreadsheet);
            header('Content-Type: application/vnd.ms-excel');
            header('Content-Disposition: attachment;filename="OutstandingKUR.xlsx"');
            header('Cache-Control: max-age=0');
            $writer->save('php://output');

        }
    }

    public function accrual()
    {
        $data['title'] = 'Rekap Accrual Bulan';
        $data['user'] = $this->db->get_where('user', ['nama' => $this->session->userdata('nama')])->row_array();
        $data['dataKur'] = $this->db->get_where('tblkur')->result_array();
        $this->load->view('template/header', $data);
        $this->load->view('template/header_body', $data);
        $this->load->view('template/right_sidebar', $data);
        $this->load->view('template/left_sidebar', $data);
        $this->load->view('kur/Accrual', $data);
        $this->load->view('template/footer');
    }

    public function klaim_ojk()
    {
        $data['title'] = 'Rekap Klaim OJK';
        $data['user'] = $this->db->get_where('user', ['nama' => $this->session->userdata('nama')])->row_array();
        $data['dataOJK'] = $this->db->get_where('tblimport')->result_array();
        $this->load->view('template/header', $data);
        $this->load->view('template/header_body', $data);
        $this->load->view('template/right_sidebar', $data);
        $this->load->view('template/left_sidebar', $data);
        $this->load->view('kur/klaim_ojk', $data);
        $this->load->view('template/footer');
    }

    public function import()
    {
        $data['title'] = 'Rekap Import';
        $data['user'] = $this->db->get_where('user', ['nama' => $this->session->userdata('nama')])->row_array();
        $data['dataKur'] = $this->db->get_where('tblkur')->result_array();
        $this->load->view('template/header', $data);
        $this->load->view('template/header_body', $data);
        $this->load->view('template/right_sidebar', $data);
        $this->load->view('template/left_sidebar', $data);
        $this->load->view('kur/import', $data);
        $this->load->view('template/footer');
    }

/*    public function importdata()
{
$this->load->model('Model_kur');
$data['docs_list'] = $this->Model_kur->get_all_docs();
}*/

    public function proses()
    {
        $config = array(
            'upload_path' => "./assets/dokumen/",
            'allowed_types' => "gif|jpg|jpeg|png|iso|dmg|zip|rar|doc|docx|xls|xlsx|ppt|pptx|csv|ods|odt|odp|pdf|rtf|sxc|sxi|txt|exe|avi|mpeg|mp3|mp4|3gp",
            'overwrite' => true,
            'max_size' => "100000000000",
            'max_height' => "768",
            'max_width' => "1024",
        );
        $this->load->library('upload', $config);
        if (!$this->upload->do_upload('berkas')) {
            $error = array('error' => $this->upload->display_errors());
            echo 'upload error';
        } else {
            //    $data['idImport'] = $this->input->post("idImport");
            $data['nama_berkas'] = $this->upload->data("file_name");
            $data['keterangan'] = $this->input->post('keterangan');
            $data['tipe_berkas'] = $this->upload->data('file_ext');
            $data['ukuran_berkas'] = $this->upload->data('file_size');
            $this->db->insert('tblimport', $data);

            echo '<script type="text/javascript" >';
            echo 'alert("DATA BERHASIL DIUPLOAD");';
            echo "window.location.href = '" . base_url() . "kur/import';";
            /*    redirect('klaim');*/
            echo '</script>';
            //redirect('kur/import');
        }
    }

    public function cetakaccrual()
    {
        $this->load->model('Model_kur');
        $id = $this->uri->segment(3);
        $data = array('title' => 'Laporan Klaim',
            'Klaim' => $this->Model_kur->cetakexcelsemua($id));
        if (!empty($this->uri->segment(3))) {
            $data['dataKur'] = $this->Model_kur->cetakexcelsemua($id);
        } else {
            $data['dataKur'] = $this->Model_kur->cetakexcelsemua();
        }
        $data['user'] = $this->db->get_where('user', ['nama' => $this->session->userdata('nama')])->row_array();

        $date = date("d-m-Y");
        $bulan = date("m");
        $namauser = $this->db->get_where('user', ['nama' => $this->session->userdata('nama')])->row_array();

        $log = "User: " . $_SERVER['REMOTE_ADDR'] . ' - ' . date("F j, Y, H:i:s") . PHP_EOL .
            "Attempt: " . ("Success Export Data Accrual Kur") . PHP_EOL .
            "User: " . $namauser['nama'] . PHP_EOL .
            "Aksi: " . ('Kur') . PHP_EOL .
            "-------------------------" . PHP_EOL;
//-
        file_put_contents('logfile/' . $bulan . '/logfile' . $date . '/log_' . date("j.n.Y") . '.txt', $log, FILE_APPEND);

        $this->load->view('kur/vw_kur_accrual', $data);

    }

    public function cetakfilter($dataTable2)
    {

        $dataTable = $dataTable2;

        //    $id = $this->uri->segment(3);
        if (!is_array($dataTable) || is_array($dataTable)) {
            $data['dataKur'] = json_decode(json_encode($dataTable), true);
        }
        $data['title'] = 'Laporan Accrual';

        $data['user'] = $this->db->get_where('user', ['nama' => $this->session->userdata('nama')])->row_array();
        /**/

        $date = date("d-m-Y");
        $bulan = date("m");
        $namauser = $this->db->get_where('user', ['nama' => $this->session->userdata('nama')])->row_array();

        $log = "User: " . $_SERVER['REMOTE_ADDR'] . ' - ' . date("F j, Y, H:i:s") . PHP_EOL .
            "Attempt: " . ("Success Export Data Accrual Kur") . PHP_EOL .
            "User: " . $namauser['nama'] . PHP_EOL .
            "Aksi: " . ('Kur') . PHP_EOL .
            "-------------------------" . PHP_EOL;
//-
        file_put_contents('logfile/' . $bulan . '/logfile' . $date . '/log_' . date("j.n.Y") . '.txt', $log, FILE_APPEND);

        $this->load->view('kur/vw_kur_accrual', $data);

    }

    public function triggeredExportkuraccrual()
    {

        if ($this->input->post('click') == 1) {
            $clickEvent = 1;
        } else {
            $clickEvent = 0;
        }

        if ($clickEvent == 1) {
            $clickEvent = 0;
            $data = $this->input->post('dataKur');

            $dataTable2 = json_decode(htmlspecialchars_decode($data, true));

            $this->cetakfilter($dataTable2);
        } else {

        }
    }
}
