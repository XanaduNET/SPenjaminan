<?php

class Subrogasi extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Model_subrogasi');

    }

    public function index()
    {
        $keyword = $this->input->post('keyword');
        // $data ['ambilid'] = $this->Model_nasabah->ambilid();
        //   $data['autogen'] = $this->Model_Kredit->noregis();

        $data['title'] = 'Subrogasi';
        $data['user'] = $this->db->get_where('user', ['nama' => $this->session->userdata('nama')])->row_array();
        //$data['flag'] = $keyword;
        $data['table'] = $this->Model_subrogasi->ambil_data();
        $data['role'] = $this->db->get('user_role')->result_array();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('operasional/subrogasi', $data);
        $this->load->view('templates/footer');
    }

    public function cetak()
    {
        $this->load->model('Model_klaim');
        $id = $this->uri->segment(3);
        $data = array('title' => 'Laporan Klaim',
            'accrual' => $this->Model_subrogasi->cetakexcel($id));
        if (!empty($this->uri->segment(3))) {
            $data['table'] = $this->Model_subrogasi->cetakexcel($id);
        } else {
            $data['table'] = $this->Model_subrogasi->cetakexcelsemua();
        }
        $data['user'] = $this->db->get_where('user', ['nama' => $this->session->userdata('nama')])->row_array();
        $date = date("d-m-Y");
        $bulan = date("m");
        $namauser = $this->db->get_where('user', ['nama' => $this->session->userdata('nama')])->row_array();

        $log = "User: " . $_SERVER['REMOTE_ADDR'] . ' - ' . date("F j, Y, H:i:s") . PHP_EOL .
            "Attempt: " . ("Success Export Subrogasi") . PHP_EOL .
            "User: " . $namauser['nama'] . PHP_EOL .
            "Aksi: " . ('Operasional Subrogasi') . PHP_EOL .
            "-------------------------" . PHP_EOL;
        //-
        file_put_contents('logfile/' . $bulan . '/logfile' . $date . '/log_' . date("j.n.Y") . '.txt', $log, FILE_APPEND);
        $this->load->view('operasional/vw_klaim_excel', $data);

    }

}
