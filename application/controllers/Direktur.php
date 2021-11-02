<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Direktur extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Model_direktur');
        $this->load->model('Model_CBC');
    }

    public function index()
    {

        $data['user'] = $this->db->get_where('user', ['nama' => $this->session->userdata('nama')])->row_array();
        $data['role'] = $this->db->get('user_role')->result_array();
        $data['title'] = 'Beranda Direktur';

        $date = date("d-m-Y");
        $bulan = date("m");

        $namauser = $this->db->get_where('user', ['nama' => $this->session->userdata('nama')])->row_array();

        $log = "User: " . $_SERVER['REMOTE_ADDR'] . ' - ' . date("F j,Y, H:i:s") . PHP_EOL .
            "Attempt: " . ("Success Masuk Halaman") . PHP_EOL .
            "User: " . $namauser['nama'] . PHP_EOL .
            "Aksi: " . ('Beranda Direktur') . PHP_EOL .
            "-------------------------" . PHP_EOL;
        //-
        file_put_contents('logfile/' . $bulan . '/logfile' . $date . '/log_' . date("j.n.Y") . '.txt', $log, FILE_APPEND);

        $data['cbc'] = $this->Model_direktur->ambilcasebycase()->row_array();
        $data['cbcp'] = $this->Model_direktur->ambilcasebycaseproduktif()->row_array();
        $data['klaim'] = $this->Model_direktur->ambilklaim()->result_array();
        $data['kur'] = $this->Model_direktur->ambilkur()->result_array();
        $data['subrogasi'] = $this->Model_direktur->ambilsubrogasi()->result_array();
        $data['penjaminan'] = $this->Model_direktur->ambilpenjaminan()->result_array();

        $this->load->view('template/header', $data);
        $this->load->view('template/header_body', $data);
        $this->load->view('template/right_sidebar', $data);
        $this->load->view('template/left_sidebar', $data);
        $this->load->view('direktur/beranda', $data);
        $this->load->view('template/footer');
    }

    public function casebycase()
    {

        $data['user'] = $this->db->get_where('user', ['nama' => $this->session->userdata('nama')])->row_array();
        $data['role'] = $this->db->get('user_role')->result_array();
        $data['title'] = 'Case By Case';

        $this->load->view('template/header', $data);
        $this->load->view('template/header_body', $data);
        $this->load->view('template/right_sidebar', $data);
        $this->load->view('template/left_sidebar', $data);
        $this->load->view('direktur/cbc', $data);
        $this->load->view('template/footer');
    }

    public function casebycaseproduktif()
    {

        $data['user'] = $this->db->get_where('user', ['nama' => $this->session->userdata('nama')])->row_array();
        $data['role'] = $this->db->get('user_role')->result_array();
        $data['title'] = 'Case By Case';
        $data['cbcp'] = $this->Model_legal->getCBCP();

        $this->load->view('template/header', $data);
        $this->load->view('template/header_body', $data);
        $this->load->view('template/right_sidebar', $data);
        $this->load->view('template/left_sidebar', $data);
        $this->load->view('legal/cbcp', $data);
        $this->load->view('template/footer');
    }

    public function cbcapprove()
    {

        $data['user'] = $this->db->get_where('user', ['nama' => $this->session->userdata('nama')])->row_array();
        $data['role'] = $this->db->get('user_role')->result_array();
        $data['title'] = 'Approval Case By Case';
        $data['cbc'] = $this->Model_direktur->getCBC();
        $data['cbcp'] = $this->Model_direktur->getCBCP();

        $this->load->view('template/header', $data);
        $this->load->view('template/header_body', $data);
        $this->load->view('template/right_sidebar', $data);
        $this->load->view('template/left_sidebar', $data);
        $this->load->view('direktur/cbcapprove', $data);
        $this->load->view('template/footer');
    }

    public function cbcPDF()
    {
        $this->load->model('Model_CBC');
        $id = $this->uri->segment(3);
        $data['table'] = $this->Model_CBC->getCBCid($id);
        $this->load->view('penjaminan/cetakCBC', $data);

        // title dari pdf
        $this->load->library('pdfcbc');
        $this->data['title_pdf'] = 'Memorandum';

        // filename dari pdf ketika didownload
        $file_pdf = 'SP2K'; // Tambah nama terjamin

        $paper = 'Legal';

        $orientation = "Potrait";

        $html = $this->load->view('penjaminan/cetakCBC', $this->data, true);

        // run dompdf
        $this->pdfcbc->generate($html, $file_pdf, $paper, $orientation);
        $this->load->view('penjaminan/cetakCBC', $data);

    }

    public function cbcpPDF()
    {
        $this->load->model('Model_CBC');
        $id = $this->uri->segment(3);
        $data['table'] = $this->Model_CBC->getCBCPbyid($id);
        $data['tableJA'] = $this->Model_CBC->getCBCPJAbyid($id);
        $data['tableOJK'] = $this->Model_CBC->getCBCPOJKbyid($id);
        $data['tablependapatan'] = $this->Model_CBC->getCBCPpendapatanbyid($id);
        $data['tablepengeluaran'] = $this->Model_CBC->getCBCPpengeluaranbyid($id);
        $this->load->view('penjaminan/cetakCBCP', $data);

        // title dari pdf
        $this->load->library('pdfcbc');
        $this->data['title_pdf'] = 'Analisa permohonan Penjaminan Kredit';

        // filename dari pdf ketika didownload
        $file_pdf = ''; // Tambah nama terjamin

        $paper = 'Legal';

        $orientation = "Potrait";

        $html = $this->load->view('penjaminan/cetakCBCP', $this->data, true);

        // run dompdf
        $this->pdfcbc->generate($html, $file_pdf, $paper, $orientation);
        $this->load->view('penjaminan/cetakCBCP', $data);

        // $this->load->view('operasional/lap_bul', $data);
    }

    public function cbcdetail()
    {
        $id = $this->uri->segment(3);
        $data['user'] = $this->db->get_where('user', ['nama' => $this->session->userdata('nama')])->row_array();
        $data['role'] = $this->db->get('user_role')->result_array();
        $data['title'] = 'Case By Case';
        $data['cbc'] = $this->Model_direktur->getCBC();

        $this->load->view('template/header', $data);
        $this->load->view('template/header_body', $data);
        $this->load->view('template/right_sidebar', $data);
        $this->load->view('template/left_sidebar', $data);
        $this->load->view("direktur/cbcdetail", $data);
        $this->load->view('template/footer');
    }
    public function cbcpdetail()
    {
        $id = $this->uri->segment(3);
        $data['user'] = $this->db->get_where('user', ['nama' => $this->session->userdata('nama')])->row_array();
        $data['role'] = $this->db->get('user_role')->result_array();
        $data['title'] = 'Case By Case';
        $data['cbcp'] = $this->Model_direktur->getCBCP();

        $this->load->view('template/header', $data);
        $this->load->view('template/header_body', $data);
        $this->load->view('template/right_sidebar', $data);
        $this->load->view('template/left_sidebar', $data);
        $this->load->view("direktur/cbcpdetail", $data);
        $this->load->view('template/footer');
    }

    public function inputkomentar()
    {
        $CBCdirektur = $this->input->post('CBCdirektur');
        $CBCid = $this->input->post('CBCid');
        $CBCkeputusan = $this->input->post('CBCkeputusan');

        $bulan = date("m");
        $namauser = $this->db->get_where('user', ['nama' => $this->session->userdata('nama')])->row_array();

        $log = "User: " . $_SERVER['REMOTE_ADDR'] . ' - ' . date("F j, Y, H:i:s") . PHP_EOL .
            "Attempt: " . ("Success Add Komentar") . PHP_EOL .
            "User: " . $namauser['nama'] . PHP_EOL .
            "Aksi: " . ('CBC Direktur') . PHP_EOL .
            "-------------------------" . PHP_EOL;
        //-
        file_put_contents('logfile/' . $bulan . '/logfile' . $date . '/log_' . date("j.n.Y") . '.txt', $log, FILE_APPEND);

        $this->Model_direktur->tambahkomentar($CBCdirektur, $CBCid, $CBCkeputusan);
        redirect('Direktur/');
    }

    public function inputkomentarproduktif()
    {
        $CBCPdirektur = $this->input->post('CBCPdirektur');
        $CBCPid = $this->input->post('CBCPid');
        $CBCPkeputusan = $this->input->post('CBCPkeputusan');
        $this->Model_direktur->tambahkomentarproduktif($CBCPdirektur, $CBCPid, $CBCPkeputusan);

        $date = date("d-m-Y");
        $bulan = date("m");
        $namauser = $this->db->get_where('user', ['nama' => $this->session->userdata('nama')])->row_array();

        $log = "User: " . $_SERVER['REMOTE_ADDR'] . ' - ' . date("F j, Y, H:i:s") . PHP_EOL .
            "Attempt: " . ("Success Add Komentar") . PHP_EOL .
            "User: " . $namauser['nama'] . PHP_EOL .
            "Aksi: " . ('CBC Direktur') . PHP_EOL .
            "-------------------------" . PHP_EOL;
        //-
        file_put_contents('logfile/' . $bulan . '/logfile' . $date . '/log_' . date("j.n.Y") . '.txt', $log, FILE_APPEND);
        redirect('Direktur/');
    }

    public function cbclist()
    {
        $this->load->model('Model_direktur');
        $data['title'] = 'List Case By Case';
        $data['user'] = $this->db->get_where('user', ['nama' => $this->session->userdata('nama')])->row_array();
        //untuk dapatin cbc semua karena getCBCP di Model_direktur pake parameter
        $data['cbc'] = $this->Model_direktur->getCBCAll();
        //untuk dapatin cbcp semuanya dari Model_direktur
        $data['cbcp'] = $this->Model_direktur->getCBCP();

        $this->load->view('template/header', $data);
        $this->load->view('template/header_body', $data);
        $this->load->view('template/right_sidebar', $data);
        $this->load->view('template/left_sidebar', $data);
        $this->load->view('direktur/cbclist', $data);
        $this->load->view('template/footer');
    }

    public function cbcsp2k()
    {
        $id = 2;
        $data['table'] = $this->Model_CBC->getCBCid($id);
        $this->load->view('penjaminan/cetakCBC', $data);

        // title dari pdf
        $this->load->library('pdfsp2k');
        $this->data['title_pdf'] = 'SP2K';

        // filename dari pdf ketika didownload
        $file_pdf = 'SP2K'; // Tambah nama terjamin

        $paper = 'Legal';

        $orientation = "Potrait";

        $html = $this->load->view('penjaminan/cetakSP2K', $this->data, true);

        // run dompdf
        $this->pdfsp2k->generate($html, $file_pdf, $paper, $orientation);
        $this->load->view('penjaminan/cetakSP2K', $data);
    }

    public function cbcpsp2k()
    {
        $id = 5;
        $data['table'] = $this->Model_CBC->getCBCPbyid($id);
        $data['cbcpja'] = $this->Model_CBC->getCBCPJAbyid($id);
        $data['cbcpojk'] = $this->Model_CBC->getCBCPOJKbyid($id);
        $data['cbcppendapatan'] = $this->Model_CBC->getCBCPpendapatanbyid($id);
        $data['cbcppengeluaran'] = $this->Model_CBC->getCBCPpengeluaranbyid($id);

        // title dari pdf
        $this->load->library('pdfsp2k');
        $this->data['title_pdf'] = 'SP2K';

        // filename dari pdf ketika didownload
        $file_pdf = 'SP2K'; // Tambah nama terjamin

        $paper = 'Legal';

        $orientation = "Potrait";

        $html = $this->load->view('penjaminan/cetakSP2Kproduktif', $data, true);

        // run dompdf
        $this->pdfsp2k->generate($html, $file_pdf, $paper, $orientation);
        $this->load->view('penjaminan/cetakSP2Kproduktif', $data);

    }

}
