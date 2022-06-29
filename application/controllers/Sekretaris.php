<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Sekretaris extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Model_sekretaris');
    }
    public function suratmasuk()
    {
        $data['title'] = 'Surat Masuk CS';
        $data['user'] = $this->db->get_where('user', ['nama' => $this->session->userdata('nama')])->row_array();

        $data['sm'] = $this->Model_sekretaris->getSM();

        $this->load->view('template/header', $data);
        $this->load->view('template/header_body', $data);
        $this->load->view('template/right_sidebar', $data);
        $this->load->view('template/left_sidebar', $data);
        $this->load->view('sekretaris/suratmasukvw', $data);
        $this->load->view('template/footer');
    }
    public function inputsuratmasuk()
    {
        $SMasal = $_POST['SMasal'];
        $SMnomor = $_POST['SMnomor'];
        $SMtanggalsurat = $_POST['SMtanggalsurat'];
        $SMtanggalterima = $_POST['SMtanggalterima'];
        $SMperihal = $_POST['SMperihal'];
        $SMuntuk = $_POST['SMuntuk'];

        $this->Model_sekretaris->uploadsuratmasuk($SMasal, $SMnomor, $SMtanggalsurat, $SMtanggalterima, $SMperihal, $SMuntuk);
        redirect('Sekretaris/suratmasuk');
    }
    public function accsuratmasuk()
    {
        $data['title'] = 'List Surat Masuk CS';
        $data['user'] = $this->db->get_where('user', ['nama' => $this->session->userdata('nama')])->row_array();

        $data['sm'] = $this->Model_sekretaris->getSMMasuk();

        $this->load->view('template/header', $data);
        $this->load->view('template/header_body', $data);
        $this->load->view('template/right_sidebar', $data);
        $this->load->view('template/left_sidebar', $data);
        $this->load->view('sekretaris/accsuratmasuk', $data);
        $this->load->view('template/footer');
    }
}
