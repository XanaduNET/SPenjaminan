<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Risk extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Model_risk');
        $this->load->model('Model_CBC');
    }

    public function index()
    {

        $data['user'] = $this->db->get_where('user', ['nama' => $this->session->userdata('nama')])->row_array();
        $data['role'] = $this->db->get('user_role')->result_array();
        $data['title'] = 'Beranda Manajemen Resiko';

        $data['cbc'] = $this->Model_risk->ambilcasebycase()->row_array();
        $data['cbcp'] = $this->Model_risk->ambilcasebycaseproduktif()->row_array();

        $date = date("d-m-Y");
        $bulan = date("m");
        $namauser = $this->db->get_where('user', ['nama' => $this->session->userdata('nama')])->row_array();

        $log = "User: " . $_SERVER['REMOTE_ADDR'] . ' - ' . date("F j, Y, H:i:s") . PHP_EOL .
            "Attempt: " . ("Success Masuk Halaman") . PHP_EOL .
            "User: " . $namauser['nama'] . PHP_EOL .
            "Aksi: " . ('Beranda Manajemen Risiko') . PHP_EOL .
            "-------------------------" . PHP_EOL;
        //-
        file_put_contents('logfile/' . $bulan . '/logfile' . $date . '/log_' . date("j.n.Y") . '.txt', $log, FILE_APPEND);

        $this->load->view('template/header', $data);
        $this->load->view('template/header_body', $data);
        $this->load->view('template/right_sidebar', $data);
        $this->load->view('template/left_sidebar', $data);
        $this->load->view('risk/beranda', $data);
        $this->load->view('template/footer');
    }

    public function casebycase()
    {
        $data['user'] = $this->db->get_where('user', ['nama' => $this->session->userdata('nama')])->row_array();
        $data['role'] = $this->db->get('user_role')->result_array();
        $data['title'] = 'Case By Case Konsumtif';
        $data['cbc'] = $this->Model_risk->getCBC();

        $this->load->view('template/header', $data);
        $this->load->view('template/header_body', $data);
        $this->load->view('template/right_sidebar', $data);
        $this->load->view('template/left_sidebar', $data);
        $this->load->view('risk/cbc', $data);
        $this->load->view('template/footer');
    }
    public function casebycaseproduktif()
    {
        $data['user'] = $this->db->get_where('user', ['nama' => $this->session->userdata('nama')])->row_array();
        $data['role'] = $this->db->get('user_role')->result_array();
        $data['title'] = 'Case By Case Produktif';
        $data['cbcp'] = $this->Model_risk->getCBCP();

        $this->load->view('template/header', $data);
        $this->load->view('template/header_body', $data);
        $this->load->view('template/right_sidebar', $data);
        $this->load->view('template/left_sidebar', $data);
        $this->load->view('risk/cbcp', $data);
        $this->load->view('template/footer');
    }

    public function casebycaseoption()
    {
        $data['user'] = $this->db->get_where('user', ['nama' => $this->session->userdata('nama')])->row_array();
        $data['role'] = $this->db->get('user_role')->result_array();
        $data['title'] = 'Case By Case';

        $this->load->view('template/header', $data);
        $this->load->view('template/header_body', $data);
        $this->load->view('template/right_sidebar', $data);
        $this->load->view('template/left_sidebar', $data);
        $this->load->view('risk/cbcoption', $data);
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

    public function cbcdetail()
    {
        $id = $this->uri->segment(3);
        $data['user'] = $this->db->get_where('user', ['nama' => $this->session->userdata('nama')])->row_array();
        $data['role'] = $this->db->get('user_role')->result_array();
        $data['title'] = 'Case By Case';
        $data['cbc'] = $this->Model_risk->getCBC();

        $this->load->view('template/header', $data);
        $this->load->view('template/header_body', $data);
        $this->load->view('template/right_sidebar', $data);
        $this->load->view('template/left_sidebar', $data);
        $this->load->view("risk/cbcdetail", $data);
        $this->load->view('template/footer');
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

    public function cbcpdetail()
    {
        $id = $this->uri->segment(3);
        $data['user'] = $this->db->get_where('user', ['nama' => $this->session->userdata('nama')])->row_array();
        $data['role'] = $this->db->get('user_role')->result_array();
        $data['title'] = 'Case By Case';
        $data['cbcp'] = $this->Model_risk->getCBCP();

        $this->load->view('template/header', $data);
        $this->load->view('template/header_body', $data);
        $this->load->view('template/right_sidebar', $data);
        $this->load->view('template/left_sidebar', $data);
        $this->load->view("risk/cbcpdetail", $data);
        $this->load->view('template/footer');
    }

    public function inputkomentar()
    {
        $CBCmr = $this->input->post('CBCmr');
        $CBCid = $this->input->post('CBCid');
        $this->Model_risk->tambahkomentar($CBCmr, $CBCid);

        $date = date("d-m-Y");
        $bulan = date("m");
        $namauser = $this->db->get_where('user', ['nama' => $this->session->userdata('nama')])->row_array();

        $log = "User: " . $_SERVER['REMOTE_ADDR'] . ' - ' . date("F j, Y, H:i:s") . PHP_EOL .
            "Attempt: " . ("Success Add Komentar") . PHP_EOL .
            "User: " . $namauser['nama'] . PHP_EOL .
            "Aksi: " . ('CBC Manajemen Risiko') . PHP_EOL .
            "-------------------------" . PHP_EOL;
        //-
        //Ambil Nama
        $query = "SELECT `tbltrjm`.`TRJMnama`
         FROM `tbltrjm` JOIN `tblcbc`
         ON `tblcbc`.`TRJMid` = `tbltrjm`.`TRJMid`
         WHERE `tblcbc`.`CBCid`= $CBCid
 ";
        $trjmnama = $this->db->query($query)->row_array();
        foreach ($trjmnama as $t) {
            $trjmuser = $t;
        }
        // Send Notifikasi Legal
        $data = array(
            'comment_subject' => 'Keputusan CBC Konsumtif',
            'comment_text' => "CBC Konsumtif A.n $trjmuser",
            'comment_status' => 0,
            'roleId_sender' => 7,
            'roleId_receiver' => 8, // Legal
        );
        $this->db->insert('tbl_comments', $data);

        file_put_contents('logfile/' . $bulan . '/logfile' . $date . '/log_' . date("j.n.Y") . '.txt', $log, FILE_APPEND);
        redirect('Risk/');
    }

    public function inputkomentarproduktif()
    {
        $CBCPmr = $this->input->post('CBCPmr');
        $CBCPid = $this->input->post('CBCPid');
        $this->Model_risk->tambahkomentarproduktif($CBCPmr, $CBCPid);

        $date = date("d-m-Y");
        $bulan = date("m");
        $namauser = $this->db->get_where('user', ['nama' => $this->session->userdata('nama')])->row_array();

        $log = "User: " . $_SERVER['REMOTE_ADDR'] . ' - ' . date("F j, Y, H:i:s") . PHP_EOL .
            "Attempt: " . ("Success Add Komentar") . PHP_EOL .
            "User: " . $namauser['nama'] . PHP_EOL .
            "Aksi: " . ('CBC Manajemen Risiko') . PHP_EOL .
            "-------------------------" . PHP_EOL;
        //-

        //Ambil Nama
        $query = "SELECT `tbltrjm`.`TRJMnama`
         FROM `tbltrjm` JOIN `tblcbcp`
         ON `tblcbcp`.`TRJMid` = `tbltrjm`.`TRJMid`
         WHERE `tblcbcp`.`CBCPid`= $CBCPid";

        $trjmnama = $this->db->query($query)->row_array();
        foreach ($trjmnama as $t) {
            $trjmuser = $t;
        }
        // Send Notifikasi Legal
        $data = array(
            'comment_subject' => 'Keputusan CBC Produktif',
            'comment_text' => "CBC Produktif A.n $trjmuser",
            'comment_status' => 0,
            'roleId_sender' => 7,
            'roleId_receiver' => 8, // Legal
        );
        $this->db->insert('tbl_comments', $data);

        file_put_contents('logfile/' . $bulan . '/logfile' . $date . '/log_' . date("j.n.Y") . '.txt', $log, FILE_APPEND);
        redirect('Risk/');
    }

    public function suratmasuk()
    {
        $data['title'] = 'Surat Masuk Manajemen Risiko';
        $data['user'] = $this->db->get_where('user', ['nama' => $this->session->userdata('nama')])->row_array();
        $role = $data['user']['role_id'];
        $data['sm'] = $this->Model_risk->getSuratMasuk($role);

        $this->load->view('template/header', $data);
        $this->load->view('template/header_body', $data);
        $this->load->view('template/right_sidebar', $data);
        $this->load->view('template/left_sidebar', $data);
        $this->load->view('risk/suratmasukvw', $data);
        $this->load->view('template/footer');

    }
}
