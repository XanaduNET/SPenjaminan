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

    public function index()
    {
        $this->load->view('indexx');
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

        $acuanhitungijp = "PLAFOND KREDIT";
        $GPPid = "1";
        $PKSid = "2";
        $DJPnoreg = $sheetdata[$i][3];
        $DJPnourut = $sheetdata[$i][3]; // belum selesai
        $DJPnoseri = "JR.0000.00";

        // Untuk PP id
        $pp = $sheetadata[$i][2];

        $sql = "SELECT * FROM tblPP WHERE PPnama LIKE $pp";
        $query = $this->db->query($sql);

        foreach ($query->result() as $row) {
            $PPid = $row->title;
            $PPnama = $row->name;
            $PPalamat = $row->body;
        }

        $DJPnodeklarasi = "--";
        $DJPtanggaldeklarasi = $sheetdata[$i][4];
        $DJPperiode = date('m', $tanggaldeklarasi);

        // pemilihan jenis kredit
        $jeniskredit = str_replace(',', '.', $sheetdata[$i][13]);

        $sql = "SELECT OPKid FROM tblIJP WHERE IJPrate = $jeniskredit";
        $query = $this->db->query($sql);

        foreach ($query->result_row() as $row) {
            $OPKid = $row->OPKid;
        }
        //end

        $SPJid = "1";

        if ($sheetcount > 1) {
            $JSPid = 1;
        } else {
            $JSPid = 2;
        }

        //end

        $dataDJPH[] = array(
            'DJPnoreg' => $noregsertif,
            'DJPnoseri' => $DJPnoseri,
            'DJPnourut' => $DJPnourut,
        );
        // $data[] = array(
        //     'product_name' => $product_name,
        //     'product_quantity' => $product_qty,
        //     'product_price' => $product_price,
        // );
        $insertdata = $this->home_model->insertnotbatch($dataDJPH);
        $inserdata = $this->home_model->insert_batch($data);
        if ($inserdata) {
            $this->session->set_flashdata('message', '<div class="alert alert-success">Successfully Added.</div>');
            redirect('Home');
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger">Data Not uploaded. Please Try Again.</div>');
            redirect('Home');
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
