<?php
defined('BASEPATH') or exit('No direct script access allowed');
require FCPATH . 'vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

class Home extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('home_model');
    }

    public function penyebut($hasil)
    {

        $nilai = abs($hasil);
        $huruf = array("", "Satu", "Dua", "Tiga", "Empat", "Lima", "Enam", "Tujuh", "Delapan", "Sembilan", "Sepuluh", "Sebelas");
        $temp = "";
        if ($nilai < 12) {
            $temp = " " . $huruf[$nilai];
        } else if ($nilai < 20) {
            $temp = $this->penyebut($nilai - 10) . " Belas";
        } else if ($nilai < 100) {
            $temp = $this->penyebut($nilai / 10) . " Puluh" . $this->penyebut($nilai % 10);
        } else if ($nilai < 200) {
            $temp = " Seratus" . $this->penyebut($nilai - 100);
        } else if ($nilai < 1000) {
            $temp = $this->penyebut($nilai / 100) . " Ratus" . $this->penyebut($nilai % 100);
        } else if ($nilai < 2000) {
            $temp = " Seribu" . $this->penyebut($nilai - 1000);
        } else if ($nilai < 1000000) {
            $temp = $this->penyebut($nilai / 1000) . " Ribu" . $this->penyebut($nilai % 1000);
        } else if ($nilai < 1000000000) {
            $temp = $this->penyebut($nilai / 1000000) . " Juta" . $this->penyebut($nilai % 1000000);
        } else if ($nilai < 1000000000000) {
            $temp = $this->penyebut($nilai / 1000000000) . " Milyar" . $this->penyebut(fmod($nilai, 1000000000));
        } else if ($nilai < 1000000000000000) {
            $temp = $this->penyebut($nilai / 1000000000000) . " Trilyun" . $this->penyebut(fmod($nilai, 1000000000000));
        }
        return $temp;

    }

    public function index()
    {
        $data['user'] = $this->db->get_where('user', ['nama' => $this->session->userdata('nama')])->row_array();
        $data['title'] = 'Migrasi Data Penjaminan';

        $this->load->view('template/header', $data);
        $this->load->view('template/header_body', $data);
        $this->load->view('template/right_sidebar', $data);
        $this->load->view('template/left_sidebar', $data);
        $this->load->view('indexx', $data);
        $this->load->view('template/footer');

    }
    public function spreadhseet_format_download()
    {
        header('Content-Type: application/vnd.ms-excel');
        header('Content-Disposition: attachment;filename="hello_world.xlsx"');
        $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();
        $sheet->setCellValue('A1', 'NO');
        $sheet->setCellValue('B1', 'CBG/CAPEM/KEDAI');
        $sheet->setCellValue('C1', 'NO SERTIFIKAT');
        $sheet->setCellValue('D1', 'TGL SERTIFIKAT');
        $sheet->setCellValue('E1', 'JML TERJAMIN');
        $sheet->setCellValue('F1', 'NAMA TERJAMIN');
        $sheet->setCellValue('G1', 'COVERAGE');
        $sheet->setCellValue('H1', 'PLAFOND');
        $sheet->setCellValue('I1', 'JML JAMINAN');
        $sheet->setCellValue('J1', 'JANGKA WAKTU AWAL');
        $sheet->setCellValue('K1', 'JANGKA WAKTU AKHIR');
        $sheet->setCellValue('L1', 'BLN');
        $sheet->setCellValue('M1', 'TARIF');
        $sheet->setCellValue('N1', 'IJP');
        $sheet->setCellValue('O1', 'ADM');
        $sheet->setCellValue('P1', 'MATERAI');
        $sheet->setCellValue('Q1', 'TOTAL');
        $sheet->setCellValue('R1', 'FEE BANK');
        $sheet->setCellValue('S1', 'TOTAL PENDAPATAN');
        $sheet->setCellValue('T1', 'IJP AWAL');
        $sheet->setCellValue('U1', 'IJP SATU TAHUN');
        $sheet->setCellValue('V1', 'SISA');
        $sheet->setCellValue('W1', 'KETERANGAN');

        $writer = new Xlsx($spreadsheet);
        $writer->save("php://output");
    }
    public function spreadsheet_import()
    {
        $upload_file = $_FILES['upload_file']['name'];
        $extension = pathinfo($upload_file, PATHINFO_EXTENSION);
        if ($extension == 'csv') {
            $reader = new \PhpOffice\PhpSpreadsheet\Reader\Csv();
        } else if ($extension == 'xls') {
            $reader = new \PhpOffice\PhpSpreadsheet\Reader\Xls();
        } else {
            $reader = new \PhpOffice\PhpSpreadsheet\Reader\Xlsx();
        }
        $spreadsheet = $reader->load($_FILES['upload_file']['tmp_name']);
        $sheetdata = $spreadsheet->getActiveSheet()->toArray();
        $sheetcount = count($sheetdata);

        $userid = $this->db->get_where('user', ['nama' => $this->session->userdata('nama')])->row_array();

        $DJPmaxnilai = 0;
        if ($sheetcount > 1) {
            $dataDJPH = array();
            $dataDJPHUpdate = array();
            $DJPacuanhitung = "PLAFOND KREDIT";
            $GPPid = "1";
            $PKSid = "2";
            $BPid = "2";
            $PKSjenis = "PK";
            $DJPnoreg = $sheetdata[2][2];
            $djpimplode = $sheetdata[2][2];
            $dn = explode(".", $djpimplode);
            $DJPnourut = $dn[3];
            $DJPnoseri = "JR.0000.00";
            $PKSjenis = "PK";
            // Untuk PP id
            $pp = $sheetdata[2][1];
            $query = $this->db->query("SELECT * FROM tblpp WHERE PPnama LIKE '%$pp%'")->result();
            foreach ($query as $row) {
                $ppidtes = $row->PPid;
                $ppnamates = $row->PPnama;
                $ppalamattes = $row->PPalamat;
            }

            // END
            $PPid = $ppidtes;
            $PPnama = $ppnamates;
            $PPalamat = $ppalamattes;
            $DJPnodeklarasi = "--";
            $djptanggal = strtotime($sheetdata[2][3]);
            $DJPtanggaldeklarasi = date('Y-m-d', $djptanggal);
            $DJPperiode = date('m', $djptanggal);
            // pemilihan jenis kredit
            $jeniskredit = str_replace(',', '.', $sheetdata[2][12]);
            $jk = explode("%", $jeniskredit);
            $query = $this->db->query("SELECT OPKid FROM tblijp WHERE IJPrate = '$jk[0]'")->result();

            foreach ($query as $row) {
                $opktes = $row->OPKid;
            }
            //end

            $SPJid = "1";
            $OPKid = $opktes;

            if ($sheetcount > 1) {
                $JSPid = 1;
            } else {
                $JSPid = 2;
            }

            //end
            $dataDJPH[] = array(
                'DJPnoreg' => $DJPnoreg,
                'DJPnoseri' => $DJPnoseri,
                'DJPnourut' => $DJPnourut,
                'DJPnodeklarasi' => $DJPnodeklarasi,
                'DJPperiode' => $DJPperiode,
                'DJPacuanhitung' => $DJPacuanhitung,
                'DJPtanggaldeklarasi' => $DJPtanggaldeklarasi,
                'GPPid' => $GPPid,
                'PKSid' => $PKSid,
                'PPid' => $PPid,
                'PPnama' => $PPnama,
                'PPalamat' => $PPalamat,
                'OPKid' => $OPKid,
                'JSPid' => $JSPid,
                'SPJid' => $SPJid,
                'DJPuseridentry' => $userid['id'],
                'DJPtanggalentry' => date("Y-m-d"),
                'PKSjenis' => $PKSjenis,
                'BPid' => $BPid,
                'PKSratefee' => "10%",

            );
            $insertdata = $this->home_model->insertnotbatch($dataDJPH);
            // looping DJPD dan TRJM
            $totalterjamin = 0;
            $totalplafon = 0;
            $totaljaminan = 0;
            $totalijp = 0;
            $totaladmin = 0;
            $totalmaterai = 0;
            $totalnilaiPK = 0;
            $totalfeebank = 0;
            $totaljumlahbiaya = 0;

            for ($i = 2; $i < $sheetcount; $i++) {
                $dataDJPD = array();
                $datatrjm = array();

                $TRJMnama = $sheetdata[$i][5];
                $TRJMalamat = "--";
                $TRJMusia = "--";

                $datatrjm[] = array(
                    'TRJMnama' => $TRJMnama,
                    'TRJMalamat' => $TRJMalamat,
                    'TRJMusia' => $TRJMusia,
                );

                $insertIdTRJM = $this->home_model->insertbatchtrjm($datatrjm);

                $DJPDnoreg = $sheetdata[2][2];
                $DJPDnoakad = "--";
                $DJPDtanggalakad = $DJPtanggaldeklarasi;
                $DJPDjangkawaktu = $sheetdata[$i][11];
                $tanggalawal = strtotime($sheetdata[2][9]);
                $tanggalakhir = strtotime($sheetdata[2][10]);
                $DJPDtanggalawal = date('Y-m-d', $tanggalawal);
                $DJPDtanggalakhir = date('Y-m-d', $tanggalakhir);
                $DJPDplafondkredit = str_replace(',', '', $sheetdata[$i][7]);
                $DJPDcoverage = str_replace(',', '.', $sheetdata[$i][6]);
                $DJPDrate = $sheetdata[$i][12];
                $DJPDnilaipenjaminan = str_replace(',', '', $sheetdata[$i][8]);
                $DJPDtujuankredit = "--";
                $DJPDjenisagunan = "--";
                $DJPDcarapengikatan = "--";
                $DJPDnilaitransaksipasar = "--";
                $DJPDimbaljasa = str_replace(',', '', $sheetdata[$i][13]);
                $DJPDfeeadm = str_replace(',', '', $sheetdata[$i][14]);
                $DJPDfeematerai = str_replace(',', '', $sheetdata[$i][15]);
                $DJPDfeebank = str_replace(',', '', $sheetdata[$i][17]);
                $DJPDsu = "--";
                $DJPDobjekpenjaminan = "--";
                $PKRJid = 1;
                $TRJMid = $insertIdTRJM;
                $TRJMnamaDJPD = $TRJMnama;
                $TRJMalamatDJPD = $TRJMalamat;
                $TRJMusiaDJPD = $TRJMusia;
                $DJPid = $insertdata;

                $dataDJPD[] = array(
                    'DJPDnoreg' => $DJPDnoreg,
                    'DJPDnoakad' => $DJPDnoakad,
                    'DJPDtanggalakad' => $DJPDtanggalakad,
                    'DJPDjangkawaktu' => $DJPDjangkawaktu,
                    'DJPDtanggalawal' => $DJPDtanggalawal,
                    'DJPDtanggalakhir' => $DJPDtanggalakhir,
                    'DJPDplafondkredit' => $DJPDplafondkredit,
                    'DJPDcoverage' => $DJPDcoverage,
                    'DJPDrate' => $DJPDrate,
                    'DJPDnilaipenjaminan' => $DJPDnilaipenjaminan,
                    'DJPDtujuankredit' => $DJPDtujuankredit,
                    'DJPDjenisagunan' => $DJPDjenisagunan,
                    'DJPDcarapengikatan' => $DJPDcarapengikatan,
                    'DJPDnilaitransaksipasar' => $DJPDnilaitransaksipasar,
                    'DJPDimbaljasa' => $DJPDimbaljasa,
                    'DJPDfeeadm' => $DJPDfeeadm,
                    'DJPDfeematerai' => $DJPDfeematerai,
                    'DJPDfeebank' => $DJPDfeebank,
                    'DJPDsu' => $DJPDsu,
                    'DJPDobjekpenjaminan' => $DJPDobjekpenjaminan,
                    'PKRJid' => $PKRJid,
                    'TRJMid' => $TRJMid,
                    'TRJMnama' => $TRJMnama,
                    'TRJMalamat' => $TRJMalamat,
                    'TRJMusia' => $TRJMusia,
                    'DJPid' => $DJPid,
                );

                $this->home_model->insertbatchdjpd($dataDJPD);

                if ($DJPmaxnilai <= str_replace(',', '', $sheetdata[$i][7])) {
                    $DJPmaxnilai += str_replace(',', '', $sheetdata[$i][7]);
                }
                $totalterjamin += 1;
                $totalnilaiPK += $DJPDplafondkredit;
                $totaljaminan += $DJPDnilaipenjaminan;
                $totalijp += $DJPDimbaljasa;
                $totalfeebank += $DJPDfeebank;
                $totaladmin += $DJPDfeeadm;
                $totalmaterai = $DJPDfeematerai;
                $totaljumlahbiaya = ($totalijp + $totaladmin + $totalmaterai) - $totalfeebank;

            }
            $totaljumlahbiaya = ($totalijp + $totaladmin + $totalmaterai) - $totalfeebank;

            $dataDJPHUpdate = array(
                'DJPtahun' => 2022,
                'DJPjumlahPK' => $totalterjamin,
                'DJPjumlahnilaiPK' => $totalnilaiPK,
                'DJPjumlahimbaljasa' => $totalijp,
                'DJPnilaipenjaminan' => $totaljaminan,
                'DJPfeebank' => $totalfeebank,
                'DJPfeeadmin' => $totaladmin,
                'DJPfeematerai' => $totalmaterai,
                'DJPmaxnilai' => $DJPmaxnilai,
                'DJPjumlahbiaya' => $totaljumlahbiaya,
                'DJPjumlahbiayaterbilang' => $this->penyebut($totaljumlahbiaya),
            );
            $this->db->where('DJPid', $DJPid);
            $this->db->update('tbldjph', $dataDJPHUpdate);

        }

    }

    public function spreadsheet_export()
    {
        //fetch my data
        $productlist = $this->home_model->product_list();

        header('Content-Type: application/vnd.ms-excel');
        header('Content-Disposition: attachment;filename="product.xlsx"');
        $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();
        $sheet->setCellValue('A1', 'S.No');
        $sheet->setCellValue('B1', 'Product Name');
        $sheet->setCellValue('C1', 'Quantity');
        $sheet->setCellValue('D1', 'Price');
        $sheet->setCellValue('E1', 'Subtotal');

        $sn = 2;
        foreach ($productlist as $prod) {
            //echo $prod->product_name;
            $sheet->setCellValue('A' . $sn, $prod->product_id);
            $sheet->setCellValue('B' . $sn, $prod->product_name);
            $sheet->setCellValue('C' . $sn, $prod->product_quantity);
            $sheet->setCellValue('D' . $sn, $prod->product_price);
            $sheet->setCellValue('E' . $sn, '=C' . $sn . '*D' . $sn);
            $sn++;
        }
        //TOTAL
        $sheet->setCellValue('D8', 'Total');
        $sheet->setCellValue('E8', '=SUM(E2:E' . ($sn - 1) . ')');

        $writer = new Xlsx($spreadsheet);
        $writer->save("php://output");
    }
}
